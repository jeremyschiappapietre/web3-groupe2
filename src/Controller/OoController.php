<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OoController extends AbstractController
{
    /**
     * @Route("/oo", name="oo")
     */
    public function index(): Response
    {
        return $this->render('oo/index.html.twig', [
            'controller_name' => 'OoController',
        ]);
    }
}
