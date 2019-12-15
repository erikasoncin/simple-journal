<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class Update extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
        echo $this->plates->render('updateArticle');
    }
}
