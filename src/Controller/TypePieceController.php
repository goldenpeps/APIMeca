<?php

namespace App\Controller;

use App\Entity\TypePiece;
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
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;
class TypePieceController extends AbstractController
{
    #[Route('/api/TypePieceController', name: 'TypePieces.GetAll',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: TypePiece::class, groups: ["GetId", "GetLibelle"] ))
        )
    )]
    #[OA\Tag(name: 'Type Piece')]
    public function GetAllTypePiece(TypePieceRepository $repositoryTP, SerializerInterface $serializer ): JsonResponse
    {
        $TypePieceAll = $repositoryTP->findAll();
        $jsonTypePieceAll  = $serializer->serialize($TypePieceAll,'json', ["groups" => ["GetId", "GetLibelle"]]);
         return new JsonResponse($jsonTypePieceAll, Response::HTTP_OK,[],true);
    }

    #[Route('/api/TypePieceController/{id}', name: 'TypePiece.Get',methods:["GET"])]
    #[OA\Response(
        response: 200,
        description: 'Returns the rewards of an user',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: TypePiece::class, groups: ["GetId", "GetLibelle"] ))
        )
    )]
    #[OA\Tag(name: 'Type Piece')]
    public function GetUneTypePiece(int  $id, TypePieceRepository $repositoryTP, SerializerInterface $serializer ): JsonResponse
    {
        $TypePiece = $repositoryTP->find($id);
        $jsonTypePiece = $serializer->serialize($TypePiece,'json',["GetId", "GetLibelle"]);
         return new JsonResponse($jsonTypePiece, Response::HTTP_OK,[],true);
    }
    #[Route('/api/TypePieceController', name: 'TypePiece.Create',methods:["POST"])]
    #[OA\Tag(name: 'Type Piece')]
    public function createPiece(Request $request, TypePieceRepository $repositoryTP,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
        $TypePiece = $serializer->deserialize($request->getContent(),TypePiece::class,'json');
        $entityManager->persist($TypePiece);
        $entityManager->flush();
        $jsonTypePiece = $serializer->serialize($TypePiece,'json');
        $localion = $interfaceUrl->generate("TypePiece.Get",["id"=>$TypePiece->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonTypePiece, Response::HTTP_CREATED,[],true);
    }

    #[Route('/api/TypePieceController/{id}', name: 'TypePiece.delete',methods:["DELETE"])]
    #[OA\Tag(name: 'Type Piece')]
    public function deletePiece(int  $id, TypePieceRepository $repositoryTP,EntityManagerInterface $entityManager ): JsonResponse
    {
        $TypePiece = $repositoryTP->find($id);
        $entityManager->remove($TypePiece);
        $entityManager->flush();
        return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
    }

    #[Route('/api/TypePieceController/{id}', name: 'TypePiece.update',methods:["PATCH","PUT"])]
    #[OA\Tag(name: 'Type Piece')]
    public function updatePiece(int  $id, Request $request, TypePieceRepository $repositoryTP,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $TypePiece = $repositoryTP->find($id);
        $updateTypePiece = $serializer->deserialize($request->getContent(),TypePiece::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$TypePiece]); 
        $entityManager->persist($TypePiece);
        $entityManager->flush();
        $jsonTypePiece = $serializer->serialize($TypePiece,'json',);
         return new JsonResponse($jsonTypePiece, Response::HTTP_OK,[],true);
    }
}
