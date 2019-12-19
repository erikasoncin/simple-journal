<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;


class Add extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
        //var_dump($request->getParsedBody()['title']);

        $articleData = [$request->getParsedBody()['title'], $request->getParsedBody()['subheading'], $request->getParsedBody()['body'], 
        $request->getParsedBody()['author']];
        $this->showPage('dashboard', ADD_ARTICLE, 'POST', $articleData);
       

        //$this->showPage('dashboard', DELETE_ARTICLE, 'POST', substr($request->getUri()->getPath(), 8));
        header('Location: /dashboard');
    }
}
