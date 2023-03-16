<?php 
include '../src/class.db.php';
include '../src/config.php';
include '../src/functions.php';
include '../src/class.burger.php';

$burger = new Burger();

$email = $_POST['email'];
$data = [];

$user = $burger->getUserByEmail($email);

if ($user) {
  $userId = $user['id'];
  // $burger->incOrders($user['id']);
} else {
  $userId = $burger->createUser($email);
}

$burger->addOrder($userId, $data);
?>