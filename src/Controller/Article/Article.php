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
<<<<<<< Updated upstream:src/Controller/Article/Article.php
        foreach ($options as $key => $value)
            $optionalParameters = [":{$key}" => $value];

        $articles = $this->crud->executeQuery($sql, $method, $optionalParameters);
        echo $this->plates->render($page, ['articles' => $articles]);
=======

        $articles = $this->crud->selectAllArticle(1); //dovrà esserci l'id dello user come parametro in base a chi si è loggato
        echo $this->plates->render('CRUDView',['articles' => $articles]);
            if(isset($_POST['delete'])){
                $this->crud->deleteArticle($_POST['Id']);
                header ('Location: CRUDView.php');
            }
>>>>>>> Stashed changes:src/Controller/CRUDController.php
    }
}
