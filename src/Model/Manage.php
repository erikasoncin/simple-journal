<?php
declare(strict_types=1);
namespace SimpleMVC\Model;

use \PDO;
use PDOException;
use League\Plates\Engine;

class Manage {

  private $conn;

    function __construct(PDO $pdo){
        $this->conn = $pdo;
    }

    function prepareAndExecuteQuery(string $sqlQuery){
        try {
        $query = $this->conn->prepare($sqlQuery);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
        print("Error executing query, please check your data input.");
        die();
        }
    }


    function selectLasts3Articles(){
        try {
        $sqlQuery = "SELECT Title, Subheading, Body, Author, Date from Article Order by Date DESC LIMIT 3;";
        $query = $this->conn->prepare($sqlQuery);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
        print("Errors");
        die(print_r($e));
        }
    }

    public function welcome(){
        return "erika";
    }

    function selectAllArticle(int $idAuth){
        try {
        $sqlQuery = "SELECT * from Article where Author= :idAuth;";
        $query = $this->conn->prepare($sqlQuery);
        $query->execute([':idAuth' => $idAuth]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
        print("Errors");
        die(print_r($e));
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
    }

}
// $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
// $user = 'dbuser';
// $password = 'dbpass';
// try {
//  $pdo = new PDO($dsn, $user, $password);
// } catch (PDOException $e) {
//  echo 'Connection failed: ' . $e->getMessage();
// exit();
// }