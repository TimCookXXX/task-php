<?php
function createUser($id) 
{
  $names = ['Tim', 'Andrew', 'Alex', 'Gringo', 'Thomas'];
  
  $user = [
    'id' => $id,
    'name' => $names[array_rand($names)],
    'age' => mt_rand(18, 45),
  ];

  return $user;
}

function saveUsers($users) 
{
  file_put_contents('./users.json', json_encode($users));
}

function getUsers() 
{
  $data = file_get_contents('./users.json');
  $decodeUsers = json_decode($data, true);

  return $decodeUsers;
}

function calcUsers() 
{
  $name = array_column(getUsers(), 'name');
  $listName = array_count_values($name);
  echo '<pre>';
  print_r($listName);
}

function calcAge() 
{
  $sumAge = array_sum(array_column(getUsers(), 'age'));
  $resultAge = $sumAge / sizeof(getUsers());

  var_dump($resultAge);
}
?>