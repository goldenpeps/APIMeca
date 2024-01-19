<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\DowloadFile;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DowloadFileRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DowloadFilesController extends AbstractController
{
    #[Route('/dowload/files', name: 'app.index')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DowloadFilesController.php',
        ]);
    }
    #[Route('/api/files', name: 'app_dowload_files', methods: ["POST"])]
    public function createFile(Request $request, DowloadFileRepository  $dowloadFileRepository, EntityManagerInterface $entityManagerInterface, UrlGeneratorInterface $urlGeneratorInterface): JsonResponse
    {
        $newFile = new DowloadFile();

        $file = $request->files->get("file");

        $newFile->setFile($file);
        $newFile->setEtat("off");
        $entityManagerInterface->persist($newFile);
        $entityManagerInterface->flush();
        $realname = $newFile->getRealName();
        $publicname = $newFile->getPublicpath();
        $slug = $newFile->getSlug();
        $jsonPicture = [
            "id" => $newFile->getId(),
            "name" => $newFile->getName(),
            "slug" => $newFile->getSlug(),
            "mimetype" => $newFile->getMimeType(),
            "puplicpath" => $newFile->getPublicpath()

        ];
        $location = $urlGeneratorInterface->generate("app.index", [], UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonPicture, Response::HTTP_CREATED, ["Location" => $location . $publicname . "/" . $slug]);
    }
    // #[Route('api/file/{id}', name: 'app_files.update', methods:['PUT'])]
    // public function updatePicture(int $id, DowloadFileRepository $repository, SerializerInterface $serializer, Request $request, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator): JsonResponse
    // {
    //     $card = $repository->find($id);

    //     if (!$card) {
    //         return new JsonResponse(['error' => 'File not found'], Response::HTTP_NOT_FOUND);
    //     }
    //     $requestData = $request->toArray();
    //     $userId = $requestData['user_id'];
        
    //     if (!$userId) {
    //         return new JsonResponse(['error' => 'User ID not provided'], Response::HTTP_BAD_REQUEST);
    //     }
    //     $user = $entityManager->getRepository(User::class)->find($userId);

    //     if (!$user) {
    //         return new JsonResponse(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
    //     }

    //     if ($card->getUser()) {
    //         return new JsonResponse(['error' => 'File already associated with a user'], Response::HTTP_BAD_REQUEST);
    //     }
    //     $card->setUser($user);
    //     $entityManager->persist($card);
    //     $entityManager->flush();
    //     $jsonCards = $serializer->serialize($card, 'json');
    //     return new JsonResponse($jsonCards, Response::HTTP_OK, [], true);
    // }
}
