<?php
declare(strict_types=1);
namespace SimpleMVC\Model;

use \PDO;
use PDOException;
use League\Plates\Engine;



class CRUD
{

  private $conn;


    function __construct(PDO $pdo)
    {
        $this->conn = $pdo;
    }


    function executeQuery (string $sql, string $method, $optionalParameters) : ?array
    {
        try
        {
            $query = $this->conn->prepare($sql);
            $query->execute($optionalParameters);
            return ($method === 'GET') ? $query->fetchAll(PDO::FETCH_ASSOC) : null;
        }

        catch (PDOException $e)
        {
            die("Error executing query, please check your data input.");
            return null;
		}
	}
		function checkUser($email, $password){
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
			  //header("location: https://www.youtube.com/");
              return true;
          } else {
              return false;
          }
        } else {
          return false;
        }
    }

	
}