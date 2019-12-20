<?php
declare(strict_types=1);
namespace SimpleMVC\Model;

use \PDO;
use PDOException;
use League\Plates\Engine;


class User extends CRUD
{
    function isValidUser (string $email, string $password) : bool
    {
        $param = [':0' => $email];

        $user = $this->executeQuery("SELECT Email, Name, Password FROM User WHERE Email = :0;", 'GET', $param);

        return ( ! isset($user[0]['Email']) || ! isset($user[0]['Password']) || $password != $user[0]['Password'] ) ? false : true;
    }


}
