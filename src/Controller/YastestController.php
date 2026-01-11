<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class YastestController extends AbstractController
{
    #[Route('/yastest', name: 'app_yastest')]
    public function index(): Response
    {
        return $this->render('yastest/index.html.twig', [
            'prenom' => 'yasss'
        ]);
    }
}
