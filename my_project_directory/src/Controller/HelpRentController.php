<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelpRentController extends AbstractController
{
    /**
     * @Route("/help/rent", name="app_help_rent")
     */
    public function index(): Response
    {
        return $this->render('help_rent/index.html.twig', [
            'controller_name' => 'HelpRentController',
        ]);
    }
}
