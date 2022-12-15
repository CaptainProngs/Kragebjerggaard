<?php
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


<div class="card" style="width: 18rem;">
    <img src="images/kurv.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title p-0">Title</h4>
        <p class="card-text">Some quick text.</p>
        <br>
        <h5 class="card-title">Pris</h5>
        <div class="row">
            <div class="col-2"><a href="#" class="btn btn-primary">Læs mere</a></div>
            <div class="col-2"><img src="images/kurv.png" class="card-img-top" alt="cart"></div>
        </div>
    </div>
</div>











<a href="webshop.php?kategori=maelk">ikon</a>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>