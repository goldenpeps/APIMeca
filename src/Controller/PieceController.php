<?php

namespace App\Controller;


use App\Repository\PieceRepository;
use App\Entity\Piece;
use App\Repository\TypePieceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PieceController extends AbstractController
{
    #[Route('/api/PieceController', name: 'Pieces.GetAll',methods:["GET"])]
    public function GetAllPiece(PieceRepository $repositoryP, SerializerInterface $serializer ): JsonResponse
    {
        $PieceAll = $repositoryP->findAll();
        $jsonPieceAll = $serializer->serialize($PieceAll, 'json', ["groups" => ["GetId", "GetNom", "GetReference", "GetTypePiece"]]);
        
        return new JsonResponse($jsonPieceAll, Response::HTTP_OK, [], true);
    }

    #[Route('/api/PieceController/{id}', name: 'Pieces.Get',methods:["GET"])]
    public function GetPiece(int  $id, PieceRepository $repositoryP, SerializerInterface $serializer ): JsonResponse
    {
        $Piece = $repositoryP->find($id);
        $jsonPiece = $serializer->serialize($Piece,'json', ["groups" => ["GetId", "GetNom","GetType","GetReference"]]);
         return new JsonResponse($jsonPiece, Response::HTTP_OK,[],true);
    }
    #[Route('/api/PieceController', name: 'Pieces.Create',methods:["POST"])]
    public function createPiece(Request $request, TypePieceRepository $repositoryTP,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
        $Piece = $serializer->deserialize($request->getContent(),Piece::class,'json');

        $TypePiece = $repositoryTP->find($request->toArray()['type_piece'] ?? -1);
        $Piece->setIdTypePiece($TypePiece);

        $entityManager->persist($Piece);
        $entityManager->flush();
        $jsonPiece = $serializer->serialize($Piece,'json',["groups"=> "GetNom"]);
        $localion = $interfaceUrl->generate("Pieces.Get",["id"=>$Piece->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonPiece, Response::HTTP_CREATED,[],true);
    }

    #[Route('/api/PieceController/{id}', name: 'Pieces.delete',methods:["DELETE"])]
    public function deletePiece(int  $id, PieceRepository $repositoryP,EntityManagerInterface $entityManager ): JsonResponse
    {
        $Piece = $repositoryP->find($id);
        $entityManager->remove($Piece);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
    }

    #[Route('/api/PieceController/{id}', name: 'Pieces.update',methods:["PATCH","PUT"])]
    public function updatePiece(int  $id, Request $request, PieceRepository $repositoryP,TypePieceRepository $repositoryTP, EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $Piece = $repositoryP->find($id);
        $updatePiece = $serializer->deserialize($request->getContent(),Piece::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$Piece]); 

        $TypePiece = $repositoryTP->find($request->toArray()['type_piece'] ?? -1);
        $Piece->setIdTypePiece($TypePiece);

    
        $entityManager->persist($Piece);
        $entityManager->flush();
        $jsonPiece = $serializer->serialize($Piece,'json',["groups"=> "GetNom"]);
         return new JsonResponse($jsonPiece, Response::HTTP_OK,[],true);
    }
}
