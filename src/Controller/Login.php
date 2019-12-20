<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\User;

class Login implements ControllerInterface
{
    protected $plates;
    protected $user;

    public function __construct(Engine $plates, User $user )
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
            session_start();
            $_SESSION['username'] = $email;
            header('Location: /dashboard');
        }

        else
            header('Location: /login');
    }
}
