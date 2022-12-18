
<?php
require "settings/init.php";

$id = $_GET['prodId'];
$produkt = $db->sql("SELECT * FROM produkter WHERE prodId = :prodId", [':prodId' => $id]);
?>

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
    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
<?php include "nav.php"?>
<picture>
    <div>
        <img src="images/productinfohero.png">
    </div>
</picture>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <picture>
                    <img class="prodbilledeinfo mt-4" src="images/<?php echo $produkt[0]->prodBilled; ?>">
                </picture>
            </div>
            <div class="col-12 col-lg-6 mt-4 p-5">
                <h1><?php echo $produkt[0]->prodNavn; ?></h1><br>
                <div class="row">
                    <div class="col-6 col-lg-6">
                        <h5>Produktkategori</h5>
                        <p><?php echo $produkt[0]->prodKategori; ?></p>
                        <h1 class="pt-3"><?php echo $produkt[0]->prodPris; ?> DKK</h1>
                    </div>
                    <div class="col-6 col-lg-6">
                        <h5>Produktbeskrivelse</h5>
                        <p><?php echo $produkt[0]->prodBeskrivelse; ?></p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6 col-lg-6">
                        <h5>Varianter</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Varianter</option>
                            <option value="1">Variant 1</option>
                            <option value="2">Variant 2</option>
                            <option value="3">Variant 3</option>
                        </select>
                    </div>

                    <div class="col-6 col-lg-6">
                        <h5>Antal</h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Antal</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Tilføj til kurv</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="container my-5 mx-auto">
    <div class="row">
        <div class="col-4 col-lg-4 pt-3">
            <div id="linefigure"></div>
        </div>
        <div class="col-4 col-lg-4">
            <h2 class="text-center py-auto">Andre købte også</h2>
        </div>
        <div class="col-4 col-lg-4 pt-3">
            <div id="linefigure"></div>
        </div>
    </div>
</div>


<div class="container mx-auto my-5">
    <?php include "randomizedcards.php"?>
</div>


<?php include "footer.php"?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
