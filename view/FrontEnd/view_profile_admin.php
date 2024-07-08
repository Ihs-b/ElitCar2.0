<?php
//$title = "profileCust";
//$link ='
//    <link rel="stylesheet" href="././public/css/particulier_styles.css">
//    ';
//$script ='<script src="././public/js/script.js">
//</script>';
//ob_start();
//?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Elitcar</title>
        <link href="http://localhost/ElitCar2.0/public/css/particulier_styles.css" rel="stylesheet">
    </head>
    <body>
    <style>
        .annonce-card {
            display: flex;
            border: 1px solid #ccc;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 600px;
            max-width: 100%;
        }

        .card-image {
            width: 50%;
            object-fit: cover;
        }

        .annonce-card-content {
            padding: 20px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .annonce-card-content h3 {
            margin: 0 0 10px 0;
            font-size: 1.5em;
            color: #333;
        }

        .tag {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f5f5f5;
            border-radius: 5px;
            font-size: 0.8em;
            color: #777;
            margin-bottom: 10px;
        }

        .rating, .location, .price, .duration {
            margin: 5px 0;
            font-size: 0.9em;
            color: #555;
        }

        .price {
            font-size: 1.2em;
            font-weight: bold;
            color: #000;
        }

        .annonce-card-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .annonce-card-actions a {
            text-decoration: none;
            font-size: 0.9em;
        }

        .annonce-card-actions .annonce-delete {
            color: #ff0000;
        }

        .annonce-card-actions .annonce-edit {
            color: #00cc00;
        }
    </style>
    <!--    <header>-->
    <!--        <div class="header-left">-->
    <!--            <h1>Elitcar</h1>-->
    <!--        </div>-->
    <!--        <div class="header-right">-->
    <!--            <div class="user-info">-->
    <!--                <span>Charles</span>-->
    <!--            </div>-->
    <!--            <div class="questions">-->
    <!--                <span>Des questions ?</span>-->
    <!--            </div>-->
    <!--            <div class="find-car">-->
    <!--                <a href="#">Trouver ma voiture</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </header>-->
    <nav>
        <ul>
            <li><a href="#" class="active" onclick="showTab('annonce')">MES ANNONCES</a></li>
            <li><a href="#" onclick="showTab('notifications')">MES NOTIFICATIONS</a></li>
            <li><a href="#" onclick="showTab('messages')">MES MESSAGES</a></li>
            <li><a href="#" onclick="showTab('tableau-utilisateur')">TABLEAU DES UTILISATEURS</a></li>
        </ul>
    </nav>
    <main>
        <div id="annonce" class="tab-content">
            <div class="annonce-card">
                <img src="http://localhost/ElitCar2.0/public/img/VW_1966.jpg" alt="Renault Clio" class="card-image">
                <div class="annonce-card-content">
                    <h3>Renault Clio</h3>
                    <span class="tag">SUR RENDEZ-VOUS</span>
                    <p class="rating">★ Aucune évaluation</p>
                    <p class="location">📍 Douala</p>
                    <p class="price">65 614 CFA</p>
                    <p class="duration">Pour 3 jours</p>
                    <div class="annonce-card-actions">
                        <a href="#" class="annonce-delete">Supprimer l'annonce</a>
                        <a href="#" class="annonce-edit">Modifier l'annonce</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="notifications" class="tab-content" style="display: none;">
            <div class="no-rentals">
                <img src="http://localhost/ElitCar2.0/public/img/notification-bell.svg" alt="Car Icon">
                <p>Aucune notifcations !</p>
                <button>Trouver un véhicule</button>
            </div>
        </div>
        <div id="messages" class="tab-content" style="display: none;">
            <div class="no-rentals">
                <img src="http://localhost/ElitCar2.0/public/img/message_icon.jpg" alt="Car Icon">
                <p>Aucun message !</p>
                <button>Trouver un véhicule</button>
            </div>
        </div>
        <div id="tableau-utilisateur" class="tab-content" style="display: none;">

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
//$content = ob_get_clean();
//require('view_template.php');
//?>