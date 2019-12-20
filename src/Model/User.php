<?php
declare(strict_types=1);
namespace SimpleMVC\Model;

use \PDO;
use PDOException;
use League\Plates\Engine;


class User extends Manage
{
    function isValidUser (string $email, string $password) : bool
    {
        $param = [':0' => $email];

        $user = $this->executeQuery("SELECT Email, Name, Password FROM User WHERE Email = :0;", 'GET', $param);
/*echo $password;
echo $user[0]['Password'];
var_dump($user);
die();*/
        return ( ! isset($user[0]['Email']) || ! isset($user[0]['Password']) || $password != $user[0]['Password'] ) ? false : true;
    }






    /*function checkUser($email, $password)
    {
        try {
          $sqlQuery = "SELECT Email, Name, Password FROM User WHERE Email=:email AND Password=:password;";
          $query = $this->conn->prepare($sqlQuery);
          $query->execute([':email' => ''.$email.'', ':password' => ''.$password.'']);
          $result = $query->fetchAll();
        } catch (PDOException $e) {
          print("Error sending image data.");
          die(print_r($e));
        }
        // password_verify($post['pwd'], $dataToCheck['pwd'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          if ($email == $result[0]['email'] && $password == $result[0]['password']){
              //if ($email == 'erika@gmail.com' && $password == '12345678'){
      			  $_SESSION['email'] = $result[0]['Name'];
      			  header("location: https://www.youtube.com/");
                    //return true;
          } else {
              return false;
          }
        } else {
          return false;
        }
    }*/


}
