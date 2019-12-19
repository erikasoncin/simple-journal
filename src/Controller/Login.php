<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;

class Login implements ControllerInterface
{
    protected $plates;
    protected $crud;

    public function __construct(Engine $plates, CRUD $crud )
    {
        $this->plates = $plates;
        $this->crud = $crud;
    }

    public function execute(ServerRequestInterface $request)
    {
        $welcome = $this->crud->checkUser($_POST['email'],$_POST['password']);

        echo $this->plates->render('login');
    }

    private function logout() : void
    {
        unset($_SESSION['email']);
        session_unset();
        session_destroy();
        header('Location: /');
    }
}
