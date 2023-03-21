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

$decodeUsers = [];

function execFile() {
  $data = file_get_contents('./users.json');
  $decodeUsers = json_decode($data, true);

  return $decodeUsers;
}

function calcUsers() {
  $name = array_column(execFile(), 'name');
  $listName = array_count_values($name);
  echo '<pre>';
  print_r($listName);
}

function calcAge() {
  $sumAge = array_sum(array_column(execFile(), 'age'));
  $resultAge = $sumAge / sizeof(execFile());

  var_dump($resultAge);
}
?>