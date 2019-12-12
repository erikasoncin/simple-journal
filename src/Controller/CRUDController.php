<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class CRUDController implements ControllerInterface
{
    protected $plates;
    protected $ml;

    public function __construct(Engine $plates, CRUD $ml)
    {
        $this->plates = $plates;
        $this->ml = $ml;
    }

    public function execute(ServerRequestInterface $request)
    {
        $articles = $this->ml->selectAllFromArticle();
        echo $this->plates->render('CRUDView',['articles' => $articles]);
    }
}
