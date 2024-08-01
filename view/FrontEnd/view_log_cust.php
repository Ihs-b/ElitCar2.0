<?php
$title = "Se connecter";
$link ='
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="././public/css/style_login.css">
    ';

    $script ='';

ob_start();
?>

</head>
<body>
    <div>
        <img src="././public/img/loginCust/Elitcar.png" alt="Elitcar">
    </div>
    <div class="test">
        <section>
            <form>
                <h1>Connexion</h1>
                <h3>Nous sommes contents de vous revoir</h3>
                <label>
                    <input class="info" type="text" placeholder="Email" required="">
                </label>
                <label>
                    <input class="info" type="text" placeholder="Mot de passe" required="">
                </label>
                <label>
                    <span class="size">Ou</span>
                </label>

                <div class="login-container">
                    <button class="login-button google-button">
                    <img class="logo" src="././public/img/loginCust/google.png" alt="Google logo">
                    Connexion avec Google
                    </button>

                    <button class="login-button facebook-button">
                    <img class="logo" src="././public/img/loginCust/facebook.png" alt="Facebook logo">
                    Connexion avec Facebook
                    </button>

                    <button class="login-button apple-button">
                    <img class="logo" src="././public/img/loginCust/pommegris.png" alt="Apple logo">
                    Connexion avec Apple
                    </button>
                </div>
                <label>
                    <span class="size">Mot de passe oublié?</span>
                </label>
                <button>Se Connecter</button>
                <a href="index.php?action=logAgency">Vous êtes un professionnel ?</a>
            </form>
        </section>

        <section>
            <img src="././public/img/loginCust/login.jpg" alt="login">
        </section>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require('View_Template.php');
?>