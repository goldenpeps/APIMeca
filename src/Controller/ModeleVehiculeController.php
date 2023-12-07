<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ModeleVehiculeController extends AbstractController
{
    #[Route('/modele/vehicule', name: 'app_modele_vehicule')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ModeleVehiculeController.php',
        ]);
    }
}
