<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;


class Update extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
        $titleUrl = str_replace(' ', '', $request->getParsedBody()['title']);
        $this->showPage('dashboard', UPDATE_ARTICLE, 'POST', $request->getParsedBody()['title'],$request->getParsedBody()['subheading'],
        $request->getParsedBody()['body'], $titleUrl, $request->getParsedBody()['author'], $request->getParsedBody()['id']);
        header('Location: /dashboard');
    }
}


