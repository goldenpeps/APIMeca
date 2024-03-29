<?php

namespace App\Controller;

use App\Entity\Piece;
use App\Entity\Contrat;
use OpenApi\Attributes as OA;
use App\Entity\ModeleVehicule;
use Doctrine\ORM\EntityManagerInterface;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PieceModeleController extends AbstractController
{
    #[Route('/api/PieceEtModele', name: 'app_piece_modele_get_all', methods: ['GET'])]
    // #[OA\Response(
    //     response: 200,
    //     description: 'Returns the rewards of an user',
    //     content: new OA\JsonContent(
    //         type: 'array',
    //         items: new OA\Items(ref: new Model(type: PieceModeleController::class, groups: ["piece_id", "modele_ids"] ))
    //     )
    // )]
    #[OA\Tag(name: 'Piece Modele')]

    public function getAll(EntityManagerInterface $entityManager,SerializerInterface $serializer, UrlGeneratorInterface $interfaceUrl ): JsonResponse
    {

            $pieces = $entityManager->getRepository(Piece::class)->findAll();
            $result = [];
            foreach ($pieces as $piece) {
                $pieceData = [
                    'piece_id' => $piece->getId(),
                    'modele_ids' => [],
                ];
                $modeles = $piece->getAssosiativePieceModeleVehicule();
    
                foreach ($modeles as $modele) {
                    $pieceData['modele_ids'][] = $modele->getId();
                }
                if (!empty($pieceData['modele_ids'])) {
                    $result[] = $pieceData;
                }
            }
            if (empty($result)) {
                return $this->json(['message' => 'Aucune liaison entre les pièces et les modèles.']);
            }
            // return $this->json($result);
            $jsonTypePiece = $serializer->serialize($result,'json');
            // $piece= $entityManager->getRepository(Piece::class)->findBy(["id" => $result[0]['piece_id']]);
            // $modele= $entityManager->getRepository(ModeleVehicule::class)->findBy(["id" => $result[0]['modele_ids']]);
            return new JsonResponse($jsonTypePiece, Response::HTTP_OK,[],true);
        }
        
    #[Route('/api/PieceEtModele/{modeleId}/{pieceId}', name: 'app_piece_modele_get_one', methods: ['GET'])]
    #[OA\Tag(name: 'Piece Modele')]
    public function getOne($modeleId, $pieceId, EntityManagerInterface $entityManager): JsonResponse
    {
        $modele = $entityManager->getRepository(ModeleVehicule::class)->find($modeleId);
        $piece = $entityManager->getRepository(Piece::class)->find($pieceId);
        if (!$modele || !$piece) {
            return $this->json(['error' => 'Le modèle ou la pièce spécifié(e) n\'existe pas.'], 404);
        }

        if (!$piece->getAssosiativePieceModeleVehicule()->contains($modele)) {
            return $this->json(['error' => 'La liaison entre la pièce et le modèle n\'existe pas.'], 404);
        }
        $response = [
            'piece' => [
                'id' => $piece->getId(),
                'nom' => $piece->getNom(),
                'reference' => $piece->getReference(),
                'prix' => $piece->getPrix(),
            ],
            'modele' => [
                'id' => $modele->getId(),
                'nom' => $modele->getNom(),
                'annee' => $modele->getAnnee(),
                'version' => $modele->getVersion(),
            ],
        ];

        return $this->json($response);
    }

    #[Route('/api/PieceEtModele', name: 'app_modele_piece_post', methods: ['POST'])]
    #[OA\Tag(name: 'Piece Modele')]
    public function createPieceModel(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['modele'], $data['piece'])) {
            return new JsonResponse(['error' => 'Données incomplètes'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $modeles = $entityManager->getRepository(ModeleVehicule::class)->find($data['modele']);
        if (!$modeles) {
            return new JsonResponse(['error' => 'modele non trouvé'], JsonResponse::HTTP_NOT_FOUND);
        }
        $piece = $entityManager->getRepository(Piece::class)->find($data['piece']);
        if (!$piece) {
            return new JsonResponse(['error' => 'Pièce non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        $modeles->addAssosiativeModeleVehiculePiece($piece);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Association créée avec succès'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/PieceEtModele',name: 'app_modele_piece_delete', methods: ['DELETE'])]
    #[OA\Tag(name: 'Piece Modele')]
    public function delete(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['modele'], $data['piece'])) {
            return new JsonResponse(['error' => 'Données incomplètes'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $modeles = $entityManager->getRepository(ModeleVehicule::class)->find($data['modele']);
        if (!$modeles) {
            return new JsonResponse(['error' => 'Contrat non trouvé'], JsonResponse::HTTP_NOT_FOUND);
        }
        $piece = $entityManager->getRepository(Piece::class)->find($data['piece']);
        if (!$piece) {
            return new JsonResponse(['error' => 'Pièce non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        $modeles->removeAssosiativeModeleVehiculePiece($piece);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Association supprimée avec succès'], JsonResponse::HTTP_OK);
    }

}
