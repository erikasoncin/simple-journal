<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;


class Add extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {

        $this->showPage('dashboard', ADD_ARTICLE, 'POST', $request->getParsedBody()['title'],$request->getParsedBody()['subheading'],
        $request->getParsedBody()['body'], $request->getParsedBody()['author']);
        header('Location: /dashboard');

        //$this->showPage('dashboard', DELETE_ARTICLE, 'POST', substr($request->getUri()->getPath(), 8));
    }
}
