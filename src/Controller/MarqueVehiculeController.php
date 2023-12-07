<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MarqueVehiculeController extends AbstractController
{
    #[Route('/marque/vehicule', name: 'app_marque_vehicule')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MarqueVehiculeController.php',
        ]);
    }
}
