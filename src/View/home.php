<?php $this->layout('layout', ['title' => 'Homepage']) ?>

<h1>Home page</h1>
<h2>Benvenuto <?php echo $welcome ?></h2>
<p>SimpleMVC è un progetto didattico per insegnare le basi dell'architettura</p>
<?php foreach($article as $articolo): ?>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="form-group row">
                    <br>
                    <h1> <?= $articolo['Title']?> </h1>
                </div>
                <div>
                    <h3> <?= $articolo['Subheading']?> </h2>                    
                </div>
                <div>
                  <p>  <?= $articolo['Body']?> </p>
                </div>
                <div style="text-align:right">
                    <?= $articolo['Date']?>
                </div>
                <div class="form-group row">
                <?= $articolo['Name']?>
                </div>
        </div>
    </div>
    <?php endforeach ?>


