<?php

namespace App\Controller;

use App\Entity\MarqueVehicule;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DowloadFileRepository;
use App\Repository\MarqueVehiculeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;

class MarqueVehiculeController extends AbstractController
{
    #[Route('/api/marqueController', name: 'marqueVehicule.GetAll', methods: ["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: MarqueVehicule::class, groups: ['id','libelle']))
        )
    )]
    #[OA\Tag(name: 'Marque')]
  

    public function GetAllMarque(MarqueVehiculeRepository $repositoryV, SerializerInterface $serializer): JsonResponse
    {
        $marqueVehiculeAll = $repositoryV->findAll();
        $jsonMarqueVehiculeAll  = $serializer->serialize($marqueVehiculeAll, 'json', ["groups" => ["id","libelle"]]);
        return new JsonResponse($jsonMarqueVehiculeAll, Response::HTTP_OK, [], true);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.Get', methods: ["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: MarqueVehicule::class, groups: ['id','libelle']))
        )
    )]
    #[OA\Tag(name: 'Marque')]
    public function GetUneMarqueVehicule(int  $id, MarqueVehiculeRepository $repositoryV, SerializerInterface $serializer): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule, 'json',["groups" => ["id","libelle"]]);
        return new JsonResponse($jsonMarqueVehicule, Response::HTTP_OK, [], true);
    }
    #[Route('/api/marqueController', name: 'marqueVehicule.Create', methods: ["POST"])]
    #[OA\Tag(name: 'Marque')]
    public function createMarqueVehicule(Request $request, MarqueVehiculeRepository $repositoryV, EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl, SerializerInterface $serializer): JsonResponse
    {
        $marqueVehicule = $serializer->deserialize($request->getContent(), MarqueVehicule::class, 'json');
        $entityManager->persist($marqueVehicule);
        $entityManager->flush();
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule, 'json');
        $localion = $interfaceUrl->generate("marqueVehicule.Get", ["id" => $marqueVehicule->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonMarqueVehicule, Response::HTTP_CREATED, [], true);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.delete', methods: ["DELETE"])]
    #[OA\Tag(name: 'Marque')]
    public function deleteMarqueVehicule(int  $id, MarqueVehiculeRepository $repositoryV, EntityManagerInterface $entityManager): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $entityManager->remove($marqueVehicule);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT, []);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.update', methods: ["PATCH", "PUT"])]
    #[OA\Tag(name: 'Marque')]
    public function updateMarqueVehicule(int  $id, Request $request, MarqueVehiculeRepository $repositoryV, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $updateMarqueVehicule = $serializer->deserialize($request->getContent(), MarqueVehicule::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $marqueVehicule]);
        $entityManager->persist($marqueVehicule);
        $entityManager->flush();
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule, 'json',);
        return new JsonResponse($jsonMarqueVehicule, Response::HTTP_OK, [], true);
    }

    #[Route('/api/marqueController/setimage/{idv}/{idI}', name: 'marqueVehicule.update', methods: ["PUT"])]
    #[OA\Tag(name: 'Marque')]
    public function UpdateImage(int $idv, int $idI, DowloadFileRepository $repository, MarqueVehiculeRepository $marqueVehiculeRepository, SerializerInterface $serializer, Request $request, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator): JsonResponse
    {
        $marqueVehicule = $marqueVehiculeRepository->find($idv);
    
        $Image = $repository->find($idI);
        $Image->setEtat("old");
        if (!$marqueVehicule) {
            return new JsonResponse(['error' => 'marqueVehicule not found'], Response::HTTP_NOT_FOUND);
        }
        if (!$Image) {
            return new JsonResponse(['error' => 'User ID not provided'], Response::HTTP_BAD_REQUEST);
        }
        if ($marqueVehicule->getImage()) {
                    return new JsonResponse(['error' => 'File already associated with a user'], Response::HTTP_BAD_REQUEST);
                }
                $marqueVehicule->setImage($Image);
                    $entityManager->persist($marqueVehicule);
                    $entityManager->flush();
                    $jsonCards = $serializer->serialize($marqueVehicule, 'json');
                    return new JsonResponse($jsonCards, Response::HTTP_OK, [], true);
    }
}
