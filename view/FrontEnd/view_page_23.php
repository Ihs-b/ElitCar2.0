<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar - Mot de passe oublié</title>

</head>
<body>
    <div class="navbar">
    <a href="#" class="navbar-link"> <div class="logo">Elit<span>car</span></div></a>
    </div>
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
             <img src="login-pro.jpg">
        </div>
    </div>
</body>
</html>
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
    </style>
