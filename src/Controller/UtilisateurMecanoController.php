<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurMecanoController extends AbstractController
{
    #[Route('/utilisateur/mecano', name: 'app_utilisateur_mecano')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UtilisateurMecanoController.php',
        ]);
    }
}
