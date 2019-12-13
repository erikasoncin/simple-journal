<?php
declare(strict_types=1);

namespace SimpleMVC\Controller;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class Home implements ControllerInterface
{
    protected $plates;
    protected $home;

    public function __construct(Engine $plates, Manage $home)
    {
        $this->plates = $plates;
        $this->home = $home;
        
    }

    public function execute(ServerRequestInterface $request)
    {
        $articoli = $this->home->selectLasts3Articles();
        $welcome = $this->home->welcome();
        echo $this->plates->render('home',['article' => $articoli], ['welcome' => $welcome]);
    }
}
