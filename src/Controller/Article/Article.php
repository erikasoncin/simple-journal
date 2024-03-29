<?php

declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\CRUD;

class Article
{
    protected $plates;
    protected $crud;

    public function __construct(Engine $plates, CRUD $crud)
    {
        $this->plates = $plates;
        $this->crud = $crud;
    }

    public function showPage (string $page, string $sql, string $method,  ...$options) : void
    {
        foreach ($options as $key => $value)
            $optionalParameters[":{$key}"] =  $value;
            
       
        $articles = $this->crud->executeQuery($sql, $method, $optionalParameters);
        echo $this->plates->render($page, ['articles' => $articles]);
    }
}
