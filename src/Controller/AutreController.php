<?php

namespace App\Controller;

use DateTimeImmutable;

use App\Entity\MonTypeT;
use App\Entity\ModeleTest;
use App\Repository\MonTypeTRepository;
use App\Repository\ModeleTestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;

class AutreController extends AbstractController
    {
        // #[Route('/monControllerT', name: 'app_mon')]
        public function index(): JsonResponse
        {
            return $this->json([
                'message' => 'Welcome to your new controller!',
                'path' => 'src/Controller/MonController.php',
            ]);
        }
    
        #[Route('/api/AutreControllerT', name: 'monTypeT.GetAll',methods:["GET"])]
        #[OA\Tag(name: 'Ne pas tester exercice')]
       
        public function GetAllType(MonTypeTRepository $repository, SerializerInterface $serializer ): JsonResponse
        {
            $monTypeT = $repository->findAll();
            // dd($modeleTests);
            $jsonMonTypeTTests = $serializer->serialize($monTypeT,'json');
             return new JsonResponse($jsonMonTypeTTests, Response::HTTP_OK,[],true);
            // return $this->json([
            //     'message' => 'Welcome to your new controller!',
            //     'path' => 'src/Controller/MonController.php',
            // ]);
        }
        #[Route('/api/AutreControllerT/{id}', name: 'monTypeT.Get',methods:["GET"])]
        #[OA\Tag(name: 'Ne pas tester exercice')]
        public function GetModeleUnique(int  $id,MonTypeTRepository $repositoryMonType,  ModeleTestRepository $repositoryModeleTest, SerializerInterface $serializer ): JsonResponse
        {
            $modeleTest = $repositoryMonType->find($id);
            // dd($modeleTests);
            $jsonmodeleTest = $serializer->serialize($modeleTest,'json');
             return new JsonResponse($jsonmodeleTest, Response::HTTP_OK,[],true);
            // return $this->json([
            //     'message' => 'Welcome to your new controller!',
            //     'path' => 'src/Controller/MonController.php',
            // ]);
        }
        //recuper plusieur donné
        #[Route('/api/AutreControllerT', name: 'monTypeT.Create',methods:["POST"])]
        #[OA\Tag(name: 'Ne pas tester exercice')]
        public function creatModelsTest(Request $request, ModeleTestRepository $repository,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
        {
           
            $modeleTestCreate = $serializer->deserialize($request->getContent(),MonTypeT::class,'json');
            $modeleTestCreate->setCreateBy(new DateTimeImmutable());
            $modeleTestCreate->setUpdateBy(new DateTimeImmutable());
    
            $entityManager->persist($modeleTestCreate);
            $entityManager->flush();
            $jsonmodeleTest = $serializer->serialize($modeleTestCreate,'json');
            $localion = $interfaceUrl->generate("monTypeT.Get",["id"=>$modeleTestCreate->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
            return new JsonResponse($jsonmodeleTest, Response::HTTP_CREATED,[],true);
           
        }
        //suprimer donnée
        #[Route('/api/AutreControllerT/{id}', name: 'monTypeT.delete',methods:["DELETE"])]
        #[OA\Tag(name: 'Ne pas tester exercice')]
        public function deleteModeleUnique(int  $id, ModeleTestRepository $repository,EntityManagerInterface $entityManager ): JsonResponse
        {
            $modeleTest = $repository->find($id);
            $entityManager->remove($modeleTest);
            $entityManager->flush();
    
             return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
            // return $this->json([
            //     'message' => 'Welcome to your new controller!',
            //     'path' => 'src/Controller/MonController.php',
            // ]);
        }
        //mis a jour  
        #[Route('/api/AutreControllerT/{id}', name: 'monTypeT.update',methods:["PATCH","PUT"])]
        #[OA\Tag(name: 'Ne pas tester exercice')]
        public function updateModeleUnique(int  $id, Request $request, ModeleTestRepository $repository,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
        {
            $modeleTest = $repository->find($id);
            $updateModeleTest = $serializer->deserialize($request->getContent(),ModeleTest::class,'json',[AbstractNormalizer::OBJECT_TO_POPULATE =>$modeleTest]); 
            $updateModeleTest->setCreateAt(new DateTimeImmutable());
            $updateModeleTest->setUpdateAt(new DateTimeImmutable());
            $entityManager->persist($modeleTest);
            $entityManager->flush();
    
             return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
        }
    }

