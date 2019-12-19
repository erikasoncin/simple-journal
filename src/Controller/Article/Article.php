<?php

declare(strict_types=1);

namespace SimpleMVC\Controller\Article;

use League\Plates\Engine;
use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\Manage;

class Article
{
    protected $plates;
    protected $crud;

    public function __construct(Engine $plates, Manage $crud)
    {
        $this->plates = $plates;
        $this->crud = $crud;
    }

    public function showPage (string $page, string $sql, string $method, ...$options) : void
    {
        //var_dump($options);
        $optionalParameters;

        foreach ($options as $key => $value)
            $optionalParameters[":{$key}"] =  $value;
            
       
        $articles = $this->crud->executeQuery($sql, $method, $optionalParameters);
        echo $this->plates->render($page, ['articles' => $articles]);
    }
}
