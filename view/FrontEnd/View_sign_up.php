<?php
$title = "sign";
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Signup</title>
</head>
<body>
    <div>
        <img src="Asset/img/Elitcar.png" alt="Elitcar">
    </div>
    <div class="test">
        <section>
            <form>
                <h3>Inscription par mail</h3>
                <label>
                    <input class="info" type="text" placeholder="Prénom" required="">
                </label>
                <label>
                    <input class="info" type="text" placeholder="Nom" required="">
                </label>
                <label>
                    <input class="info" type="text" placeholder="Email" required="">
                </label>
                <label>
                    <input class="info" type="text" placeholder="Mot de Passe" required="">
                </label>

                <label>
                    <input type="checkbox" name="checkbox1" id="checkbox1">
                    <span class="size">J'accepte la <span class="bolt">politique de Confidentialité</span> et <span class="bolt">les Conditions générales d'Utilisation</span></span>
                </label>
                <label>
                    <input type="checkbox" name="checkbox1" id="checkbox1">
                    <span class="size">J'aimerai bénéficier des offres spéciales, promotion et nouvelles</span>
                </label>
                <button>Continuer</button>
                <a href="#">Vous êtes un professionnel ?</a>
            </form>
        </section>

        <section>
            <img src="Asset/img/login.jpg" alt="login">
        </section>
    </div>
</body>
</html>





<?php
$content = ob_get_clean();
require('View_Template.php');
?>