<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DaschboardController extends AbstractController
{
    #[Route('/daschboard', name: 'daschboard')]
    public function index(): Response
    {
        return $this->render('daschboard/index.html.twig', [
            'controller_name' => 'DaschboardController',
            'pageTitle' => 'Hallo Daschboard Manni'
        ]);
    }
}