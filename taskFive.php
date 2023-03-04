<?php
$bmw = ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015];
$toyota = ['model' => 'Camry', 'speed' => 120, 'doors' => 5, 'year' => 2014];
$opel = ['model' => 'Astra', 'speed' => 120, 'doors' => 5, 'year' => 2016];

$cars = [$bmw, $toyota, $opel];

foreach ($cars as $car) {
  echo "Car: {$car['model']} <br>" . "Speed: {$car['speed']}, Doors: {$car['doors']}, Year: {$car['year']} <br>";
}