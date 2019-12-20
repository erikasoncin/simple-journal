<?php $this->layout('/templates/layout', ['title' => 'Login']) ?>




<form method="POST" action="/executelogin">
<div class="container h-100" name="login">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <div class="form-group">
                    <h1>Benvenuto</h1>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </div>
</form>
