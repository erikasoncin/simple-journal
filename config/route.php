<?php
use SimpleMVC\Controller;

return
[
    'GET /' => Controller\Article\Show::class,
    'GET /login' => Controller\Article\Show::class,
    'GET /logout' => Controller\Article\Show::class,
    'GET /dashboard' => Controller\Article\Show::class,
    'GET /article/' . substr($request->getUri()->getPath(), 9) => Controller\Article\Show::class,
    'GET /add' => Controller\Article\Show::class,
    'GET /update/' . substr($request->getUri()->getPath(), 8) => Controller\Article\Show::class,
    'GET /delete/' . substr($request->getUri()->getPath(), 8) => Controller\Article\Delete::class,
    'POST /executeupdate' => Controller\Article\Update::class,
    'POST /executeadd' => Controller\Article\Add::class,
    'POST /executelogin' => Controller\Login::class,
];
