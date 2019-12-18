<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class AddController implements ControllerInterface
{
    protected $plates;
    protected $add;

    public function __construct(Engine $plates, Manage $add)
    {
        $this->plates = $plates;
        $this->add = $add;
    }

    public function execute(ServerRequestInterface $request)
    {
        echo $this->plates->render('addArticle');
    }
}
