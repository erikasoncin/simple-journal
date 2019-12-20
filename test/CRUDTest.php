<?php
declare(strict_types=1);

namespace SimpleMVC\Test;


use PHPUnit\Framework\TestCase;
use \PDO;
use PDOException;
use League\Plates\Engine;
use SimpleMVC\Model;
use SimpleMVC\Model\User;


class CRUDTest extends TestCase
{
    /**
     * @dataProvider getDataInput
     */
    //PDO $pdo = new PDO()



    public function testValidLogin()
    {
        $dsn = 'mysql:dbname=Journal;host=127.0.0.1';
        $user = 'admin';
        $password = 'pyfPVYAhY1996!';
        try {
            $pdo = new PDO($dsn, $user, $password);
            } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit();
            }
        $login = new CRUD($pdo);
        $this->assertTrue($login->isValidUser('erika@gmail.com','12345678'));
    }

    public function testInvalidLogin()
    {
        $dsn = 'mysql:dbname=Journal;host=127.0.0.1';
        $user = 'admin';
        $password = 'pyfPVYAhY1996!';
        try {
        $pdo = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit();
        }
        $login = new CRUD($pdo);
        $this->assertFalse($login->isValidUser('lalaland@gmail.com','12345678'));
    }
}