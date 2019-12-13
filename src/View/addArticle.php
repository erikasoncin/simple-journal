<?php $this->layout('layout', ['title' => 'Add Article']) ?>

<h1>Add ARTICLE</h1>

<form>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="form-group row">
                    <h2>Article <?= $article['Id']?></h2> 
                    <br>
                    <label for="exampleInputEmail1">Title </label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Subheading: </label>
                    <input type="text" class="form-control" name="subheading" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Body: </label>
                    <input type="text" class="form-control" name="body" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Date: </label>
                    <input type="text" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail1">Author: </label>
                    <input type="text" class="form-control" name="author" id="exampleInputEmail1" aria-describedby="emailHelp" value="">

                    <button type="submit" class="btn btn-primary">Delete</button>
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>    

</form>