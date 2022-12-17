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

    <meta name=”description" content='En økoglogisk går, der går op i dyrevelfærd og frsike råvarer.
          Gården har eget mejeri og driver en webshop med hjemmelavet produkter'>

    <meta name=”robots" content=”index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="søgeord1, søgeord2, søgeord3">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/sans-mateo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/pgq7ydv.css">
    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>
<?php include 'nav.php';?>

<div class="container-fluid d-none d-mb-block d-lg-block p-0">
    <img src="images/heropc.webp" alt="cover">
</div>

<div class="container-fluid d-block d-mb-none d-lg-none p-0">
    <img src="images/heromobil.webp" alt="cover">
</div>

<div class="container col-11">
    <div class="row justify-content-end">
        <img src="images/click&collectskilt.png" class="d-none d-dm-block d-lg-block" style="width: 20rem" alt="">
    </div>
    <div class="row justify-content-end">
        <img src="images/click&collectskilt.png" class="d-block d-dm-none d-lg-none" style="width: 10rem;" alt="">
    </div>
</div>

<section class="container col-8">
    <div class="row text-center">
    <h1>Kragebjerggård inviterer til begivenhedsrige stunder</h1>
    </div>
</section>

<section class="container col-8 mt-5 d-flex">
    <div class="row justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/knapwebshop.webp" style="width: 25vh" alt="Card image cap">
            <div class="card-body">
                <a href="webshop.php" class="btn btn-primary">Webshop</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/knapwebshop.webp" style="width: 25vh" alt="Card image cap">
            <div class="card-body">
                <a href="#" class="btn btn-primary">Events</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/knapwebshop.webp" style="width: 25vh" alt="Card image cap">
            <div class="card-body">
                <a href="about.php" class="btn btn-primary">Om os</a>
            </div>
        </div>
    </div>
</section>

<article class="container col-8">
    <div class="row">
        <img class="col-4" src="images/oekoikon.webp" alt="">
    <h3 class="col-4">På kragebjerggård går vi højt på for kvalitet, og derfor er alle vores produkter økologiske</h3>
    </div>
</article>

<section class="container-fluid">
    <div class="row">
        <img src="images/bannerlandingpage.webp" alt="">
    </div>
</section>

<br><br><br><br>

<!-- TEXT carousel -->

<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-10"><h1>Nysgerrig?</h1></div>
    <div class="col-10"><h3>Følg os på Facebook og Instagram</h3></div>
    <div class="col-10"><h3>for at holde dig opdateret på vores nyeste events og vores dagligdag</h3></div>
    </div>
    <div class="row justify-content-center">
        <a class="col-3 col-lg-1" href="#"><img src="images/faceDark.png" alt="Facebook"></a>
        <a class="col-3 col-lg-1" href="#"><img src="images/InstaDark.png" alt="instagram"></a>
    </div>
</div>
<br><br>

<!-- carousel -->
<div class="container-fluid">
    <div id="carouselExampleDarkPerson" class="carousel carousel-dark slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="card mx-auto">
                    <img src="images/Produkterjuice3fin.png" class="card-img-top" alt="SocialMedia">
                </div>
                <br><br><br>
                <div class="carousel-caption d-none d-md-block justify-content-end">
                    <h5>Instagram feed powered by Meta</h5>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="card mx-auto">
                    <img src="images/Produkterjuice2fin.png" class="card-img-top" alt="SocialMedia">
                </div><br><br><br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Instagram feed powered by Meta</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mx-auto">
                    <img src="images/Produkterjuice1fin.png" class="card-img-top" alt="SocialMedia">
                </div>
                <br><br><br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Instagram feed powered by Meta</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDarkPerson"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDarkPerson"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>



<?php include 'footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>