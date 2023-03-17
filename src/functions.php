<?php
function createUser($id) {
  $names = ['Tim', 'Andrew', 'Alex', 'Gringo', 'Thomas'];
  
  $user = [
    'id' => $id,
    'name' => $names[array_rand($names)],
    'age' => mt_rand(18, 45),
  ];

  return $user;
}
?>