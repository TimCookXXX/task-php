<?php
function createUser() {
  $names = ['Tim', 'Andrew', 'Alex', 'Gringo', 'Thomas'];
  
  $user = [
    'name' => $names[array_rand($names)],
    'age' => mt_rand(18, 45)
  ];

  return $user;
}
?>