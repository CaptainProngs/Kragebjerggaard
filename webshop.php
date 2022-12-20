<?php
require "settings/init.php";

$kategori = (!empty($_GET["kategori"])) ? $_GET["kategori"] : "";

$sql = "SELECT * FROM produkter WHERE 1=1 ";

if (!empty($kategori)) {
    $sql .= "AND prodKategori = '$kategori'";
}

$produkter = $db->sql($sql);
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kragebjerggaard</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="keywords"
          content="click and collect, lokal produceret mælk, mælk, mejeri, køer økologisk mælkeproduktion, sæson, økologisk">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/pgq7ydv.css">
    <link href="https://fonts.cdnfonts.com/css/sans-mateo" rel="stylesheet">

    <script src="https://cdn.tiny.cloud/1/ys9ivv1x233eg2mrq0d4prcpenkssm67kjeagomz2eix9ubu/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>

<body>

<?php include 'nav.php'; ?>

<div class="container-fluid p-0">
    <img src="images/herowebshop.webp" alt="Webshop">
</div>

<br><br>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-0 col-lg-2"></div>
        <a class="col-2 col-lg-2" href="index.php" style="max-height: 2em;"><img src="images/back.png" alt="back"></a>
        <div class="col-6 col-lg-5 justify-content-center text-center" style="font-weight: bolder"><h2>Sortér</h2></div>

        <div class="col-0 col-lg-3"></div>
    </div>
</div>
<br><br>

<div class="row justify-content-center">
    <a class="col-6 col-lg-2 rubrik" href="webshop.php?kategori=grønt"><img src="images/ikon1.png" alt="frugt og grønt">Frugt
        &
        Grønt</a>
    <a class="col-6 col-lg-2 rubrik" href="webshop.php?kategori=saft"><img src="images/ikon2.png" alt="saft og juice">Saft
        &
        Juice</a>
    <a class="col-6 col-lg-2 rubrik" href="webshop.php?kategori=krydderier"><img src="images/ikon3.png"
                                                                                 alt="krydderier">Krydderier</a>
    <a class="col-6 col-lg-2 rubrik" href="webshop.php?kategori=mejeri"><img src="images/ikon4.png" alt="mejeri">Mejeri</a>
</div>
<br><br><br>


<div class="container-fluid justify-content-center p-0">
    <div class="row text-center justify-content-center">
        <div class="col-8 col-md-8 col-lg-8">
        <img src="images/banner1.png" alt="inspiration">
        </div>
    </div>
</div>


<div class="container">
<div class="row justify-content-center pt-3">


    <?php
    $count = 0;
    foreach ($produkter

             as $items) {

        ?>
        <div class="col-6 col-md-4 col-lg-3 col-xl-3 py-4 justify-content-center m-0">
            <div class="card bg-cardPrimary" style="max-width: 18rem;">
                <img src="images/<?php
                echo $items->prodBilled ?>" class="card-img-top" alt="cover">
                <div class="card-body mx-2 mb-2">
                    <h2 class="card-title p-0 mb-0"><?php
                        echo $items->prodNavn ?></h2>
                    <p class="card-text"><?php
                        echo $items->prodBeskrivelse ?></p>

                    <div class="row mt-2">
                        <div class="col-10 pris"><p><?php
                                echo $items->prodPris ?> kr </p></div>
                        <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart"
                                                           alt="cart"></a>
                    </div>
                    <div class="d-grid"><a href="productinfo.php?prodId=<?php echo $items->prodId ?>" class="btn"
                                           style="background-color: #71783a">Læs mere</a>
                    </div>
                </div>
            </div>
        </div><br><br>


        <?php
        if ($count == 7) {
            ?>

            <br><br>
            <div class="container-fluid p-0">
                <a href="#"><img src="images/bannerprodukt1.webp" alt="inspiration"></a>
                <a href="#"><img src="images/bannerprodukt2.webp" alt="inspiration"></a>
            </div><br><br>
            <?php
        }
        $count++;
    }
    ?>
</div>
</div>


<br><br><br><br>

<?php include 'footer.php'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>

<script type="module">
    import Produkt from "./js/produkt.js";

    const produkter = new Produkt();
    produkter.init();
</script>


</body>
</html>