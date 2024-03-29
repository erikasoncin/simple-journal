<?php
declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

use Psr\Http\Message\ServerRequestInterface;

interface ControllerInterface
{
    public function execute(ServerRequestInterface $request);
}
