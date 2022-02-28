<?php

//echo date('d/m/Y');

$data = new DateTime();
echo $data->format('d-m-Y H:i:s') . PHP_EOL;

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
/*Periodo
 5 Anos
10 Meses
5 Dias
Tempo
10 Horas
50 Minutos
10 Segundos
 */
$data->add($intervalo);// add sub

var_dump($data);

echo PHP_EOL;
echo '--Exercicio final--';
echo PHP_EOL;

$data = new DateTime();
//$data->format('d-m-Y H:i:s') . PHP_EOL;
$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);
echo $data->format('d-m-Y H:i:s');