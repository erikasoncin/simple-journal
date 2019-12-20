<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class Show extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
        switch ($request->getUri()->getPath())
        {
            case '/':
                $this->showPage('home', GET_LAST_THREE_ARTICLES, 'GET');
                break;

            case '/dashboard':
                $this->showPage('dashboard', GET_ARTICLES_BY_AUTHOR, 'GET', 1); // 1 da sostituire con session id dell'user
                break;

            case '/article/' . substr($request->getUri()->getPath(), 9):
                $this->showPage('article/show', GET_ARTICLE, 'GET', substr($request->getUri()->getPath(), 9));
                break;

            case '/update/' . substr($request->getUri()->getPath(), 8):
                $this->showPage('article/update', GET_ARTICLE, 'GET', substr($request->getUri()->getPath(), 8));
                break;

            case '/add':
                echo $this->plates->render('/article/add');
                break;

            case '/login':
                echo $this->plates->render('login');
                break;

            case '/logout':
                echo $this->plates->render('logout');
                break;
        }
    }
}
