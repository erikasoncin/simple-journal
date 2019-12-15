
<!-- Navbar to show if user is logged in -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <h2>Simple Journal</h2>
            </a>
        </div>
        <div class="container">
            <button class="btn btn-success" onclick="window.location.href='/add'">Add article</button>
            <button class="btn btn-success" onclick="window.location.href='/dashboard'">My Articles</button>
        </div>
        <button class="btn btn-success" onclick="window.location.href='/logout'">Logout</button>
    </div>
</nav>
