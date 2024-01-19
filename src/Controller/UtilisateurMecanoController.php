<?php

namespace App\Controller;

use App\Entity\UtilisateurMecano;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\UtilisateurMecanoRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use DateTimeImmutable;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;
class UtilisateurMecanoController extends AbstractController
{
    #[Route('/api/UtilisateurMecanoController', name: 'UtilisateurMecano.GetAll',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: UtilisateurMecano::class, groups: ["id","GetNom", "GetPrenom"] ))
        )
    )]
    #[OA\Tag(name: 'utilisateur Mecano')]
    public function GetAllUtilisateurMecano(UtilisateurMecanoRepository $repositoryUM, SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecanoAll = $repositoryUM->findAll();
        $jsonUtilisateurMecanoAll = $serializer->serialize($utilisateurMecanoAll,'json', ["groups" => ["id","GetNom", "GetPrenom"]]);
         return new JsonResponse($jsonUtilisateurMecanoAll, Response::HTTP_OK,[],true);
    }

    #[Route('/api/UtilisateurMecanoController/{id}', name: 'UtilisateurMecano.Get',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: UtilisateurMecano::class, groups: ["id","GetNom", "GetPrenom"] ))
        )
    )]
    #[OA\Tag(name: 'utilisateur Mecano')]
    public function GetUneUtilisateurMecano(int  $id, UtilisateurMecanoRepository $repositoryUM, SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecano = $repositoryUM->find($id);
        $jsonUtilisateurMecano = $serializer->serialize($utilisateurMecano,'json', ["groups" => ["id","GetNom", "GetPrenom"]]);
         return new JsonResponse($jsonUtilisateurMecano, Response::HTTP_OK,[],true);
    }
    #[Route('/api/UtilisateurMecanoController', name: 'UtilisateurMecano.Create',methods:["POST"])]
    #[OA\Tag(name: 'utilisateur Mecano')]
    public function createUtilisateurMecano(Request $request, UtilisateurMecanoRepository $repositoryUM,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecano = $serializer->deserialize($request->getContent(),UtilisateurMecano::class,'json');
        $utilisateurMecano->setCreateAt(new DateTimeImmutable());
        $utilisateurMecano->setUpdateAt(new DateTimeImmutable());
        $utilisateurMecano->setStatus("Active");
        $entityManager->persist($utilisateurMecano);
        $entityManager->flush();
        $jsonUtilisateurMecano = $serializer->serialize($utilisateurMecano,'json');
        $localion = $interfaceUrl->generate("UtilisateurMecano.Get",["id"=>$utilisateurMecano->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonUtilisateurMecano, Response::HTTP_CREATED,[],true);
    }

    #[Route('/api/UtilisateurMecanoController/{id}', name: 'UtilisateurMecano.delete',methods:["DELETE"])]
    #[OA\Tag(name: 'utilisateur Mecano')]
    public function deleteUtilisateurMecano(Request $request, int  $id, UtilisateurMecanoRepository $repositoryUM,EntityManagerInterface $entityManager ): JsonResponse
    {
        // $utilisateurMecano = $repositoryUM->find($id);
        // $entityManager->remove($utilisateurMecano);
        // $entityManager->flush();
        // return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
        $utilisateurMecano = $repositoryUM->find($id);
        $deleteType = $request->query->get('delete_type');

        if (isset($deleteType) && $deleteType === 'soft') {
            $utilisateurMecano->setStatus('inactive');
            $utilisateurMecano->setUpdateAt(new DateTimeImmutable());
            $entityManager->persist($utilisateurMecano);
        }
        else {
            $entityManager->remove($utilisateurMecano);
        }

        $entityManager->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT, [], false);

    }

    #[Route('/api/UtilisateurMecano/{id}', name: 'UtilisateurMecano.update',methods:["PATCH","PUT"])]
    #[OA\Tag(name: 'utilisateur Mecano')]
    public function updateMarqueVehicule(int  $id, Request $request, UtilisateurMecanoRepository $repositoryUM,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecano = $repositoryUM->find($id);
        $updateMarqueVehicule = $serializer->deserialize($request->getContent(),UtilisateurMecano::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$utilisateurMecano]); 
        $updateMarqueVehicule->setUpdateAt(new DateTimeImmutable());
        $entityManager->persist($utilisateurMecano);
        $entityManager->flush();
        $jsonUtilisateurMecano = $serializer->serialize($utilisateurMecano,'json',["groups"=> "GetNom"]);
         return new JsonResponse($jsonUtilisateurMecano, Response::HTTP_OK,[],true);
    }
}
