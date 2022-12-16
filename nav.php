<?php
echo '
    
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-navfarve">
    <div class="container-fluid">

        <div class="d-lg-none d-md-none">
            <a class="navbar-brand ms-2" href="index.php"> <img src="images/logo2.png" alt=""></a>
        </div>

        <div class="d-none d-md-block">
            <a class="navbar-brand ms-2" href="index.php"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="order-lg-last d-flex">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon"><img style="max-height: 40px" src="images/burgerMenu.png" alt="cart"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav container-fluid d-flex justify-content-end">
                <a class="nav-link active p-2 px-5" style="font-size: x-large" href="#">Webshop</a>
                <a class="nav-link p-2 px-5" style="font-size: x-large" href="#">Events</a>
                <a class="nav-link p-2 px-5" style="font-size: x-large" href="#">Om os</a>
                <a class="nav-link px-4" href="kurv.php"><img style="max-height: 40px" src="images/kurv.png" alt="cart"></a>
            </div>
        </div>
    </div>
</nav>
    
    
    
    
    
    ';
?>