<?php 
const TOTAL_IMAGES = 80;
const TOTAL_MARKERS = 23;
const TOTAL_PENCILS = 40;

const TOTAL_PAINTS = TOTAL_IMAGES - TOTAL_MARKERS - TOTAL_PENCILS;

echo 'Всего рисунков: ' . TOTAL_IMAGES . ", " . "из них нарисовано: <br>";
echo 'Фломастерами: ' . TOTAL_MARKERS . "<br>";
echo 'Карандашами: ' . TOTAL_MARKERS . "<br>";
echo 'Красками: ' . TOTAL_PAINTS;
?>