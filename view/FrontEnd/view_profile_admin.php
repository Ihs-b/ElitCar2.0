<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar</title>
    <link href="http://localhost/ElitCar2.0/public/css/particulier_styles.css" rel="stylesheet">
<!--    <style>-->
<!--        .annonce-card {-->
<!--            display: flex;-->
<!--            border: 1px solid #ccc;-->
<!--            border-radius: 10px;-->
<!--            overflow: hidden;-->
<!--            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);-->
<!--            background-color: #fff;-->
<!--            width: 600px;-->
<!--            max-width: 100%;-->
<!--        }-->
<!---->
<!--        .card-image {-->
<!--            width: 50%;-->
<!--            object-fit: cover;-->
<!--        }-->
<!---->
<!--        .annonce-card-content {-->
<!--            padding: 20px;-->
<!--            width: 50%;-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--            justify-content: space-between;-->
<!--        }-->
<!---->
<!--        .annonce-card-content h3 {-->
<!--            margin: 0 0 10px 0;-->
<!--            font-size: 1.5em;-->
<!--            color: #333;-->
<!--        }-->
<!---->
<!--        .tag {-->
<!--            display: inline-block;-->
<!--            padding: 5px 10px;-->
<!--            background-color: #f5f5f5;-->
<!--            border-radius: 5px;-->
<!--            font-size: 0.8em;-->
<!--            color: #777;-->
<!--            margin-bottom: 10px;-->
<!--        }-->
<!---->
<!--        .rating, .location, .price, .duration {-->
<!--            margin: 5px 0;-->
<!--            font-size: 0.9em;-->
<!--            color: #555;-->
<!--        }-->
<!---->
<!--        .price {-->
<!--            font-size: 1.2em;-->
<!--            font-weight: bold;-->
<!--            color: #000;-->
<!--        }-->
<!---->
<!--        .annonce-card-actions {-->
<!--            display: flex;-->
<!--            justify-content: space-between;-->
<!--            margin-top: 20px;-->
<!--        }-->
<!---->
<!--        .annonce-card-actions a {-->
<!--            text-decoration: none;-->
<!--            font-size: 0.9em;-->
<!--        }-->
<!---->
<!--        .annonce-card-actions .annonce-delete {-->
<!--            color: #ff0000;-->
<!--        }-->
<!---->
<!--        .annonce-card-actions .annonce-edit {-->
<!--            color: #00cc00;-->
<!--        }-->
<!--        .user-tab-container {-->
<!--            width: 100%;-->
<!--            /*max-width: 800px;*/-->
<!--            margin: 0 auto;-->
<!--            background-color: #fff;-->
<!--            border: 1px solid #ddd;-->
<!--            border-radius: 10px;-->
<!--            box-shadow: 0 2px 4px rgba(0,0,0,0.1);-->
<!--            display: flex;-->
<!--            flex-direction: column;-->
<!--        }-->
<!--        .tabs {-->
<!--            display: flex;-->
<!--            border: 1px solid #ffb200;-->
<!--            border-radius: 30px;-->
<!--            overflow: hidden;-->
<!--            margin: 20px 0;-->
<!--            width: max-content;-->
<!--            align-self: center;-->
<!--        }-->
<!---->
<!--        .user-tab-button {-->
<!--            flex: 1;-->
<!--            padding: 10px 20px;-->
<!--            text-align: center;-->
<!--            cursor: pointer;-->
<!--            border: none;-->
<!--            background-color: #fff;-->
<!--            color: #ffb200;-->
<!--            font-weight: bold;-->
<!--            font-size: large;-->
<!--            transition: background-color 0.3s, color 0.3s;-->
<!--            border-radius: 30px;-->
<!--        }-->
<!---->
<!--        .user-tab-button.active, .user-tab-button:hover {-->
<!--            background-color: #ffb200;-->
<!--            color: #fff;-->
<!--        }-->
<!---->
<!--        .tab-content {-->
<!--            display: none;-->
<!--            padding: 20px;-->
<!--        }-->
<!---->
<!--        .tab-content.active {-->
<!--            display: block;-->
<!--        }-->
<!---->
<!--        .user-table {-->
<!--            width: 100%;-->
<!--            border-collapse: collapse;-->
<!--            margin-top: 20px;-->
<!--        }-->
<!---->
<!--        .user-table th, .user-table td {-->
<!--            padding: 10px;-->
<!--            border: 1px solid #ddd;-->
<!--            text-align: left;-->
<!--        }-->
<!---->
<!--        .user-table th {-->
<!--            background-color: #f5f5f5;-->
<!--            font-weight: bold;-->
<!--        }-->
<!---->
<!--        .user-table a {-->
<!--            color: #007bff;-->
<!--            text-decoration: none;-->
<!--        }-->
<!---->
<!--        .user-table a:hover {-->
<!--            text-decoration: underline;-->
<!--        }-->
<!---->
<!--    </style>-->
</head>
<body>

    <nav>
        <ul>
            <li><a href="#" class="active" onclick="showTab('annonce')">MES ANNONCES</a></li>
            <li><a href="#" onclick="showTab('notifications')">MES NOTIFICATIONS</a></li>
            <li><a href="#" onclick="showTab('messages')">MES MESSAGES</a></li>
            <li><a href="#" onclick="showTab('tableau-utilisateur')">TABLEAU DES UTILISATEURS</a></li>
        </ul>
    </nav>
    <main class="profile-main">
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
            <div class="user-tab-container">
                <div class="tabs">
                    <button class="user-tab-button active" onclick="showUserTab('agences')">Les agences</button>
                    <button class="user-tab-button" onclick="showUserTab('clients')">Les clients</button>
                </div>
                <div id="agences" class="user-tab-content active">
                    <table class="user-table">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Statut</th>
                            <th>Modifier</th>
                            <th>Bloquer/Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Daniel Z</td>
                            <td>agence-elitcar@gmail.com</td>
                            <td>Membre Premium+</td>
                            <td><a href="#">Modifier</a></td>
                            <td><a href="#">Bloquer/Supprimer</a></td>
                        </tr>
                        <!-- ... other rows ... -->
                        </tbody>
                    </table>
                </div>
                <div id="clients" class="user-tab-content">
                    <table class="user-table">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Modifier</th>
                            <th>Bloquer/Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Daniel Z</td>
                            <td>daniel-z@gmail.com</td>
                            <td><a href="#">Modifier</a></td>
                            <td><a href="#">Bloquer/Supprimer</a></td>
                        </tr>
                        <!-- ... other rows ... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="http://localhost/ElitCar2.0/public/js/script.js"></script>
</body>
</html>
