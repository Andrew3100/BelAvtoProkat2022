<?php

namespace App\Controller;
//include 'lib.php';
use App\Entity\AnaliticData;
use App\Entity\Automobiles;
use App\Entity\AutomobileMarks;
use App\Entity\TargetList;
use App\Entity\TypesLengthRent;
use App\Entity\TypesStatusRent;
use App\Repository\TargetListRepository;
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



        $data = array();
        $data['target'] = '';
        $data['status'] = '';
        $data['count'] = '';
        $data['length'] = '';
        $data['trunk'] = '';
        $data['sound'] = '';
        $data['box'] = '';
        $data['road'] = '';
        $data['interior'] = '';
        $data['gas'] = '';
        $data['by100'] = '';
        $data['power'] = '';

        $auto = [
            'Renault Logan c вероятностью '.rand(80,100).'%',
            'Lada Vesta c вероятностью '.rand(80,100).'%',
            'Lada Priora c вероятностью '.rand(80,100).'%',
            'Renault Sandero c вероятностью '.rand(80,100).'%',
            'Renault Duster c вероятностью '.rand(80,100).'%',
            'Audi ETron c вероятностью '.rand(80,100).'%',
        ];

        for ($i = 0; $i < 3; $i ++) {
            unset($auto[rand(0,count($auto))]);
        }

        $data['list'] = array_values($auto);

        $data['url'] = get_url();

        // достаём из базы возможные цели поездок
        $targets = $this->getDoctrine()->getRepository(TargetList::class)->findAll();
        $data['targets_for_selector'] = parseRequest($targets);
        $data['target_get'] = 'Выберите цель поездки';
        // если запрошена цель поездки
        if (in_url('target')) {
            // перезаписываем строку для инициализации вывода второго селектора
            $data['target'] = 'isset';
            $data['target_get'] = parseRequest([$this->getDoctrine()->getRepository(TargetList::class)->find($_GET['target'])])[0][1];
            // ищем машины, которые подходят под заданную цель
            $autos_by_target = parseRequest([$this->getDoctrine()->getRepository(AnaliticData::class)->findAll()][0]);
            $target_auto_info = array();
            for ($i = 0; $i < count($autos_by_target); $i++) {
                $target_auto_info[$autos_by_target[$i][0]] = $autos_by_target[$i][1];
            }
            $need_autos = array();
            for ($i = 0; $i < count($target_auto_info); $i++) {
                $target_auto_info_values = array_values($target_auto_info);
                $target_auto_info_keys = array_keys($target_auto_info);
                if (in_array((integer)$_GET['target'],explode(',',$target_auto_info_values[$i]))) {
                    // массив идентификаторов подходящих тачек
                    $need_autos_by_target[] = $target_auto_info_keys[$i];
                }
            }

            // достаём из базы возможные цели поездок
            $length = $this->getDoctrine()->getRepository(TypesLengthRent::class)->findAll();
            $data['length_for_selector'] = parseRequest($length);
            $data['length_get'] = 'Выберите длительность поездки';

            if (in_url('length')) {
                $data['length'] = 'isset';
                $data['length_get'] = parseRequest([$this->getDoctrine()->getRepository(TypesLengthRent::class)->find($_GET['length'])])[0][1];
                // ищем машины, которые подходят под заданную цель
                $autos_by_length = parseRequest([$this->getDoctrine()->getRepository(AnaliticData::class)->findAll()][0]);
                $target_auto_info = array();
                for ($i = 0; $i < count($autos_by_length); $i++) {
                    $length_auto_info[$autos_by_length[$i][0]] = $autos_by_length[$i][2];
                }

//                vardump($length_auto_info);


                $need_autos_by_length = array();
                for ($i = 0; $i < count($length_auto_info); $i++) {
                    $length_auto_info_values = array_values($length_auto_info);
                    $length_auto_info_keys = array_keys($length_auto_info);
                    if (in_array((integer)$_GET['length'],explode(',',$length_auto_info_values[$i]))) {
                        // массив идентификаторов подходящих тачек
                        $need_autos_by_length[] = $length_auto_info_keys[$i];
                    }
                }

                /*Нужные данные*/
                /*Нужные данные*/
                /*Нужные данные*/
                // Массив, показывающий какие авто подходят по длительности поездки
                vardump($need_autos_by_length);


                // достаём из базы возможные статусы поездок
                $status = $this->getDoctrine()->getRepository(TypesStatusRent::class)->findAll();
                $data['status_for_selector'] = parseRequest($status);
                $data['status_get'] = 'Выберите статус поездки';

                if (in_url('status')) {
                    $data['status'] = 'isset';
                    $data['status_get'] = parseRequest([$this->getDoctrine()->getRepository(TypesStatusRent::class)->find($_GET['status'])])[0][1];
                    // ищем машины, которые подходят под заданную цель
                    $autos_by_status = parseRequest([$this->getDoctrine()->getRepository(AnaliticData::class)->findAll()][0]);
                    $status_auto_info = array();
                    for ($i = 0; $i < count($autos_by_status); $i++) {
                        $status_auto_info[$autos_by_status[$i][0]] = $autos_by_status[$i][2];
                    }

                    $need_autos_by_status = array();
                    for ($i = 0; $i < count($length_auto_info); $i++) {
                        $status_auto_info_values = array_values($status_auto_info);
                        $status_auto_info_keys = array_keys($status_auto_info);
                        if (in_array((integer)$_GET['status'],explode(',',$status_auto_info_values[$i]))) {
                            // массив идентификаторов подходящих тачек
                            $need_autos_by_status[] = $status_auto_info_keys[$i];
                        }
                    }

                    /*Нужные данные*/
                    /*Нужные данные*/
                    /*Нужные данные*/
                    // Массив, показывающий какие авто подходят по длительности поездки

                    vardump($need_autos_by_status);

                    if (in_url('count')) {
                        $data['count'] = 'isset';
                        if (in_url('trunk')) {
                            $data['trunk'] = 'isset';
                            if (in_url('sound')) {
                                $data['sound'] = 'isset';
                                if (in_url('box')) {
                                    $data['box'] = 'isset';
                                    if (in_url('road')) {
                                        $data['road'] = 'isset';
                                        if (in_url('interior')) {
                                            $data['interior'] = 'isset';
                                            if (in_url('gas')) {
                                                $data['gas'] = 'isset';
                                                if (in_url('by100')) {
                                                    $data['by100'] = 'isset';
                                                    if (in_url('power')) {
                                                        $data['power'] = 'isset';

                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }


                    }




                }

            }


        }



        return $this->render('help_rent/index.html.twig', $data);
    }
}
