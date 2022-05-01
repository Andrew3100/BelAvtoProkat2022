<?php

// Обрабатывает массив объектов из базы данных
use App\Entity\TargetList;

function parseRequest($request) {
    $arr = array();
    for ($i =0; $i < count($request); $i++) {
        $arr[] = array_values((array)$request[$i]);
    }
    return $arr;
}

function vardump($object) {

    echo '<div style="background-color: black"><pre style="color: yellowgreen">';
    var_dump($object);
    echo '</pre></div>';

}


function in_url($str) {
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strpos($url,$str) > 0) {
        return true;
    }
    return false;
}

function get_url() {
    return $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}









