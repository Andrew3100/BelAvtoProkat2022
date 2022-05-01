<?php

namespace App\Controller;
//include 'lib.php';
use App\Entity\AnaliticData;
use App\Entity\Automobiles;
use App\Entity\AutomobileMarks;
use App\Entity\CriterionWeight;
use App\Entity\TargetList;
use App\Entity\TypeRoadList;
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


        $data['url'] = get_url();


        // достаём из базы веса критериев
        $criterials = parseRequest($this->getDoctrine()->getRepository(CriterionWeight::class)->findAll());

//        vardump($criterials);

        // достаём из базы возможные цели поездок
        $targets = $this->getDoctrine()->getRepository(TargetList::class)->findAll();
        $data['targets_for_selector'] = parseRequest($targets);
        $data['target_get'] = 'Выберите цель поездки';
        // если запрошена цель поездки
        if (in_url('target')) {
            // перезаписываем строку для инициализации вывода второго селектора
            $data['target'] = 'isset';

            // достаём из аналитики данные по целям поездки каждого автомобиля
            $analitic_data = $this->getDoctrine()->getRepository(AnaliticData::class)->findAll();

            // analitic_data_parse - двумерный массив, где каждый элемент - идентификаор автомобиля,
            // который ссылается на массив в соответствии с порядком полей в базе данных
            // для извлечения данных по целям поездки нужен элемент [$i][1]
            $analitic_data_parse = parseRequest($analitic_data);
//            vardump($analitic_data_parse);
            $target_rent_result = [];
            for ($i = 0; $i < count($analitic_data_parse); $i++) {
                $target_array = explode(',',$analitic_data_parse[$i][1]);
                // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых целей поездок
                $target_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $target_array;
            }
            // 71
//            vardump($target_rent_result);
            // Массив автомобилей, которые подходят по этому критерию
            $auto_list_by_target = [];
            foreach ($target_rent_result as $key => $value) {
                if (in_array($_GET['target'], $value)) {
                    $auto_list_by_target[] = $key;
                }
            }


            //
            //
            //
            // массив автомобилей, подходящих по цели поездки
//            vardump($auto_list_by_target);
            //
            //
            //


            if (count($auto_list_by_target) > 0) {
                for ($i = 0; $i < count($auto_list_by_target); $i++) {
                    $control[$auto_list_by_target[$i]][] = $criterials[0][1];
                }
            }




            // достаём из базы возможные цели поездок
            $length = $this->getDoctrine()->getRepository(TypesLengthRent::class)->findAll();
            $data['length_for_selector'] = parseRequest($length);
            $data['length_get'] = 'Выберите длительность поездки';

            if (in_url('length')) {
                $data['length'] = 'isset';
                $data['length_get'] = parseRequest([$this->getDoctrine()->getRepository(TypesLengthRent::class)->find($_GET['length'])])[0][1];


//                vardump($analitic_data_parse);


                $length_rent_result = [];
                for ($i = 0; $i < count($analitic_data_parse); $i++) {
                    $length_array = explode(',',$analitic_data_parse[$i][2]);
                    // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых длин поездок
                    $length_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $length_array;
                }
//                vardump($length_rent_result);

                // Массив автомобилей, которые подходят по этому критерию
                $auto_list_by_length = [];
                foreach ($length_rent_result as $key => $value) {
                    if (in_array($_GET['length'], $value)) {
                        $auto_list_by_length[] = $key;
                    }
                }

                /*Массив автомобилей, подходящих по критерию длительности поездки*/
                /**/
                /**/
//                echo 'Цель поездки';
//                vardump($auto_list_by_length);
                /**/
                /**/
                if (count($auto_list_by_length) > 0) {
                    for ($i = 0; $i < count($auto_list_by_length); $i++) {
                        $control[$auto_list_by_length[$i]][] = $criterials[1][1];
                    }
                }


                // достаём из базы возможные статусы поездок
                $status = $this->getDoctrine()->getRepository(TypesStatusRent::class)->findAll();
                $data['status_for_selector'] = parseRequest($status);
                $data['status_get'] = 'Выберите статус поездки';



                if (in_url('status')) {
                    $data['status'] = 'isset';
                    $data['status_get'] = parseRequest([$this->getDoctrine()->getRepository(TypesStatusRent::class)->find($_GET['status'])])[0][1];
                    // ищем машины, которые подходят под заданную цель




                    $status_rent_result = [];
                    for ($i = 0; $i < count($analitic_data_parse); $i++) {
                        $status_array = explode(',',$analitic_data_parse[$i][3]);
                        // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых длин поездок
                        $status_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $status_array;
                    }
  //                vardump($length_rent_result);

                    // Массив автомобилей, которые подходят по этому критерию (статус поездки)
                    $auto_list_by_status = [];
                    foreach ($status_rent_result as $key => $value) {
                        if (in_array($_GET['status'], $value)) {
                            $auto_list_by_status[] = $key;
                        }
                    }

                    /*Список автомобилей, подходящих по статусу поездки*/
//                    vardump($auto_list_by_status);

                    if (count($auto_list_by_status) > 0) {
                        for ($i = 0; $i < count($auto_list_by_status); $i++) {
                            $control[$auto_list_by_status[$i]][] = $criterials[2][1];
                        }
                    }


                    if (in_url('count')) {
                        $data['count'] = 'isset';

                        $count_rent_result = [];
                        for ($i = 0; $i < count($analitic_data_parse); $i++) {

                            if ($analitic_data_parse[$i][4] >= $_GET['count']/*Если показатель из поля не ментше чем из селектора, машина подходит*/) {
                                $count_rent_result[] = $analitic_data_parse[$i][0];
                            }

                        }

                        /*Список авто, подходящих по критерию*/
                        /*Список авто, подходящих по критерию*/
                        /*Список авто, подходящих по критерию*/
//                        vardump($count_rent_result);
                        /*Список авто, подходящих по критерию*/
                        /*Список авто, подходящих по критерию*/
                        /*Список авто, подходящих по критерию*/

                        if (count($count_rent_result) > 0) {
                            for ($i = 0; $i < count($count_rent_result); $i++) {
                                $control[$count_rent_result[$i]][] = $criterials[3][1];
                            }
                        }

                        if (in_url('trunk')) {
                            $data['trunk'] = 'isset';


                            $trunk_rent_result = [];
                            for ($i = 0; $i < count($analitic_data_parse); $i++) {

                                $trunk_diapazon = explode('-',$_GET['trunk']);
                                // Если число из базы по данному критерию входит в диапазон GET, то машина подходит
                                if ($analitic_data_parse[$i][5] > $trunk_diapazon[0] AND  $analitic_data_parse[$i][5] < $trunk_diapazon[1]) {
                                   $trunk_rent_result[] = $analitic_data_parse[$i][0];
                                }

                            }

//                            echo 'Подходит по вместимости багажника';

//                            vardump($trunk_rent_result);
                            if (count($trunk_rent_result) > 0) {
                                for ($i = 0; $i < count($trunk_rent_result); $i++) {
                                    $control[$trunk_rent_result[$i]][] = $criterials[4][1];
                                }
                            }


                            if (in_url('sound')) {
                                // инициализация следующего селектора
                                $data['sound'] = 'isset';

                                for ($i = 0; $i < count($analitic_data_parse); $i++) {

                                    if ($analitic_data_parse[$i][6] == 1) {
                                        $sound_rent_result[] = $analitic_data_parse[$i][0];
                                    }

                                }

//                                echo 'Подходит по звуку';
//                                vardump($sound_rent_result);

                                if (count($sound_rent_result) > 0) {
                                    for ($i = 0; $i < count($sound_rent_result); $i++) {
                                        $control[$sound_rent_result[$i]][] = $criterials[5][1];
                                    }
                                }


                                if (in_url('box')) {
                                    $data['box'] = 'isset';


                                    $box_rent_result = [];
                                    for ($i = 0; $i < count($analitic_data_parse); $i++) {
                                        $box_array = explode(',',$analitic_data_parse[$i][7]);
                                        // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых коробок передач
                                        $box_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $box_array;
                                    }

                                    // Массив автомобилей, которые подходят по этому критерию (коробка)
                                    $auto_list_by_box = [];
                                    foreach ($box_rent_result as $key => $value) {
                                        if (in_array($_GET['box'], $value)) {
                                            $auto_list_by_box[] = $key;
                                        }
                                    }

//                                    echo 'Подходят по коробке';
//                                    vardump($auto_list_by_box);

                                    if (count($auto_list_by_box) > 0) {

                                        for ($i = 0; $i < count($auto_list_by_box); $i++) {
                                            $control[$auto_list_by_box[$i]][] = $criterials[6][1];
                                        }
                                    }



                                    if (in_url('road')) {
                                        $data['road'] = 'isset';
                                        $data['road_get'] = parseRequest([$this->getDoctrine()->getRepository(TypeRoadList::class)->find($_GET['road'])])[0][1];


                                        // ищем машины, которые подходят по заданному типу дороги

                                        $road_rent_result = [];
                                        for ($i = 0; $i < count($analitic_data_parse); $i++) {
                                            $road_array = explode(',',$analitic_data_parse[$i][8]);
                                            // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых длин поездок
                                            $road_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $road_array;
                                        }


                                        // Массив автомобилей, которые подходят по этому критерию (статус поездки)
                                        $auto_list_by_road = [];
                                        foreach ($road_rent_result as $key => $value) {
                                            if (in_array($_GET['road'], $value)) {
                                                $auto_list_by_road[] = $key;
                                            }
                                        }

//                                        echo 'Подходят по типажу дороги';
//                                        vardump($auto_list_by_road);

                                        if (count($auto_list_by_road) > 0) {
                                            for ($i = 0; $i < count($auto_list_by_road); $i++) {
                                                $control[$auto_list_by_road[$i]][] = $criterials[7][1];
                                            }
                                        }


                                        if (in_url('interior')) {

                                            $data['interior'] = 'isset';
                                            $data['interior_get'] = parseRequest([$this->getDoctrine()->getRepository(TypeRoadList::class)->find($_GET['interior'])])[0][1];



                                            $interior_rent_result = [];
                                            for ($i = 0; $i < count($analitic_data_parse); $i++) {
                                                $interior_array = explode(',',$analitic_data_parse[$i][9]);
                                                // формируем 2D массив, который содержит ид автомобиля и ссылается на массив допустимых интерьeров
                                                $interior_rent_result[$analitic_data_parse[$i][0]/*идентификатор автомобиля*/] = $interior_array;
                                            }


                                            // Массив автомобилей, которые подходят по этому критерию (статус поездки)
                                            $auto_list_by_interior = [];
                                            foreach ($interior_rent_result as $key => $value) {
                                                if (in_array($_GET['interior'], $value)) {
                                                    $auto_list_by_interior[] = $key;
                                                }
                                            }

//                                            echo 'Подходят по типу интерьера';
//                                            vardump($auto_list_by_interior);

                                            if (count($auto_list_by_interior) > 0) {
                                                for ($i = 0; $i < count($auto_list_by_interior); $i++) {
                                                    $control[$auto_list_by_interior[$i]][] = $criterials[8][1];
                                                }
                                            }




                                            if (in_url('gas')) {
                                                $data['gas'] = 'isset';


                                                for ($i = 0; $i < count($analitic_data_parse); $i++) {
                                                    if ($analitic_data_parse[$i][10] == 1) {
                                                        $gas_rent_result[] = $analitic_data_parse[$i][0];
                                                    }

                                                }

                                                if (count($gas_rent_result) > 0) {
                                                    for ($i = 0; $i < count($gas_rent_result); $i++) {
                                                        $control[$gas_rent_result[$i]][] = $criterials[9][1];
                                                    }
                                                }


                                                if (in_url('by100')) {
                                                    $data['by100'] = 'isset';

                                                    for ($i = 0; $i < count($analitic_data_parse); $i++) {
                                                        if ($analitic_data_parse[$i][11] > $_GET['by100']) {
                                                            $by100_rent_result[] = $analitic_data_parse[$i][0];
                                                        }

                                                    }
//                                                    echo 'Показатель до 100';
//                                                    vardump($by100_rent_result);

                                                    if (count($by100_rent_result) > 0) {
                                                        for ($i = 0; $i < count($by100_rent_result); $i++) {
                                                            $control[$by100_rent_result[$i]][] = $criterials[10][1];
                                                        }
                                                    }


                                                    if (in_url('power')) {
                                                        $data['power'] = 'isset';
                                                        $power_rent_result = [];
                                                        for ($i = 0; $i < count($analitic_data_parse); $i++) {

                                                            $power_diapazon = explode('-',$_GET['power']);
                                                            // Если число из базы по данному критерию входит в диапазон GET, то машина подходит
                                                            if ($analitic_data_parse[$i][12] > $power_diapazon[0] AND  $analitic_data_parse[$i][12] < $power_diapazon[1]) {
                                                                $power_rent_result[] = $analitic_data_parse[$i][0];
                                                            }

                                                        }


                                                        for ($i = 0; $i < count($power_rent_result); $i++) {
                                                            $control[$power_rent_result[$i]][] = $criterials[11][1];
                                                        }

//                                                        echo 'Контрольное значение'; Содержит массив где ключ - идентификатор автомобиля в базе, а значение - итог по каждому критерию
//                                                        vardump($control);

                                                        // проходим массив и складываем общую сумму
                                                        foreach ($control as $key => $value) {
                                                            $control_data[$key] = array_sum($value);
                                                        }


                                                        /*Вывод информации о принятии решения */

//                                                        vardump($control_data);

                                                        foreach ($control_data as $key => $value) {
                                                            $result = parseRequest([$this->getDoctrine()->getRepository(Automobiles::class)->find($key)]);

                                                            // достаём ролное имя авто по марке
                                                            $name =   parseRequest([$this->getDoctrine()->getRepository(AutomobileMarks::class)->find($result[0][1])]);
//                                                            vardump($result);
//                                                            vardump($name);

                                                            $auto = $name[0][1].' '.$result[0][2];
                                                            $link = $result[0][3];
                                                            $percernt = $value;
                                                            $data['analiz'][] = [$auto,$link,$percernt];
                                                        }


//                                                        vardump($data['analiz']);

                                                        $data['res'] = 'isset';



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