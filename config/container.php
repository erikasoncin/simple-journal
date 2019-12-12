<?php
use League\Plates\Engine;
use Psr\Container\ContainerInterface;

use PDO;

return [
    'view_path' => 'src/View',
    Engine::class => function(ContainerInterface $c) {
        $plates = new Engine($c->get('view_path'));
        return $plates;
    },
    'PDO' => function(ContainerInterface $c){
        try {
            $dsn = 'mysql:dbname=Journal;host=127.0.0.1';
            $user = 'admin';
            $password = 'pyfPVYAhY1996!';
            return new PDO($dns, $user, $password);
            } catch (Exception $ex){
            print("Error connecting to Database.");
            die(print_r($e));
            }
      },
];
