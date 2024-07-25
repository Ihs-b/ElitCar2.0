<?php
$title="Agence";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - Elitcar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f7f7f7;
        }
        .navbar2 {
            width: 100%;
            padding: 10px 20px;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        .navbar2 {
            justify-content: center;
            gap: 150px;
        }
        .nav-links a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            position: relative;
            padding: 10px 30px;
        }
        .navbar .nav-links a:hover,
        .navbar2 a:hover {
            color: #ff9900;
        }
        .navbar2 a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            position: relative;
            padding: 10px 0;
        }
        .navbar2 a::after {
            content: '';
            display: block;
            height: 4px;
            background-color: #ff9900;
            position: absolute;
            bottom: -10px; /* Position the line below the text */
            left: 0;
            right: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .navbar2 a.active::after,
        .navbar2 a:hover::after {
            transform: scaleX(1);
        }
        .sidebar {
            width: 300px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: absolute;
            left: 0;
            top: 70px; /* Adjusted to sit below the navbar */
            height: calc(100vh - 70px);
        }
        .sidebar a {
            display: block;
            padding: 10px 0;
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 7px;
        }
        .sidebar a:hover,
        .sidebar a.active {
            color: #ff9900;
        }
        .content {
            margin-left: 320px; /* Adjusted for the sidebar width */
            padding: 20px;
            padding-top: 100px; /* Adjust for the navbar height */
        }
        .content .payment-info {
            background-color: white;
            padding: 40px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .content .payment-info img {
            width: 80px;
            height: auto;
            margin-bottom: 20px;
        }
        .content .payment-info p {
            margin: 20px 0;
        }
        .content .payment-info button {
            padding: 10px 20px;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .content .payment-info button:hover {
            background-color: #e68a00;
        }
        /* Media Queries for smaller screens */
        @media (max-width: 768px) {
            .navbar2 {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                padding: 10px;
            }
            .navbar2 a {
                padding: 5px 0;
            }
            .sidebar {
                width: 100%;
                height: auto;
                padding: 10px;
                top: 14rem; /* Adjusted to sit below the navbar */
                position: fixed;
            }
            .content {
                margin-left: 0;
                padding: 10px;
                margin-top: 25rem; /* Adjust for the navbar height */
                position: fixed;
            }
            .sidebar a {
                display: inline-block;
                padding: 10px 15px;
            }
            .content .payment-info {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="navbar2">
        <a href="#" class="nav-item">MES ANNONCES</a>
        <a href="view_page_18.php" class="nav-item active">MON COMPTE</a>
        <a href="#" class="nav-item">AJOUTER UNE ANNONCE</a>
        <a href="#" class="nav-item">MES MESSAGES</a>
        <a href="#" class="nav-item">MES NOTIFICATIONS</a>
    </div>
    <div class="sidebar">
        <a href="#">Modifier mon compte</a>
        <a href="view_page_19.php">Paramètres du compte</a>
        <a href="view_page_18.php" class="active">Moyens de paiement</a>
        <a href="#">Adresse postale</a>
    </div>
    <div class="content">
        <div class="payment-info">
            <img src="credit-card1.png" alt="Payment Icon">
            <p><strong>Vous n'avez enregistré aucun moyen de paiement.</strong></p>
            <p>L'ajout d'un nouveau moyen de paiement est uniquement disponible au moment de la réservation.</p>
            <button>Trouver un véhicule</button>
        </div>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require('view_Template.php');
?>




