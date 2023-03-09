<?php

// TASK ONE
function task1(array $array, $print = true) {
  if ($print) {
    return implode(' ', $array);
  } else {
    foreach($array as $arr) {
      echo '<p>';
      echo $arr . "<br>";
      echo '</p>';
    }
  }
}

// TASK TWO
function calcEverything($operator, ...$args) {
  $result = implode($operator, $args) . "=";
  switch ($operator) {
    case '+':
      return $result . array_sum($args);
    case '-':
      return $result . array_shift($args) - array_sum($args);
    case '*':
      return $result . array_product($args);
    case '/':
      $data = array_shift($args);
      foreach ($args as $arg) {
        $data = $data / $arg;
      }
      return $result . $data;
    
    default:
      return 'Неизвестная мне сущность';
  }
}

// TASK THREE
function multiTable(int $a, int $b)
{
    $result = '<table border="1">';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}

// TASK FOUR
function getDateInfo() {
  date_default_timezone_set('Europe/Moscow');
  $date = date('d.m.Y H:i:s');
  echo $date;
  echo '<br>';
  $time = strtotime($date);
  echo $time;
}

function taskFive() {
  $stringOne = 'Карл у Клары украл Кораллы';
  $resultOne = str_replace('К', '', $stringOne);
  echo $resultOne;
  echo '<br>';
  $stringTwo = 'Две бутылки лимонада';
  echo $stringTwo;
  $resultTwo = str_replace('Две', 'Три', $stringTwo);
  echo $resultTwo;
}

// TASK SIX
function openFile($file) {
  file_put_contents('text.txt', 'Новый файл');
  $fp = fopen($file, 'r');

  $str = '';

  while (!feof($fp)) {
    $str .= fgets($fp, 1024);
  }

  echo $str;
}
?>