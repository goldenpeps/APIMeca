<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Contrat;
use App\Repository\PieceRepository;
use App\Repository\ContratRepository;
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
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;

class ContratController extends AbstractController
{
    #[Route('/api/ContractController', name: 'Contract.GetAll',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: Contrat::class, groups: ["id","PrixTotal","Create_at","EtatContrat","Id_utilisateurContrat","Assosiative_PieceContrat","Update_at"]))
        )
    )]
    #[OA\Tag(name: 'Contrat')]
    public function GetContratAll(ContratRepository $repositoryC, SerializerInterface $serializer ): JsonResponse
    {
        $contractAll = $repositoryC->findAll();
        $jsonContract  = $serializer->serialize($contractAll,'json',["groups" =>["id","PrixTotal","Create_at","EtatContrat","Id_utilisateurContrat","Assosiative_PieceContrat","Update_at"]]);
         return new JsonResponse($jsonContract, Response::HTTP_OK,[],true);
    }

    #[Route('/api/ContractController/{id}', name: 'Contract.Get',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: Contrat::class, groups: ["id","PrixTotal","Create_at","EtatContrat","Id_utilisateurContrat","Assosiative_PieceContrat","Update_at"]))
        )
    )]
    #[OA\Tag(name: 'Contrat')]
    public function GetContrat(int  $id, ContratRepository $repositoryC, SerializerInterface $serializer ): JsonResponse
    {
        $contract = $repositoryC->find($id);
        $jsonContract = $serializer->serialize($contract,'json',["groups" =>["id","PrixTotal","Create_at","EtatContrat","Id_utilisateurContrat","Assosiative_PieceContrat","Update_at"]]);
         return new JsonResponse($jsonContract, Response::HTTP_OK,[],true);
    }

    #[Route('/api/ContractController', name: 'ContractController.Create',methods:["POST"])]
    #[OA\Tag(name: 'Contrat')]
    public function createContrat(Request $request,UtilisateurMecanoRepository $UtilisateurRepository,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
    
        $contract = $serializer->deserialize($request->getContent(),Contrat::class,'json');
        $utilisateurMecano = $UtilisateurRepository->find($request->toArray()['utilisateurContrat'] ?? -1);
        $contract->setIdUtilisateurContrat($utilisateurMecano);


        $contract->setCreateAt(new DateTimeImmutable());
        $contract->setUpdateAt(new DateTimeImmutable());
        $contract->setEtatContrat('non-payee');

        $entityManager->persist($contract);
        $entityManager->flush();
        $jsonContract = $serializer->serialize($contract,'json',["groups" =>["id","PrixTotal","Create_at","EtatContrat","Id_utilisateurContrat","Assosiative_PieceContrat","Update_at"]]);
        $localion = $interfaceUrl->generate("Contract.Get",["id"=>$contract->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonContract, Response::HTTP_CREATED,[],true);
    }
    #[Route('/api/ContractController/{id}', name: 'ContractController.delete',methods:["DELETE"])]
    #[OA\Tag(name: 'Contrat')]
    public function deleteContrat(Request $request, int  $id, ContratRepository $repositoryC,EntityManagerInterface $entityManager ): JsonResponse
    {
     
        $contract = $repositoryC->find($id);
        $deleteType = $request->query->get('delete_type');
        if (isset($deleteType) && $deleteType === 'soft') {
            $contract->setEtatContrat('payee');
            $contract->setUpdateAt(new DateTimeImmutable());
            $entityManager->persist($contract);
        }
        else {
            $entityManager->remove($contract);
        }
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT, [], false);

    }
    #[Route('/api/ContractController/{id}', name: 'ContractController.update',methods:["PATCH","PUT"])]
    #[OA\Tag(name: 'Contrat')]
    public function updateUtilisateurMecano(int  $id, Request $request, ContratRepository $repositoryC,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $contract = $repositoryC->find($id);
        $updateContrat = $serializer->deserialize($request->getContent(),Contrat::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$contract]); 
        $updateContrat->setUpdateAt(new DateTimeImmutable());
        $entityManager->persist($contract);
        $entityManager->flush();
        $jsonContract = $serializer->serialize($contract,'json',["groups"=> "GetNom"]);
         return new JsonResponse($jsonContract, Response::HTTP_OK,[],true);
    }
}
