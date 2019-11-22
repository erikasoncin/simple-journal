<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Login;

class LoginController implements ControllerInterface
{
    protected $plates;
    protected $login;

    public function __construct(Engine $plates, Login $login)
    {
        $this->login = $login;
        $this->plates = $plates;
    }

    public function execute(ServerRequestInterface $request)
    {
        echo $this->plates->render('loginView');
        echo $this->login->ciao();
    }
}
