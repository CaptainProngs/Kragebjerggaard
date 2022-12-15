<?php
?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Kragebjerggaard</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>

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


<a class="nav-link d-lg-none p-0 m-0" href="#"><img src="images/footerGrafikS.png" alt="Map"></a>
<a class="container-fluid nav-link d-none d-lg-block p-0 m-0" href="#"><img src="images/footerGrafikL.png" alt="largemap"></a>

<footer class="footer container-fluid bg-navfarve justify-content-center" style="min-height: 200px">

    <div class="row pt-5 d-flex justify-content-around">
        <div class="col col-lg-3">
            <a class="nav-link" style="font-size: x-large" href="">Info</a>
            <a class="link row p-2" style="font-size: large" href="#">Gården</a>
            <a class="link row p-2" style="font-size: large" href="#">Click & collect</a>
            <a class="link row p-2" style="font-size: large" href="#">Fødevarestyrelsen</a>
            <a class="link row p-2" style="font-size: large" href="#">Cookies</a>
            <a class="link row p-2" style="font-size: large" href="#">Bæredygtighed</a>
        </div>
        <div class="col col-lg-3">
            <a class="nav-link" style="font-size: x-large" href="">Åbningstider</a>
            <a class="link row p-2" style="font-size: large" href="#">Mandag - fredag 11.00 - 19:00</a>
            <a class="link row p-2" style="font-size: large" href="#">Søndag & helligedage 12.00 - 16.00</a>
        </div>
        <div class="col col-lg-3">
            <a class="nav-link px-4"
               href="https://www.google.com/maps/place/Kragebjergg%C3%A5rd/@55.5481506,11.6582068,17z/data=!3m1!4b1!4m5!3m4!1s0x46528422abd36d6d:0x6559ba81305fb08b!8m2!3d55.5481426!4d11.6603878">
                <img style="min-width: 100px" src="images/map.png" alt="cart"></a>
            <div class="row justify-content-center">
                <a class="nav-link col-2" href="#"><img src="images/Facebook.png" alt="Facebook"></a>
                <a class="nav-link col-3" href="#"><img src="images/Instagram.png" alt="instagram"></a>
            </div>
        </div>
    </div>
</footer>


<div class="container-fluid bg-navfarve" style="height: 8rem">
    <div class="row justify-content-center d-flex rettigheder">
        <div class="col-8 col-lg-4">
            <img src="images/rettigheder.png" alt="copyrights">
        </div>
    </div>
</div>

<?php include 'footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>