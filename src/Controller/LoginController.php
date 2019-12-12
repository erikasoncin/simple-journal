<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model;

class LoginController implements ControllerInterface
{
    protected $plates;
    protected $man;

    public function __construct(Engine $plates, Manage $man )
    {
        $this->plates = $plates;
        $this->man = $man;
    }

    public function execute(ServerRequestInterface $request)
    {
        $welcome = $this->man->welcome();
        echo $this->plates->render('loginView', ['welcome' => $welcome]);
    }
}
