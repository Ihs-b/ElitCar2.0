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
            <a href="#">Agence Elitcar</a>
            <a href="#">Des questions ?</a>
            <a href="view_page_18.php"  class="active">Ajouter une annonce</a>
        </div>
    </div>
    <div class="navbar2">
        <a href="#">MES ANNONCES</a>
        <a href="#" class="active">MON COMPTE</a>
        <a href="#"> AJOUTER UNE ANNONCE</a>
        <a href="#">MES MESSAGES</a>
        <a href="#">MES NOTIFICATIONS</a>
    </div>
    <div class="sidebar">
        <a href="#">Modifier mon compte</a>
        <a href="#" class="active">Paramètres du compte</a>
        <a href="#">Moyens de paiement</a>
        <a href="#">Adresse postale</a>
    </div>
    <div class="content">
        <div class="form-section">
            <h3>Modifier mon mail</h3>
            <label for="new-email">Nouveau email</label>
            <input type="email" id="new-email">
            <label for="current-password">Votre mot de passe Elitcar</label>
            <input type="password" id="current-password">
            <button>Changer mon email</button>
        </div>
        <div class="form-section">
            <h3>Modifier mon mot de passe</h3>
            <label for="current-password-2">Ancien mot de passe</label>
            <input type="password" id="current-password-2">
            <label for="new-password">Nouveau mot de passe</label>
            <input type="password" id="new-password">
            <label for="confirm-password">Confirmation</label>
            <input type="password" id="confirm-password">
            <button>Changer mon mot de passe</button>
        </div>
        <div class="form-section">
            <h3>Supprimer mon compte</h3>
            <a href="#" class="delete-account">Supprimer mon compte</a>
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
            position: absolute;
            top: 130px; /* Positioning below both navbars */
            left: 0;
            height: calc(130vh - 100px);
            gap: 150px;
        }
        .sidebar a {
            display: block;
            padding: 10px 0;
            color: black;
            text-decoration: none;
            margin-bottom: 7px;
        }
        .navbar a.active,
        .sidebar a:hover,
        .sidebar a.active {
            color: #ff9900;
        }
        .content {
            margin-left: 240px;
            padding: 40px;
            padding-top: 30px; /* Adjust for the navbar height */
        }
        .content .form-section {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .content .form-section h3 {
            margin-top: 10px;
        }
        .content .form-section label {
            display: block;
            margin-top: 25px;
            font-weight: bold;
        }
        .content .form-section input {
            width: 100%;
            padding: 8px;
            margin-top: 17px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .content .form-section button {
            padding: 10px 20px;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            display: block;
        }
        .content .form-section button:hover {
            background-color: #e68a00;
        }
        .content .form-section .delete-account {
            color: red;
            text-decoration: none;
            margin-top: 20px;
            display: inline-block;
        }
    </style>