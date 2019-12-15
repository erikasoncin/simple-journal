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
        //$this->crud->executeQuery(ADD_ARTICLE, 'POST');
    }
}
