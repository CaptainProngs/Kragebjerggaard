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

<?php include 'nav.php'; ?>

<br><br><br><br>

<div class="row justify-content-center">
    <a class="col-2" href="webshop.php?kategori=grønt"><img src="images/ikon1.png" alt="frugt og grønt"></a>
    <a class="col-2" href="webshop.php?kategori=saft"><img src="images/ikon2.png" alt="saft og juice"></a>
    <a class="col-2" href="webshop.php?kategori=krydderier"><img src="images/ikon3.png" alt="krydderier"></a>
    <a class="col-2" href="webshop.php?kategori=mejeri"><img src="images/ikon4.png" alt="mejeri"></a>
</div>
<br><br>

<div class="container">
    <div class="produkter">
        <div class="row">
            <div class="items">
            </div>
        </div>
    </div>
</div>


<div class="container-fluid p-0">
    <img src="images/bannerprodukt1.webp" alt="inspiration">
    <a href="#"><img src="images/bannerprodukt2.webp" alt="inspiration"></a>
</div>


<?php
$count = 0;
foreach ($produkter

         as $items) {


    if ($count < 8) {
        ?>
            <div class="row justify-content-center pt-3">
                <div class="card bg-cardPrimary col-6 col-md-6 col-lg-3 p-0 m-0" style="max-width: 18rem;">
                    <img src="images/<?php
                    echo $items->prodBilled ?>" class="card-img-top" alt="cover">
                    <div class="card-body mx-2 mb-2">
                        <h2 class="card-title p-0 mb-0"><?php
                            echo $items->prodNavn ?></h2>
                        <p class="card-text"><?php
                            echo $items->prodBeskrivelse ?></p>

                        <div class="row mt-2">
                            <div class="col-10 pris"><p><?php
                                    echo $items->prodPris ?></p></div>
                            <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart"
                                                               alt="cart"></a>
                        </div>
                        <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
    $count++;
    ?>

    <?php
}
?>

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