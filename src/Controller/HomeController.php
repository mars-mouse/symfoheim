<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        // Page d'accueil

        return $this->render('home/index.html.twig', [
            'pageTitle' => 'Symfoheim',
            'titleImage' => 'build/images/old-house-720.jpg',
        ]);
    }
}