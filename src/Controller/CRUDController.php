<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class CRUDController implements ControllerInterface
{
    protected $plates;
    protected $crud;

    public function __construct(Engine $plates, Manage $crud)
    {
        $this->plates = $plates;
        $this->crud = $crud;
    }

    public function execute(ServerRequestInterface $request)
    {
        $articles = $this->crud->selectAllArticle(1);
        echo $this->plates->render('CRUDView',['articles' => $articles]);
    }
}
