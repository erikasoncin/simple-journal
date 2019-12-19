<?php $this->layout('/templates/layout', ['title' => 'Add Article']) ?>


<form method="POST" action="/executeadd">
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                    <h1>Add ARTICLE</h1>
                <div class="form-group row">
                    <h2>Article</h2>
                    <br>

                    <div class="form-group row">
                        <label for="exampleInputEmail1">Subheading: </label>
                        <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                    </div>
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

                    <input type="submit" onclick="window.location.href='/executeadd'" value="Publish"/>
            </div>
        </div>
    </div>

</form>


