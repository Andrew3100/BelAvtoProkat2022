<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TreatyController extends AbstractController
{
    /**
     * @Route("/treaty", name="app_treaty")
     */
    public function index(): Response
    {
        return $this->render('treaty/index.html.twig', [
            'controller_name' => 'TreatyController',
        ]);
    }
}
