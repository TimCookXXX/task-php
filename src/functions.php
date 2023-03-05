<?php

// TASK ONE
$array = ['One', 'Two', 'Three', 'Four', 'Five']; 
function task1($array, $print = true) {
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
function calcSum(...$args) {
  $operator = $args[0];
  $result = 0;

  if ($operator == '+') {
    for ($i = 1; $i < sizeof($args); $i++) {
      $result += $args[$i];
    }
  } else {
    return 'Неизвестный мне оператор, попробуйте всё же указать "+" я умею только складывать:)';
  }

  return $result;
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

// TASK SIX
function openFile($file) {
  $fp = fopen($file, 'r');

  $str = '';

  while (!feof($fp)) {
    $str .= fgets($fp, 1024);
  }

  echo $str;
}
?>