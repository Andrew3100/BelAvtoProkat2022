<?php

namespace App\Controller;

use App\Entity\AutomobileMarks;
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

        if (!isset($_GET['mark'])) {

            //Список моделей по марке
            $datas['data'] = $this->getDoctrine()->getRepository(Automobiles::class)->findAll();
            $datas['mark_name'] = 'Весь модельный ряд';
        }
        else {
            //Список моделей по марке
            $datas['data'] = $this->getDoctrine()->getRepository(Automobiles::class)->findBy(['mark_id' => $_GET['mark']]);
            $mark_name = $this->getDoctrine()->getRepository(AutomobileMarks::class)->findBy(['id' => $_GET['mark']]);
            // имя марки
            $datas['mark_name'] = array_values((array)$mark_name[0])[1];
        }
//
//        echo '<pre>';
//        var_dump($datas['data']);
//        echo '</pre>';

        for ($i = 0; $i < count($datas['data']); $i++) {
            $array_info[] = array_values((array)($datas['data'][$i]));
        }
//
//        echo '<pre>';
//        var_dump($array_info);
//        echo '</pre>';
        $datas['data'] = $array_info;
        $datas['for_selector'] = $this->getDoctrine()->getRepository(AutomobileMarks::class)->findAll();
        // var_dump($datas);
        return $this->render('rent/index.html.twig', $datas);
    }

}

