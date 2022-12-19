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


    <div class="row mx-auto">
        <div class="card bg-cardPrimary p-0 col-12 col-lg-4 mx-auto mb-5" style="max-width: 18rem;">
            <img src="images/<?php echo $randomProdukt->prodBilled; ?>" class="card-img-top" alt="...">
            <div class="card-body mx-2 mb-2">
                <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt->prodNavn; ?></h2>
                <p class="card-text"><?php echo $randomProdukt->prodBeskrivelse; ?> </p>

                <div class="row mt-2">
                    <div class="col-10 pris"><p><?php echo $randomProdukt->prodPris?> DKK</p></div>
                    <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
                </div>
                <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a></div>
            </div>
        </div>

        <div class="card bg-cardPrimary p-0 col-12 col-lg-4 mx-auto mb-5" style="max-width: 18rem;">
            <img src="images/<?php echo $randomProdukt1->prodBilled; ?>" class="card-img-top" alt="...">
            <div class="card-body mx-2 mb-2">
                <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt1->prodNavn; ?></h2>
                <p class="card-text"><?php echo $randomProdukt1->prodBeskrivelse; ?> </p>

                <div class="row mt-2">
                    <div class="col-10 pris"><p><?php echo $randomProdukt1->prodPris?> DKK</p></div>
                    <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
                </div>
                <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a></div>
            </div>
        </div>

        <div class="card bg-cardPrimary p-0 col-12 col-lg-4 mx-auto mb-5" style="max-width: 18rem;">
            <img src="images/<?php echo $randomProdukt2->prodBilled; ?>" class="card-img-top" alt="...">
            <div class="card-body mx-2 mb-2">
                <h2 class="card-title p-0 mb-0"><?php echo $randomProdukt2->prodNavn; ?></h2>
                <p class="card-text"><?php echo $randomProdukt2->prodBeskrivelse; ?> </p>

                <div class="row mt-2">
                    <div class="col-10 pris"><p><?php echo $randomProdukt2->prodPris?> DKK</p></div>
                    <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
                </div>
                <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a></div>
            </div>
        </div>


    </div>