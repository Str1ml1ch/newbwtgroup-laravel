<?php

namespace ParsPogoda\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function show()
    {
        $Pars = $this->Parse($this->Curl(), '<div class="scity" xmlns:v="http://rdf.data-vocabulary.org/#">', '-->');
        $ps = $this->change($Pars);
        return view('weather', ['title' => 'Парсинг погоды','parser'=>$ps]);
    }
    function Parse($p1, $p2, $p3)////Берём то что надо из html файла
    {
        $num1 = strpos($p1, $p2);
        if ($num1 === false) return 0;
        $num2 = substr($p1, $num1);
        return strip_tags(substr($num2, 0, strpos($num2, $p3)));
    }
    function change($Pars)//Убираем лишнее из строки
    {
        $search = ['&deg;','&nbsp;','Украина'];
        $replace = [' '];//замена на
        $result = str_replace($search, $replace, $Pars);
        return $result;
    }
    function Curl()//Curl
    {
        $url = 'https://www.gismeteo.ua/weather-zaporizhia-5093';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $output = curl_exec($ch);
        return $output;
    }
}
