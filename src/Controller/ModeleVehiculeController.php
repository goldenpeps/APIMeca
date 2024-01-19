<?php

namespace App\Controller;

use App\Entity\ModeleVehicule;
use App\Repository\MarqueVehiculeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ModeleVehiculeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ModeleVehiculeController extends AbstractController
{
    #[Route('/api/modeleVehiculeController', name: 'ModeleVehicule.GetAll',methods:["GET"])]
    public function GetModeleVehiculeAll(ModeleVehiculeRepository $repositoryMV, SerializerInterface $serializer ): JsonResponse
    {
        $modeleVehiculeAll = $repositoryMV->findAll();
        $jsonModeleVehiculeAll  = $serializer->serialize($modeleVehiculeAll,'json', ["groups" => ["GetNomModele"]]);
         return new JsonResponse($jsonModeleVehiculeAll, Response::HTTP_OK,[],true);
    }

    #[Route('/api/modeleVehiculeController/{id}', name: 'ModeleVehicule.Get',methods:["GET"])]
    public function GetModeleVehicule(int  $id, ModeleVehiculeRepository $repositoryMV, SerializerInterface $serializer ): JsonResponse
    {
        $modeleVehicule = $repositoryMV->find($id);
        $jsonModeleVehicule = $serializer->serialize($modeleVehicule,'json', ["groups" => ["GetNomModele"]]);
         return new JsonResponse($jsonModeleVehicule, Response::HTTP_OK,[],true);
    }
    #[Route('/api/modeleVehiculeController', name: 'ModeleVehicule.Create',methods:["POST"])]
    public function createModeleVehicule(Request $request,MarqueVehiculeRepository $marqueVehiculeRepository,  ModeleVehiculeRepository $repositoryMV,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
        $modeleVehicule = $serializer->deserialize($request->getContent(),ModeleVehicule::class,'json');

        //recuper une reference
        $marcVehicule = $marqueVehiculeRepository->find($request->toArray()['marque_vehicule'] ?? -1);
        $modeleVehicule->setIdMarqueVehicule($marcVehicule);


        $entityManager->persist($modeleVehicule);
        $entityManager->flush();
        $jsonModeleVehicule = $serializer->serialize($modeleVehicule,'json',["groups"=> "GetNomModele"]);
        $localion = $interfaceUrl->generate("ModeleVehicule.Get",["id"=>$modeleVehicule->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonModeleVehicule, Response::HTTP_CREATED,[],true);
    }

    #[Route('/api/modeleVehiculeController/{id}', name: 'ModeleVehicule.delete',methods:["DELETE"])]
    public function deleteModeleVehicule(int  $id, ModeleVehiculeRepository $repositoryMV,EntityManagerInterface $entityManager ): JsonResponse
    {
        $modeleVehicule = $repositoryMV->find($id);
        $entityManager->remove($modeleVehicule);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
    }

    #[Route('/api/modeleVehiculeController/{id}', name: 'ModeleVehicule.update',methods:["PATCH","PUT"])]
    public function updatePiece(int  $id, Request $request, MarqueVehiculeRepository $marqueVehiculeRepository, ModeleVehiculeRepository $repositoryMV,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $modeleVehicule = $repositoryMV->find($id);
        $updatePiece = $serializer->deserialize($request->getContent(),ModeleVehicule::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$modeleVehicule]); 

        $marcVehicule = $marqueVehiculeRepository->find($request->toArray()['marque_vehicule'] ?? -1);
        $modeleVehicule->setIdMarqueVehicule($marcVehicule);

        $entityManager->persist($modeleVehicule);
        $entityManager->flush();
        $jsonModeleVehicule = $serializer->serialize($modeleVehicule,'json',["groups"=> "GetNom"]);
         return new JsonResponse($jsonModeleVehicule, Response::HTTP_OK,[],true);
    }
}
