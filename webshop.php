<?php
require "settings/init.php";

$kategori = (!empty($_GET["kategori"])) ? $_GET["kategori"]  : "" ;

$sql = "SELECT * FROM produkter WHERE 1=1 ";

if(!empty($kategori)) {
    $sql .= "AND prodKategori = $kategori";
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
<div class="card bg-cardPrimary" style="width: 18rem;">
    <img src="images/Grønt%202.2.png" class="card-img-top" alt="...">
    <div class="card-body mx-2 mb-2">
        <h2 class="card-title p-0 mb-0">Title</h2>
        <p class="card-text">Some quick text.</p>

        <div class="row mt-2">
            <div class="col-10 pris"><p>Pris</p></div>
            <div class="col-2 mb-4"><img src="images/darkCart.png" class="img-cart" alt="cart"></div>
        </div>
        <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a></div>
    </div>
</div>


<div class="container">
    <div class="produkter">
        <div class="row">
            <div class="items">
            </div>
        </div>
    </div>
</div>
</div>






<a href="webshop.php?kategori=grønt">ikon</a>


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