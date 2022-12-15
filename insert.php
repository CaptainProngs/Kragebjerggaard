<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];

    $sql = "INSERT INTO mejeri (prodNavn, prodBeskrivelse, prodPris, prodKategori) VALUES(:prodNavn, :prodBeskrivelse, :prodPris, :prodKategori)";
    $bind = [":prodNavn" => $data["prodNavn"], ":prodBeskrivelse" => $data["prodBeskrivelse"], ":prodPris" => $data["prodPris"], ":prodKategori" => $data["prodKategori"]];

    $db->sql($sql, $bind,false);

    echo "Produktet er nu sat ind . <a href='insert.php'>Indsæt flere produkter</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>indsæt til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row">

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="mejeriNavn">Mejeri navn</label>
                <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="mejeriPris">Mejeri pris</label>
                <input class="form-control" type="number" step="0.01" name="data[prodPris]" id="prodPris" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="mejeriNavn">Mejeri navn</label>
                <input class="form-control" type="text" name="data[prodKategori]" id="ProdKategori" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="mejeriBeskrivelse">Mejeri beskrivelse</label>
                <input class="form-control" type="text" step="0.1" name="data[prodBeskrivelse]" id="prodBeskrivelse" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 offset-md-6">
<button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>
    </div>
</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>