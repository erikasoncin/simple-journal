<?php $this->layout('/templates/layout', ['title' => 'Manage']) ?>

<?php

session_start();
    if ( ! isset($_SESSION['username']))
        header ('Location: /login');

 ?>


<div class="container">
  <div class="row">
    <div class="col text-center">
    <h1> Edit Article </h1>
    </div>
  </div>
</div>


<?php foreach($articles as $article): ?>

    <form method="POST" action="/executeupdate">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <h2>Article <?= $article['Id']?></h2>
                    <input type="text" class="form-control" name="id" value="<?= $article['Id']?>">
                    <div class="form-group row">
                        <br>
                        <label for="exampleInputEmail1">Title </label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $article['Title']?>">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Subheading: </label>
                        <input type="text" class="form-control" name="subheading" aria-describedby="emailHelp" value="<?= $article['Subheading']?>">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Body: </label>
                        <textarea name ="body" class="form-control rounded-0" rows="7" ><?= $article['Body']?></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Date: </label>
                        <p><?= $article['Date']?>"</p>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Author: </label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="<?= $article['Name']?>">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Id Author: </label>
                        <input type="text" class="form-control" name="author" aria-describedby="emailHelp" value="<?= $article['Author']?>">
                    </div>
                    <input type="submit" onclick="window.location.href='/executeupdate'" value="Edit"/>
                       
                </div>
            </div>
        </div>

    </form>

<?php endforeach ?>
