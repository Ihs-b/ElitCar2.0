<?php
$title = "inscription Agence";
$link = '
    <link rel="stylesheet" href="./public/css/style_agency.css">
    <link rel="stylesheet" href="./public/css/style_navbar.css">
    <link rel="stylesheet" href="./public/css/style_FAQ.css">
    <link rel="stylesheet" href="./public/css/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
';
$script = '<script src="./public/js/script_navbar.js"></script>';
ob_start();
?>

<body>
    <header>
        <?= $nav ?? ''; ?>
    </header>
    <main>
        <div class="agencycontainer">
            <div class="agencytext-section">
                <h1>S'inscrire en tant qu' agence de location de voiture</h1>
                <p>Choisir le forfait qui correspond à la taille de votre agence est une étape cruciale pour garantir une connectivité efficace et une communication sans heurts.</p>
                <a target="_self" class="col-8 col-xl-10" href="index.php?action=authAgency">
                    <button>S'inscrire</button>
                </a>
            </div>
            <div class="agencyimage-section">
                <img src="././public/img/Agency/1.jpg" alt="Car Steering Wheel">
            </div>
            <div class="agencycircle"></div>
        </div>
        <div class="agencycontainer2">
            <div class="agencytitle">
                <h2>Faites augmenter votre chiffre d'affaire d'une manière significative</h2>
            </div>
            <div class="agencycards">
                <div class="agencycard">
                    <h3>Vous avez moins de 10 voitures</h3>
                    <p>12000 CFA par an</p>
                    <a class="col-8 col-xl-10" href="#">
                        <button>S'inscrire</button>
                    </a>
                </div>
                <div class="agencycard">
                    <h3>Vous avez moins de 50 voitures</h3>
                    <p>12000 CFA par an</p>
                    <a class="col-8 col-xl-10" href="#">
                        <button>S'inscrire</button>
                    </a>
                </div>
                <div class="agencycard">
                    <h3>Vous avez plus de 50 voitures</h3>
                    <p>12000 CFA par an</p>
                    <a class="col-8 col-xl-10" href="#">
                        <button>S'inscrire</button>
                    </a>
                </div>
            </div>
        </div>
        <div>
            <?= $faq ?? ''; ?>
        </div>
    </main>
    <footer>
        <?= $footer ?? ''; ?>
    </footer>
    <?= $script; ?>
</body>

</html>

<?php
$content = ob_get_clean();
require 'view_template.php';
?>