<?
$title="Agence";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié - Elitcar</title>
  
</head>
<body>
    <div class="navbar">
    <a href="#" class="navbar-link"> <div class="logo">Elit<span>car</span></div></a>
    </div>
    <div class="main">
        <div class="container">
        <div class="left-section">
            <div class="form-container">
                <h1>Mot de passe oublié</h1>
                <p>Si votre adresse e-mail est présente dans notre base de données, vous recevrez dans quelques minutes un courriel vous fournissant les instructions pour réinitialiser votre mot de passe.</p>
                <p>Si vous ne localisez pas ce courriel, veuillez vérifier votre dossier indésirables ou vos spams.</p>
                <a href="view_Forgot_Password_Agency.php"><strong> Renvoyer l'email</strong></a>
            </div>
        </div>
            <div class="right-section">
            <img src="login-pro.jpg">
                <!-- Image content is handled by the background-image property in CSS -->
            </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$content =ob_get_clean();
require('view_Template.php');
?>
<style>
       body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: white ;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: white;
            border-bottom: 1px solid #ddd;
            width: 100%;
            position: fixed;
            top: 0;
        }
        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .navbar .logo span {
            color: #FF9800;
        }
        .navbar-link{
            text-decoration: none;
            color: black;
            font-size: 16px;
        }
        .container {
            display: flex;
            width: 100%;
            margin-top: 60px; /* Ajoute une marge supérieure pour éviter de recouvrir la navbar */
        }
        .left-section {
            width: 50%;
            padding: 40px;
            background-color: white;
        }
        .right-section {
            width: 50%;
            background-image: url('login-pro.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
        }
        .form-container {
            margin-top: 100px;
        }
        h2 {
            font-size: 30px;
            margin-bottom: 40px;
        }
        p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        
        .form-container a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            font-size: 20px;
        }
        .form-container a:hover {
            text-decoration: underline;
        }

       
    </style>
