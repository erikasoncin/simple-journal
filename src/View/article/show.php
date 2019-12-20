<?php $this->layout('/templates/layout', ['title' => 'Article']) ?>

<?php

    if ( ! isset($_SESSION['username']))
        header ('Location: /login');

 ?>

<?php foreach($articles as $article): ?>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="form-group row">
                    <br>
                    <h1><a href="/article/<?= $article['Id']?>"><?= $article['Title'] ?></a></h1>
                </div>
                <div>
                    <h3> <?= $article['Subheading'] ?> </h2>
                </div>
                <div>
                  <p>  <?= $article['Body'] ?> </p>
                </div>
                <div style="text-align:right">
                    <?= $article['Date'] ?>
                </div>
                <div class="form-group row">
                <?= $article['Name'] ?>
                </div>
        </div>
    </div>

    <?php endforeach ?>
