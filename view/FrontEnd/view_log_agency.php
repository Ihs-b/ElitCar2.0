<?php
$title = "inscription Agence";
$link = '
    <link rel="stylesheet" href="././public/css/style_auth_agency.css">
    <link rel="stylesheet" href="././public/css/style_navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
';
$script = '
<script src="./public/js/script_auth_agency.js"></script>
<script src="./public/js/script_navbar.js"></script>
';
ob_start();
?>

<body>
    <header>
        <?= $nav ?? ''; ?>
    </header>
    <main>
        <div class="container-box">
            <div class="left-side">
                <div class="switch">
                    <span class="active">Se connecter</span>
                    <span>S'inscrire</span>
                </div>
                <div class="form-container-box">
                    <form id="login-form">
                        <h2>Nous sommes contents
                            de vous revoir</h2>
                        <button class="btn-conx"><img src="././public/img/auth_agency/6.png" alt="location de voiture" class="small-imagegoogle">Continuer avec Google</button>
                        <button class="btn-conx" id="btn-fb"><img src="././public/img/auth_agency/4.png" alt="location de voiture" class="small-imagegoogle">Continuer avec Facebook</button>
                        <button class="btn-conx" id="btn-ap"><img src="././public/img/auth_agency/5.png" alt="location de voiture" class="small-imageapple">Continuer avec Apple</button>
                        <p class="ou">ou</p>
                        <br>
                        <input type="email" placeholder="Email" class="btn-conx">
                        <input type="password" placeholder="Mot de passe" class="btn-conx">
                        <br>
                        <a href="index.php?action=frgtPass">
                            <p>Mot de passe oublié?</p>
                        </a>
                        <br>
                        <button id="email-signup" class="btn-resv">Se connecter</button>
                    </form>
                    <form id="email-form" style="display:none;">
                        <h2>Inscription par email</h2>
                        <input type="text" placeholder="Nom">
                        <input type="text" placeholder="Prénom">
                        <input type="email" placeholder="Email">
                        <input type="password" placeholder="Mot de passe">
                        <label>
                            <input type="checkbox"> J'accepte la politique de confidentialité et les conditions générales d'utilisation.
                        </label>
                        <label>
                            <input type="checkbox"> J'aimerais bénéficier des offres spéciales, promotions et nouvelles.
                        </label>
                        <button class="btn-resv">Continuer</button>
                    </form>
                </div>
            </div>
            <div class="right-side">
                <img src="././public/img/auth_agency/3.jpg" alt="agence de location de voiture" id="image-login">
            </div>
        </div>
    </main>
    <footer>
        <?= $footer ?? ''; ?>
    </footer>
</body>
<?= $script; ?>
<?php
$content = ob_get_clean();
require 'view_template.php';
?>