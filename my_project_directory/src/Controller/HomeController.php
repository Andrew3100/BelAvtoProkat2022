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

        /*Добавление записи в БД*/
//        $array = ['Peugeot','Mercedes','Lada','Renault','Audi','Kia','Toyota','Skoda','Lexus','Mazda','Subaru','Nissan','Mitsubishi'];
//        for ( $i = 0; $i < count($array); $i++) {
//            $entityManager = $this->getDoctrine()->getManager();
//            $auto = new AutomobileMarks();
//            $auto->setMarkName($array[$i]);
//            $entityManager->persist($auto);
//            $entityManager->flush();
//        }

        /*Выборка данных из таблицы*/
        $mark_list = $this->getDoctrine()->getRepository(Automobiles::class)->findAll();

        var_dump(($mark_list));



        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'

        ]);
    }
}