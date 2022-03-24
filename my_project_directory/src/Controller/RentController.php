<?php

namespace App\Controller;

use App\Entity\Automobiles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RentController extends AbstractController
{
    /**
     * @Route("/rent", name="app_rent")
     */
    public function index(): Response
    {


        $auto_list = $this->getDoctrine()->getRepository(Automobiles::class)->findBy(['model' => 'Lada'],['model']);
        dump($auto_list);

        return $this->render('rent/index.html.twig', [
            'auto_list' => $auto_list
        ]);
    }
}