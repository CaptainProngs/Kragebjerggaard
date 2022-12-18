
<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Kragebjerggaard - Produkt</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <meta name=”description" content='Information om det valgte produkt'>

    <meta name=”robots" content=”index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="søgeord1, søgeord2, søgeord3">

    <meta property="og:title" content="Økologisk landbrug" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.kragebjerggaard.dk" />
    <meta property="og:image" content="https://www.kragebjerggaard.dk/heromobil.webp" />
    <meta property="og:description" content="Information om det produkt der er valgt via webshoppen"/>
    <meta property="og:locale" content="da_DK" />

    <meta itemprop="name" content="Kragebjerggaard" />

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/sans-mateo" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/pgq7ydv.css">
    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<?php
require "settings/init.php";

$id = $_GET['prodId'];
$produkt = $db->sql("SELECT * FROM produkter WHERE prodId = :prodId", [':prodId' => $id]);
?>

<?php
$produkter = $db->sql("SELECT * FROM produkter" );
?>

<?php
$randomProdukter = array_rand($produkter);
$randomProdukt = $produkter[$randomProdukter];

$randomProdukter1 = array_rand($produkter);
$randomProdukt1 = $produkter[$randomProdukter1];

$randomProdukter2 = array_rand($produkter);
$randomProdukt2 = $produkter[$randomProdukter2];
?>

<body>

<?php include "nav.php" ?>
<picture><img alt="Billede af grøntsager set oppefra" src="images/productinfohero.png"></picture>


    <div class="row">
        <div class="col-12 col-lg-6"><img alt="Billede af valgte produkt" src="images/<?php echo $produkt[0]->prodBilled; ?>" </div>
        <div class="col-12 col-lg-6">
            <h1><?php echo $produkt[0]->prodNavn; ?></h1>
        </div>
    </div>

<div class="row mx-auto">
    <div class="card bg-cardPrimary col-12 col-lg-4 m-5" style="max-width: 18rem;">
        <img src="images/<?php echo $randomProdukt->prodBilled; ?>" class="card-img-top" alt="...">
        <div class="card-body mx-2 mb-2">
            <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt->prodNavn; ?></h2>
            <p class="card-text"><?php echo $randomProdukt->prodBeskrivelse; ?> </p>

            <div class="row mt-2">
                <div class="col-10 pris"><p><?php ?></p></div>
                <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
            </div>
            <div class="d-grid"><a href="productinfo.php?prodId=${item.prodId}" class="btn" style="background-color: #71783a">Læs mere</a></div>
        </div>
    </div>

    <div class="card bg-cardPrimary col-12 col-lg-4 m-5" style="max-width: 18rem;">
        <img src="images/<?php echo $randomProdukt1->prodBilled; ?>" class="card-img-top" alt="...">
        <div class="card-body mx-2 mb-2">
            <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt1->prodNavn; ?></h2>
            <p class="card-text"><?php echo $randomProdukt1->prodBeskrivelse; ?> </p>

            <div class="row mt-2">
                <div class="col-10 pris"><p><?php ?></p></div>
                <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
            </div>
            <div class="d-grid"><a href="productinfo.php?prodId=${item.prodId}" class="btn" style="background-color: #71783a">Læs mere</a></div>
        </div>
    </div>

    <div class="card bg-cardPrimary col-12 col-lg-4 m-5" style="max-width: 18rem;">
        <img src="images/<?php echo $randomProdukt2->prodBilled; ?>" class="card-img-top" alt="...">
        <div class="card-body mx-2 mb-2">
            <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt2->prodNavn; ?></h2>
            <p class="card-text"><?php echo $randomProdukt2->prodBeskrivelse; ?> </p>

            <div class="row mt-2">
                <div class="col-10 pris"><p><?php ?></p></div>
                <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
            </div>
            <div class="d-grid"><a href="productinfo.php?prodId=${item.prodId}" class="btn" style="background-color: #71783a">Læs mere</a></div>
        </div>
    </div>
</div>



<?php include "footer.php"?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
