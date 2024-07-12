<?php
$title = "profileCust";
$link ='
    <link rel="stylesheet" href="././public/css/particulier_styles.css">
    ';
$script ='<script src="././public/js/script.js">
</script>';
ob_start();
?>

<!--<!DOCTYPE html>-->
<!--<html lang="fr">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Elitcar</title>-->
<!--    <link href="http://localhost/ElitCar2.0/public/css/particulier_styles.css" rel="stylesheet">-->
<!--</head>-->
<body>
<!--<header>-->
<!--    <div class="header-left">-->
<!--        <h1>Elitcar</h1>-->
<!--    </div>-->
<!--    <div class="header-right">-->
<!--        <div class="user-info">-->
<!--            <span>Charles</span>-->
<!--        </div>-->
<!--        <div class="questions">-->
<!--            <span>Des questions ?</span>-->
<!--        </div>-->
<!--        <div class="find-car">-->
<!--            <a href="#">Trouver ma voiture</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->
<nav>
    <ul>
        <li><a href="#" class="active" onclick="showTab('locations')">MES LOCATIONS</a></li>
        <li><a href="#" onclick="showTab('account')">MON COMPTE</a></li>
        <li><a href="#" onclick="showTab('messages')">MES MESSAGES</a></li>
        <li><a href="#" onclick="showTab('notifications')">MES NOTIFICATIONS</a></li>
    </ul>
</nav>
<main class="profile-main">
    <div id="locations" class="tab-content">
        <div class="no-rentals">
            <img src="http://localhost/ElitCar2.0/public/img/logo_voiture_empty.png" alt="Car Icon">
            <p>Aucune location prévue à l'avenir.<br>Actuellement, vous ne disposez d'aucune location programmée. Envisagez d'en organiser une !</p>
            <button>Trouver un véhicule</button>
        </div>
    </div>
    <div id="account" class="tab-content" style="display: none;">
        <aside>
            <ul>
                <li><button class="side-button active" onclick="showAccountTab('profile')">Modifier mon profile</button></li>
                <li><button class="side-button" onclick="showAccountTab('settings')">Paramètres du compte</button></li>
                <li><button class="side-button" onclick="showAccountTab('payment')">Moyens de paiement</button></li>
            </ul>
        </aside>
        <section id="profile" class="account-section">
            <h2>Informations personnelles</h2>
            <form>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" value="Daniel">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" value="Daniel">
                </div>
                <div class="form-group">
                    <label for="dob">Date de naissance</label>
                    <div class="dob">
                        <input type="number" id="dob-day" value="1">
                        <select id="dob-month">
                            <option selected value=''>--Selectioner un mois--</option>
                            <option value='1'>Janvier</option>
                            <option value='2'>Fevrier</option>
                            <option value='3'>Mars</option>
                            <option value='4'>Avril</option>
                            <option value='5'>Mai</option>
                            <option value='6'>Juin</option>
                            <option value='7'>Juillet</option>
                            <option value='8'>Août</option>
                            <option value='9'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                        </select>
                        <input type="number" id="dob-year" value="1998">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lieu">Lieu de naissance</label>
                    <input type="text" id="lieu" value="Douala">
                </div>
            </form>
        </section>
        <section id="settings" class="account-section" style="display: none;">
            <h2>Paramètres du compte</h2>
            <form>
                <div class="form-group">
                    <h3>Modifier mon mail</h3>
                    <label for="new-email">Nouveau email</label>
                    <input type="email" id="new-email">
                    <label for="current-password">Votre mot de passe Elitcar</label>
                    <input type="password" id="current-password">
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                    <button type="button" class="btn">Changer mon email</button>
                </div>
                <div class="form-group">
                    <h3>Modifier mon mot de passe</h3>
                    <label for="old-password">Ancien mot de passe</label>
                    <input type="password" id="old-password">
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                    <label for="new-password">Nouveau mot de passe</label>
                    <input type="password" id="new-password">
                    <label for="confirm-password">Confirmation</label>
                    <input type="password" id="confirm-password">
                    <button type="button" class="btn">Changer mon mot de passe</button>
                </div>
                <div class="form-group">
                    <h3>Supprimer mon compte</h3>
                    <a href="#" class="delete-account">Supprimer mon compte</a>
                </div>
            </form>
        </section>
        <section id="payment" class="account-section" style="display: none;">
            <div class="no-rentals">
                <img src="http://localhost/ElitCar2.0/public/img/payment-icon.jpg" alt="Payment Icon">
                <p>Vous n'avez enregistré aucun moyen de paiement.<br>L'ajout d'un nouveau moyen de paiement est uniquement disponible au moment de la réservation.</p>
                <button>Trouver un véhicule</button>
            </div>
        </section>
    </div>
    <div id="messages" class="tab-content" style="display: none;">
        <div class="no-rentals">
            <img src="http://localhost/ElitCar2.0/public/img/message_icon.jpg" alt="Car Icon">
            <p>Aucun message  !</p>
            <button>Trouver un véhicule</button>
        </div>
    </div>
    <div id="notifications" class="tab-content" style="display: none;">
        <div class="no-rentals">
            <img src="http://localhost/ElitCar2.0/public/img/notification-bell.svg" alt="Car Icon">
            <p>Aucune notifcations !</p>
            <button>Trouver un véhicule</button>
        </div>
    </div>
</main>
<!--<footer>-->
<!--    <div class="footer-columns">-->
<!--        <div class="footer-column">-->
<!--            <h3>Entreprise</h3>-->
<!--            <ul>-->
<!--                <li><a href="#">Comment ça marche ?</a></li>-->
<!--                <li><a href="#">À propos</a></li>-->
<!--                <li><a href="#">Appli mobile</a></li>-->
<!--                <li><a href="#">Blog</a></li>-->
<!--                <li><a href="#">Mentions légales</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="footer-column">-->
<!--            <h3>Entreprise</h3>-->
<!--            <ul>-->
<!--                <li><a href="#">Comment ça marche ?</a></li>-->
<!--                <li><a href="#">À propos</a></li>-->
<!--                <li><a href="#">Appli mobile</a></li>-->
<!--                <li><a href="#">Blog</a></li>-->
<!--                <li><a href="#">Mentions légales</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="footer-column">-->
<!--            <h3>Entreprise</h3>-->
<!--            <ul>-->
<!--                <li><a href="#">Comment ça marche ?</a></li>-->
<!--                <li><a href="#">À propos</a></li>-->
<!--                <li><a href="#">Appli mobile</a></li>-->
<!--                <li><a href="#">Blog</a></li>-->
<!--                <li><a href="#">Mentions légales</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="footer-bottom">-->
<!--        <p>Confidentialité | Conditions générales | ©2024 Elitcar</p>-->
<!--    </div>-->
<!--</footer>-->
<script src="http://localhost/ElitCar2.0/public/js/script.js"></script>
</body>
</html>
<?php
$content = ob_get_clean();
require('view_template.php');
?>