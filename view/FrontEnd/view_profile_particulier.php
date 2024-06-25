<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar</title>
    <link href="http://localhost/ElitCar2.0/public/css/styles.css" rel="stylesheet">
</head>
<!--<body>-->
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
<!--<nav>-->
<!--    <ul>-->
<!--        <li><a href="#">MES LOCATIONS</a></li>-->
<!--        <li><a href="#">MON COMPTE</a></li>-->
<!--        <li><a href="#">MES MESSAGES</a></li>-->
<!--        <li><a href="#">MES NOTIFICATIONS</a></li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<main>-->
<!--    <div class="no-rentals">-->
<!--        <img src="http://localhost/ElitCar2.0/public/img/logo_voiture_empty.png" alt="Car Icon">-->
<!--        <p>Aucune location prévue à l'avenir.<br>Actuellement, vous ne disposez d'aucune location programmée. Envisagez d'en organiser une !</p>-->
<!--        <button>Trouver un véhicule</button>-->
<!--    </div>-->
<!--</main>-->
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
<!--</body>-->
<!--</html>-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="header-left">
        <h1>Elitcar</h1>
    </div>
    <div class="header-right">
        <div class="user-info">
            <span>Charles</span>
        </div>
        <div class="questions">
            <span>Des questions ?</span>
        </div>
        <div class="find-car">
            <a href="#">Trouver ma voiture</a>
        </div>
    </div>
</header>
<nav>
    <ul>
        <li><a href="#" class="active" onclick="showTab('locations')">MES LOCATIONS</a></li>
        <li><a href="#" onclick="showTab('account')">MON COMPTE</a></li>
        <li><a href="#" onclick="showTab('messages')">MES MESSAGES</a></li>
        <li><a href="#" onclick="showTab('notifications')">MES NOTIFICATIONS</a></li>
    </ul>
</nav>
<main>
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
                            <option selected>Novembre</option>
                            <!-- Add other months as needed -->
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
            <!-- Add your settings content here -->
        </section>
        <section id="payment" class="account-section" style="display: none;">
            <h2>Moyens de paiement</h2>
            <!-- Add your payment methods content here -->
        </section>
    </div>
</main>
<footer>
    <div class="footer-columns">
        <div class="footer-column">
            <h3>Entreprise</h3>
            <ul>
                <li><a href="#">Comment ça marche ?</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Appli mobile</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Entreprise</h3>
            <ul>
                <li><a href="#">Comment ça marche ?</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Appli mobile</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Entreprise</h3>
            <ul>
                <li><a href="#">Comment ça marche ?</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Appli mobile</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Mentions légales</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Confidentialité | Conditions générales | ©2024 Elitcar</p>
    </div>
</footer>
<script src="http://localhost/ElitCar2.0/public/js/script.js"></script>
</body>
</html>
