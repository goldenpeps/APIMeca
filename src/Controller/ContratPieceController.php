<?php

namespace App\Controller;

use App\Entity\Piece;
use App\Entity\Contrat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;
class ContratPieceController extends AbstractController
{
    #[Route('/contratEtPiece', name: 'app_contrat_piece_get_all', methods: ['GET'])]

    #[OA\Tag(name: 'Contract')]
    public function getAll(EntityManagerInterface $entityManager): JsonResponse
    {
        $associations = $entityManager->getRepository(Contrat::class)->findAll();
        $result = [];
        foreach ($associations as $contrat) {
            $contratData = [
                'idContrat' => $contrat->getId(),
                'prixTotal' => $contrat->getPrixTotal(),
                'createAt' => $contrat->getCreateAt()->format('Y-m-d H:i:s'),
                'etatContrat' => $contrat->getEtatContrat(),
                'idUtilisateurContrat' => $contrat->getIdUtilisateurContrat() ? $contrat->getIdUtilisateurContrat()->getId() : null,
                'pieces' => []
            ];

            foreach ($contrat->getAssosiationContratPiece() as $piece) {
                $contratData['pieces'][] = [
                    'idPiece' => $piece->getId(),
                    'nomPiece' => $piece->getNom(),
                    'referencePiece' => $piece->getReference(),
                    'prixPiece' => $piece->getPrix(),
                    'idTypePiece' => $piece->getIdTypePiece() ? $piece->getIdTypePiece()->getId() : null,
                ];
            }

            $result[] = $contratData;
        }

        return new JsonResponse($result, JsonResponse::HTTP_OK);
    }
    #[Route('/contratEtPiece/{contratId}/{pieceId}', name: 'app_contrat_piece_get', methods: ['GET'])]
    #[OA\Tag(name: 'Contract')]
    public function getOne(int $contratId, int $pieceId, EntityManagerInterface $entityManager): JsonResponse
    {
        $contrat = $entityManager->getRepository(Contrat::class)->find($contratId);
        if (!$contrat) {
            return new JsonResponse(['error' => 'Contrat non trouvé'], JsonResponse::HTTP_NOT_FOUND);
        }
        $piece = $entityManager->getRepository(Piece::class)->find($pieceId);
        if (!$piece) {
            return new JsonResponse(['error' => 'Pièce non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        $result = [
            'idContrat' => $contrat->getId(),
            'prixTotal' => $contrat->getPrixTotal(),
            'createAt' => $contrat->getCreateAt()->format('Y-m-d H:i:s'),
            'etatContrat' => $contrat->getEtatContrat(),
            'idUtilisateurContrat' => $contrat->getIdUtilisateurContrat() ? $contrat->getIdUtilisateurContrat()->getId() : null,
            'piece' => [
                'idPiece' => $piece->getId(),
                'nomPiece' => $piece->getNom(),
                'referencePiece' => $piece->getReference(),
                'prixPiece' => $piece->getPrix(),
                'idTypePiece' => $piece->getIdTypePiece() ? $piece->getIdTypePiece()->getId() : null,
            ],
        ];

        return new JsonResponse($result, JsonResponse::HTTP_OK);
    }
    #[Route('/contratEtPiece', name: 'app_contrat_piece_post', methods: ['POST'])]
    #[OA\Tag(name: 'Contract')]
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['contrat'], $data['piece'])) {
            return new JsonResponse(['error' => 'Données incomplètes'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $contrat = $entityManager->getRepository(Contrat::class)->find($data['contrat']);
        if (!$contrat) {
            return new JsonResponse(['error' => 'Contrat non trouvé'], JsonResponse::HTTP_NOT_FOUND);
        }
        $piece = $entityManager->getRepository(Piece::class)->find($data['piece']);
        if (!$piece) {
            return new JsonResponse(['error' => 'Pièce non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        $contrat->addAssosiationContratPiece($piece);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Association créée avec succès'], JsonResponse::HTTP_CREATED);
    }
    #[Route('/contratEtPiece', name: 'app_contrat_piece_delete', methods: ['DELETE'])]
    #[OA\Tag(name: 'Contract')]
    public function delete(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!isset($data['contrat'], $data['piece'])) {
            return new JsonResponse(['error' => 'Données incomplètes'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $contrat = $entityManager->getRepository(Contrat::class)->find($data['contrat']);
        if (!$contrat) {
            return new JsonResponse(['error' => 'Contrat non trouvé'], JsonResponse::HTTP_NOT_FOUND);
        }
        $piece = $entityManager->getRepository(Piece::class)->find($data['piece']);
        if (!$piece) {
            return new JsonResponse(['error' => 'Pièce non trouvée'], JsonResponse::HTTP_NOT_FOUND);
        }
        $contrat->removeAssosiationContratPiece($piece);
        $entityManager->flush();
        return new JsonResponse(['message' => 'Association supprimée avec succès'], JsonResponse::HTTP_OK);
    }
}
