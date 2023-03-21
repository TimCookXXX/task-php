<?php 
include('./src/functions.php');

for ($i = 1; $i <= 50; $i++) {
  $users[] = createUser($i);
}

file_put_contents('./users.json', json_encode($users));

calcUsers();

calcAge();
?>