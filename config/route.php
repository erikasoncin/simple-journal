<?php
use SimpleMVC\Controller;

return [
    'GET /' => Controller\Home::class, // "SimpleMVC\Controller\Home"
    'GET /login' => Controller\LoginController::class, // "SimpleMVC\Controller\LoginController"
    'GET /crud' => Controller\CRUDController::class
    
];
