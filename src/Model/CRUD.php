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

}
