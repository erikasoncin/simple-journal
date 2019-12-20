
<header>

    <?php

        if ( ! isset($_SESSION['username']))
            require 'navbar.php';

        else
            require 'navbar-loggedin.php';

     ?>

</header>
