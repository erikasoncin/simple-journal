<?php
use League\Plates\Engine;
use Psr\Container\ContainerInterface;


return [
    'view_path' => 'src/View',
    Engine::class => function(ContainerInterface $c) {
        $plates = new Engine($c->get('view_path'));
        return $plates;
    },
    'dsn' => 'mysql:dbname=Journal;host=127.0.0.1',
    'user' => 'admin',
    'password' => 'pyfPVYAhY1996!',
    PDO::class => function(ContainerInterface $c) {
        return new PDO($c->get('dsn'),$c->get('user'),$c->get('password'));
    }
];
