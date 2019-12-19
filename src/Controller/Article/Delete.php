<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;

class Delete extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
        $this->showPage('dashboard', DELETE_ARTICLE, 'POST', substr($request->getUri()->getPath(), 8));
        header('Location: /dashboard');
    
    }
}
