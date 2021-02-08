<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PistaController extends AbstractController
{
    /**
     * @Route("/pistas", name="pistas")
     */
    public function index(): Response
    {
        return $this->render('pista/index.html.twig', [
            'controller_name' => 'PistaController',
        ]);
    }
}
