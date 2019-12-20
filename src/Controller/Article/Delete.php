<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

require 'Data/queries.php';

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;

class Delete extends Article implements ControllerInterface
{
    public function execute(ServerRequestInterface $request)
    {
<<<<<<< HEAD
        if ( ! isset($_SESSION['username']) )
            $this->showPage('dashboard', DELETE_ARTICLE, 'POST', substr($request->getUri()->getPath(), 8));
=======
        $this->showPage('dashboard', DELETE_ARTICLE, 'POST', substr($request->getUri()->getPath(), 8));
        header('Location: /dashboard');
    
>>>>>>> cd9d919b3f2e9025c799c56edc6b7193274d9d6f
    }
}
