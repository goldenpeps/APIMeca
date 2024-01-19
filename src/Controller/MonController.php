<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\ModeleTest;
use Metadata\Cache\CacheInterface;
use App\Repository\ModeleTestRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\Cache\TagAwareCacheInterface;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Attributes as OA;

class MonController extends AbstractController
{
    // #[Route('/monControllerT', name: 'app_mon')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MonController.php',
        ]);
    }

    // #[Route('/api/monControllerT', name: 'modeleTests.GetAll',methods:["GET"])]
    // #[OA\Tag(name: 'Ne pas tester exercice')]
    // #[IsGranted("ADMIN",message:"nuh nuh")]
    // public function GetAllModele(ModeleTestRepository $repository, SerializerInterface $serializer,TagAwareCacheInterface  $cache): JsonResponse
    // {
    //     $modeleTests = $repository->findAll();
    //     // dd($modeleTests);
    //     // $jsonmodeleTests = $serializer->serialize($modeleTests,'json', ["groups"=> "GetmodeleTests"]);
        
    //     // $idCache ="GetAllModele";
    //     // $jsonmodeleTests= $cache->get($idCache, function (ItemInterface $item) use ($repository, $serializer){
    //     //     $item->tag("modeleCache");
    //     //     $listeModele = $repository->findAll();
    //     //     $context = SerializationContext::create()->setGroups(['GetAllModele']);
    //     //     return $serializer->serialize($listeModele, 'json', $context);
    //     // });

    //     //  return new JsonResponse($jsonmodeleTests, Response::HTTP_OK,[],true);
    //     // // return $this->json([
    //     //     'message' => 'Welcome to your new controller!',
    //     //     'path' => 'src/Controller/MonController.php',
    //     // ]);
    // }

    #[Route('/api/monControllerT/{id}', name: 'modeleTests.Get',methods:["GET"])]
    #[OA\Tag(name: 'Ne pas tester exercice')]
    public function GetModeleUnique(int  $id, ModeleTestRepository $repository, SerializerInterface $serializer ): JsonResponse
    {
        $modeleTest = $repository->find($id);
        // dd($modeleTests);
        $jsonmodeleTest = $serializer->serialize($modeleTest,'json');
         return new JsonResponse($jsonmodeleTest, Response::HTTP_OK,[],true);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/MonController.php',
        // ]);
    }
    //recuper plusieur donné
    #[Route('/api/monControllerT', name: 'modeleTests.Create',methods:["POST"])]
    #[OA\Tag(name: 'Ne pas tester exercice')]
    public function creatModelsTest(Request $request, ModeleTestRepository $repository,EntityManagerInterface $entityManager, UrlGeneratorInterface $interfaceUrl ,SerializerInterface $serializer ): JsonResponse
    {
       
        $modeleTestCreate = $serializer->deserialize($request->getContent(),ModeleTest::class,'json');
        $modeleTestCreate->setCreateAt(new DateTimeImmutable());
        $modeleTestCreate->setUpdateAt(new DateTimeImmutable());

        $entityManager->persist($modeleTestCreate);
        $entityManager->flush();
        $jsonmodeleTest = $serializer->serialize($modeleTestCreate,'json');
        $localion = $interfaceUrl->generate("modeleTests.Get",["id"=>$modeleTestCreate->getId()],UrlGeneratorInterface::ABSOLUTE_URL);
        return new JsonResponse($jsonmodeleTest, Response::HTTP_CREATED,[],true);
       
    }
    //suprimer donnée
    #[Route('/api/monControllerT/{id}', name: 'modeleTests.delete',methods:["DELETE"])]
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
    #[Route('/api/monControllerT/{id}', name: 'modeleTests.update',methods:["PATCH","PUT"])]
    #[OA\Tag(name: 'Ne pas tester exercice')]
    public function updateModeleUnique(int  $id,ValidatorInterface $validator, Request $request, ModeleTestRepository $repository,EntityManagerInterface $entityManager ,SerializerInterface $serializer ): JsonResponse
    {
        $modeleTest = $repository->find($id);
        $updateModeleTest = $serializer->deserialize($request->getContent(),ModeleTest::class,'json'); 
        $modeleTest->setName($modeleTest->getName() ?? $updateModeleTest->getName());
        $updateModeleTest->setCreateAt(new DateTimeImmutable());
        $updateModeleTest->setUpdateAt(new DateTimeImmutable());
        $erros = $validator->validate($updateModeleTest);
        if($erros->count()>0){
            return new JsonResponse($serializer->serialize($erros, 'json'), Response::HTTP_BAD_REQUEST, [], true);
        }else{
            $entityManager->persist($modeleTest);
            $entityManager->flush();
            return new JsonResponse(null, Response::HTTP_NO_CONTENT,[]);
        }

         
    }
}
