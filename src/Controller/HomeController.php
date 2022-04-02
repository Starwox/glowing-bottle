<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }

    #[Route('/bottle', name: 'bottle')]
    public function bottle()
    {
        return $this->render('bottle/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

}
