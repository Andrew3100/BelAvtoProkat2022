<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConditionRentController extends AbstractController
{
    /**
     * @Route("/condition/rent", name="app_condition_rent")
     */
    public function index(): Response
    {
        return $this->render('condition_rent/index.html.twig', [
            'controller_name' => 'ConditionRentController',
        ]);
    }
}
