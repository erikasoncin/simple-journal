<?php $this->layout('/templates/layout', ['title' => 'Manage']) ?>

<?php

    if ( ! isset($_SESSION['username']))
        header ('Location: /login');

 ?>


<div class="container">
  <div class="row">
    <div class="col text-center">
    <h1> Manage Articles </h1>
    </div>
  </div>
</div>


<?php foreach($articles as $article): ?>

    <form method="POST" action="/executeupdate">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <div class="form-group row">
                        <h2>Article <?= $article['Id']?></h2>
                        <br>
                        <label for="exampleInputEmail1">Title </label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $article['Title']?>">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Subheading: </label>
                        <input type="text" class="form-control" name="subheading" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $article['Subheading']?>">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Body: </label>
                        <textarea name ="body" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="7" ><?= $article['Body']?></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Date: </label>
                        <p><?= $article['Date']?>"</p>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Author: </label>
                        <input type="text" class="form-control" name="author" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $article['Author']?>">

                        <input type="button" onclick="window.location.href='/executeupdate'" value="Publish"/>
                </div>
            </div>
        </div>

    </form>

<?php endforeach; ?>
