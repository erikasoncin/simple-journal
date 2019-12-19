<?php
use SimpleMVC\Controller;

return
[
    'GET /' => Controller\Article\Show::class,
    'GET /login' => Controller\Login::class,
    'GET /dashboard' => Controller\Article\Show::class,
    'GET /article/' . substr($request->getUri()->getPath(), 9) => Controller\Article\Show::class,
    'GET /add' => Controller\Article\Show::class,
    //'GET /add/execute' => Controller\Article\Add::class,
    'GET /update/' . substr($request->getUri()->getPath(), 8) => Controller\Article\Show::class,
    'GET /delete/' . substr($request->getUri()->getPath(), 8) => Controller\Article\Delete::class,
    'POST /executeupdate' => Controller\Article\Update::class,
    'POST /executeadd' => Controller\Article\Add::class,
];