<?php

namespace App\Controller;

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

          /*Добавление записи в БД*/
//        $array = ['Peugeot Partner','Mercedes E-class','Lada Vesta'];
//        for ( $i = 0; $i < count($array); $i++) {
//            $entityManager = $this->getDoctrine()->getManager();
//            $auto = new Automobiles();
//            $auto->setMark(explode(' ',$array[$i])[0])->setModel(explode(' ',$array[$i])[1]);
//            $entityManager->persist($auto);
//            $entityManager->flush();
//        }


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'var' => 'Привет',

        ]);
    }
}
