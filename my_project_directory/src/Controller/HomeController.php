<?php

namespace App\Controller;

use App\Entity\AutomobileMarks;
use App\Entity\Automobiles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {


        /*Выборка данных из таблицы*/
        $mark_list = $this->getDoctrine()->getRepository(Automobiles::class)->findAll();

//        var_dump(($mark_list));



        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'

        ]);
    }
}