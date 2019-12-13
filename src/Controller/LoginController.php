<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class LoginController implements ControllerInterface
{
    protected $plates;
    protected $log;

    public function __construct(Engine $plates, Manage $log )
    {
        $this->plates = $plates;
        $this->log = $log;
    }

    public function execute(ServerRequestInterface $request)
    {
        $welcome = $this->log->checkUser('','');
        echo $this->plates->render('loginView');
    }
}
