<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
<<<<<<< HEAD
use SimpleMVC\Model\User;
=======
use SimpleMVC\Model\CRUD;
>>>>>>> cd9d919b3f2e9025c799c56edc6b7193274d9d6f

class Login implements ControllerInterface
{
    protected $plates;
    protected $user;

<<<<<<< HEAD
    public function __construct(Engine $plates, User $user )
=======
    public function __construct(Engine $plates, CRUD $crud )
>>>>>>> cd9d919b3f2e9025c799c56edc6b7193274d9d6f
    {
        $this->plates = $plates;
        $this->user = $user;
    }

    public function execute(ServerRequestInterface $request)
    {
        $email = trim($request->getParsedBody()['email']);
        $password = trim($request->getParsedBody()['password']);

        if ($this->user->isValidUser($email, $password))
        {
            $_SESSION['username'] = $email;
            header('Location: /dashboard');
            print_r($_SESSION);
        }

        else
            header('Location: /login');
    }
}
