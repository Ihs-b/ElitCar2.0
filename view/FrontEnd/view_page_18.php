<?
$title="Agence";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte - Elitcar</title>
   
</head>
<body>
    <div class="navbar">
        <div class="logo">Elit<span>car</span></div>
        <div class="nav-links">
            <a href="#">Agences</a>
            <a href="#">Des questions ?</a>
            <a href="view_page_18.php" class="active">Ajouter une annonce</a>
        </div>
    </div>
    <div class="navbar2">
        <a href="#" class="nav-item">MES ANNONCES</a>
        <a href="view_page_18.php" class="nav-item active">MON COMPTE</a>
        <a href="#" class="nav-item">AJOUTER UNE ANNONCE</a>
        <a href="#" class="nav-item">MES MESSAGES</a>
        <a href="#" class="nav-item">MES NOTIFICATIONS</a>
    </div>
    <div class="sidebar">
        <a href="#">Modifier mon compte</a>
        <a href="#">Paramètres du compte</a>
        <a href="view_page_18.php" class="active">Moyens de paiement</a>
        <a href="#">Adresse postale</a>
    </div>
    <div class="content">
        <div class="payment-info">
            <img src="credit-card1.png" alt="Payment Icon"> 
            <p><strong> n'avez enregistré aucun moyen de paiement.</strong></p>
            <p>L'ajout d'un nouveau moyen de paiement est uniquement disponible au moment de la réservation.</p>
            <button>Trouver un véhicule</button>
        </div>
    </div>
</body>
</html>
<?php
$content =ob_get_clean();
require('view_Template.php');
?>
<style></style>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f7f7f7;
        }
        .navbar, .navbar2 {
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
        .navbar {
            top: 0;
        }
        .navbar2 {
            top: 1px; /* Positioning below the first navbar */
            justify-content: center;
            gap: 150px;
            position: relative;
        }
        .navbar .logo {
            font-size: 45px;
            font-weight: bold;
            color: #333;
        }
        .navbar .logo span {
            color: #ff9900;
        }
        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-links a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            position: relative;
            padding: 10px 30px;
        }
        
        .navbar ,
        .navbar2 a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            position: relative;
            padding: 10px 0;
        }
        .navbar .nav-links a:hover,
        .navbar2 a:hover {
            color: #ff9900;
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
            width: 200px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 130px; /* Positioning below both navbars */
            left: 0;
            height: calc(100vh - 100px);
            gap: 150px;
        }
        .sidebar a {
            display: block;
            padding: 10px 0;
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 7px;
        }
        .navbar a.active,
        .sidebar a:hover,
        .sidebar a.active {
            color: #ff9900;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
            padding-top: 140px; /* Adjust for the navbar height */
        }
        .content .payment-info {
            background-color: white;
            padding: 70px;
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
    </style>



