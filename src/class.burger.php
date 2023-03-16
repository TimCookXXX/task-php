<?php 
class Burger 
{
  public function getUserByEmail(string $email) {
    $db = Db::getInstance();
    $query = 'SELECT * FROM users WHERE email = :email';
    return $db->fetchOne($query, [':email'=>$email]);
  }

  public function createUser(string $email) {
    $db = Db::getInstance();
    $query = 'INSERT INTO users(email) VALUES (:email)';
    $result = $db->exec($query, __METHOD__, [':email' => $email]);

    if (!$result) {
      return false;
    }

    return $db->lastInsertId();
  }

  public function addOrder(int $userId, array $data) {
    $db = Db::getInstance();
    $query = 'INSERT INTO orders(user_id, address, created_at) VALUES (:user_id, :address, :created_at)';
    $result = $db->exec($query, __METHOD__, [':user_id' => $userId, ':address' => $data['address'], ':created_at' => date('Y-m-d H:i:s')]);

    if (!$result) {
      return false;
    }

    return $db->lastInsertId();
  }
}
?>