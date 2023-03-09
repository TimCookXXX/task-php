<?php 
include('./src/functions.php');

echo task1(['One', 'Two', 'Three', 'Four', 'Five'], false);

echo calcEverything('/', 1, 2, 44);

echo multiTable(2, 2);

echo getDateInfo();

echo taskFive();

openFile('text.txt');
?>