<?php 
include('./src/functions.php');

echo task1($array);

echo calcSum('+', 1, 2, 44);

echo multiTable(2, 2);

// Task 4
date_default_timezone_set('Europe/Moscow');
$date = date('d.m.Y H:i:s');
echo $date;
echo '<br>';
$time = strtotime($date);
echo $time;

// Task 5
$stringOne = 'Карл у Клары украл Кораллы';
$resultOne = str_replace('К', '', $stringOne);
echo $resultOne;

$stringTwo = 'Две бутылки лимонада';
echo $stringTwo;
$resultTwo = str_replace('Две', 'Три', $stringTwo);
echo $resultTwo;

// Task 6
file_put_contents('text.txt', 'Новый файл');
openFile('text.txt');
?>