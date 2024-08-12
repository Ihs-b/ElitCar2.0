<?php
$title="inscription Agence";
$link ='
    <link rel="stylesheet" href="././public/css/style_agency.css">
    <link rel="stylesheet" href="././public/css/style_navbar.css">
    <link rel="stylesheet" href="././public/css/style_FAQ.css">
    <link rel="stylesheet" href="././public/css/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    ';
    $script ='<script src="././public/js/script_navbar.js">
    </script>';
ob_start();
?>
<header>
    <?= $nav ?>
</header>
<main class="col-12 g-0">
    <div class="container-professional">
        <div class="container-pro-create  ">
            <div class="container-pro-center ">
                <div class="container-pro-title  ">
                    <h1>S’inscrire en tant qu'agence de location de voiture</h1>
                </div>
                <div class="container-pro-subtitle">
                    <p>Choisir le forfait qui correspond à la taille de votre agence est une étape cruciale pour garantir une connectivité efficace et une communication sans heurts.</p>
                </div>
                <div class="container-btn-create ">
                    <a target="_self" class="col-8" href="#"><button class="btn btn-warning-pro-1 ">S'inscrire</button></a>
                </div>
            </div>
        </div>
        <div class="container-pro-img ">
            <div class="container-pro-img-1 "><img src="././public/img/agency/pro-img.jpg"></div>
        </div>
    </div>

    <div class="container-professional-2">

        <div class="container-main-choose-sub ">

            <div class="container-main-choose-sub-title ">
                <h2>Faites augmenter votre chiffre d’affaires d’une manière significative</h2>
            </div>

            <div class="container-main-choose-sub-card ">

                <div class="container-main-choose-sub-card-1  ">

                    <div class="container-main-choose-sub-card-title ">

                        <p>Vous avez moins de 10 voitures</p>

                    </div>
                    <div class="container-main-choose-sub-card-price ">

                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn  ">

                        <a target="_self" class="col-8 col-xl-10" href="#">

                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>

                    </div>

                </div>

                <div class="container-main-choose-sub-card-2  ">

                    <div class="container-main-choose-sub-card-title ">
                        <p>Vous avez moins de 10 voitures</p>
                    </div>

                    <div class="container-main-choose-sub-card-price">
                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn ">
                        <a target="_self" class="col-8 col-xl-10" href="#">
                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>
                    </div>

                </div>

                <div class="container-main-choose-sub-card-3">

                    <div class="container-main-choose-sub-card-title ">
                        <p>Vous avez moins de 10 voitures</p>
                    </div>

                    <div class="container-main-choose-sub-card-price ">
                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn ">
                        <a././public/img/agency/ class="col-8 col-xl-10" href="index.php?action=authAgency">
                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <?= $faq ?>
</main>
<footer>
    <?= $footer ?>
</footer>
<?php
$content = ob_get_clean();
require('view_template.php');
?>