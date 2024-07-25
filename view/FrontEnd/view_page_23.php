<?php
$title = "Agence";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar - Mot de passe oublié</title>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="form-container">
                <h2>Mot de passe oublié</h2>
                <p>Veuillez saisir votre adresse e-mail ci-dessous pour recevoir les consignes nécessaires à la réinitialisation de votre mot de passe.</p>
                <form>
                    <input type="email" placeholder="Email" required>
                    <a href="#" class="submit-link"> <button type="submit">Envoyer</button></a>
                </form>
            </div>
        </div>
        <div class="right-section">
            <!-- Section pour l'image -->
        </div>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require('view_Template.php');
?>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: white;
        }
        .container {
            display: flex;
            flex-direction: row;
            width: 100%;
            margin-top: 60px; /* Ajoute une marge supérieure pour éviter de recouvrir la navbar */
        }
        .left-section{
            width: 50%;
            padding: 40px;
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
        input[type="email"] {
            width: 70%;
            padding: 10px;
            margin-bottom: 30px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 70%;
            padding: 10px;
            background-color: #FF9800;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e68900;
        }

        /* Styles pour les petits écrans */
        @media (max-width: 768px) {
            .container {
                flex-direction:column-reverse;
                margin-top: 20px; /* Réduire la marge pour les petits écrans */
                text-align: center;
                display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
            }
            .left-section{
                width: 70%;
                padding: 20px;
            }
            .right-section {
                max-width: 200%;
            border-radius: 10px;
            margin: 20px 30px;
            flex: 1;
            }
            .form-container {
                margin-top: 20px;
            }
            h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                margin-bottom: 20px;
            }
            input[type="email"] {
                width: 70%;
                padding: 10px;
            }
            button{
                padding: 10px 25px;
            font-size: 1rem;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            }
        }
    </style>

