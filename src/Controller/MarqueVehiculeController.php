<?php

namespace App\Controller;

use App\Entity\MarqueVehicule;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\MarqueVehiculeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MarqueVehiculeController extends AbstractController
{
    #[Route('/api/marqueController', name: 'marqueVehicule.GetAll',methods:["GET"])]
    public function GetAllMarque(MarqueVehiculeRepository $repositoryV, SerializerInterface $serializer ): JsonResponse
    {
        $marqueVehiculeAll = $repositoryV->findAll();
        $jsonMarqueVehiculeAll  = $serializer->serialize($marqueVehiculeAll,'json');
         return new JsonResponse($jsonMarqueVehiculeAll, Response::HTTP_OK,[],true);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.Get',methods:["GET"])]
    public function GetUneMarqueVehicule(int  $id, MarqueVehiculeRepository $repositoryV, SerializerInterface $serializer ): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule,'json');
         return new JsonResponse($jsonMarqueVehicule, Response::HTTP_OK,[],true);
    }
    #[Route('/api/marqueController', name: 'marqueVehicule.Create',methods:["POST"])]
    public function createMarqueVehicule(Request $request, MarqueVehiculeRepository $repositoryV,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
        $marqueVehicule = $serializer->deserialize($request->getContent(),MarqueVehicule::class,'json');
        $entityManager->persist($marqueVehicule);
        $entityManager->flush();
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule,'json');
        $localion = $interfaceUrl->generate("marqueVehicule.Get",["id"=>$marqueVehicule->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonMarqueVehicule, Response::HTTP_CREATED,[],true);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.delete',methods:["DELETE"])]
    public function deleteMarqueVehicule(int  $id, MarqueVehiculeRepository $repositoryV,EntityManagerInterface $entityManager ): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $entityManager->remove($marqueVehicule);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
    }

    #[Route('/api/marqueController/{id}', name: 'marqueVehicule.update',methods:["PATCH","PUT"])]
    public function updateMarqueVehicule(int  $id, Request $request, MarqueVehiculeRepository $repositoryV,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $marqueVehicule = $repositoryV->find($id);
        $updateMarqueVehicule = $serializer->deserialize($request->getContent(),MarqueVehicule::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$marqueVehicule]); 
        $entityManager->persist($marqueVehicule);
        $entityManager->flush();
        $jsonMarqueVehicule = $serializer->serialize($marqueVehicule,'json',);
         return new JsonResponse($jsonMarqueVehicule, Response::HTTP_OK,[],true);
    }
}
