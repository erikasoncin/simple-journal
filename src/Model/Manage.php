<?php
declare(strict_types=1);
namespace SimpleMVC\Model;

use \PDO;
use PDOException;
use League\Plates\Engine;



class Manage
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



    /*function checkUser($email, $password){
        //$pwd = password_hash($post['pwd'], PASSWORD_DEFAULT);
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
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          if ($email == $result[0]['email'] && $password == $result[0]['password']){
              $_SESSION['email'] = $result[0]['Name'];
              return true;
          } else {
              return false;
          }
        } else {
          return false;
        }
    }

    function insertNewArticle(string $title, string $subhead, string $body, int $idAuth){
        try {
            $sqlQuery = "Insert INTO Article(Title, Subheading, Body, Author, Date) VALUES (:title, :subhead, :body, :idAuth, NOW());";
            $query = $this->conn->prepare($sqlQuery);
            $query->execute([':title' => $title,':subhead' => ''.$subhead.'',':body' => ''.$body.'',':idAuth'=> ''.$idAuth.'']);
            printf("Query avvenuta con successo");
        } catch (PDOException $e) {
        print("Errors");
        die(print_r($e));
        }
    }

    function updateArticle(string $title, string $subhead, string $body, int $idAuth, int $id){
        try {
            $sqlQuery = "UPDATE Article SET Title =:title, Subheading=:subhead, Body=:body, Date=NOW()) WHERE Author=:idAuth AND id=:id;";
            $query = $this->conn->prepare($sqlQuery);
            $query->execute([':title' => $title,':subhead' => ''.$subhead.'',':body' => ''.$body.'',':idAuth'=> ''.$idAuth.'', ':id'=> ''.$id.'']);
            printf("Query avvenuta con successo");
        } catch (PDOException $e) {
        print("Errors");
        die(print_r($e));
        }
    }

    function deleteArticle(string $title, string $subhead, string $body, int $idAuth, int $id){
        try {
            $sqlQuery = "DELETE from Article where id=:id;";
            $query = $this->conn->prepare($sqlQuery);
            $query->execute([ ':id'=> ''.$id.'']);
            printf("Query avvenuta con successo");
        } catch (PDOException $e) {
        print("Errors");
        die(print_r($e));
        }
    }*/

}
