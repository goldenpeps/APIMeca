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

class UtilisateurMecanoController extends AbstractController
{
    #[Route('/api/UtilisateurMecanoController', name: 'UtilisateurMecano.GetAll',methods:["GET"])]
    public function GetAllUtilisateurMecano(UtilisateurMecanoRepository $repositoryUM, SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecanoAll = $repositoryUM->findAll();
        $jsonUtilisateurMecanoAll = $serializer->serialize($utilisateurMecanoAll,'json', ["groups" => ["GetNom", "GetPrenom"]]);
         return new JsonResponse($jsonUtilisateurMecanoAll, Response::HTTP_OK,[],true);
    }

    #[Route('/api/UtilisateurMecanoController/{id}', name: 'UtilisateurMecano.Get',methods:["GET"])]
    public function GetUneUtilisateurMecano(int  $id, UtilisateurMecanoRepository $repositoryUM, SerializerInterface $serializer ): JsonResponse
    {
        $utilisateurMecano = $repositoryUM->find($id);
        $jsonUtilisateurMecano = $serializer->serialize($utilisateurMecano,'json');
         return new JsonResponse($jsonUtilisateurMecano, Response::HTTP_OK,[],true);
    }
    #[Route('/api/UtilisateurMecanoController', name: 'UtilisateurMecano.Create',methods:["POST"])]
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
