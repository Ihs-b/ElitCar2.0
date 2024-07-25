<?php
$title="Agence";
ob_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elitcar - Inscription agence de location</title>
</head>
<body>
    <div class="container">
        <div class="text-section">
            <h1>S'inscrire en tant que agence de location de voiture</h1>
            <p>Choisir le forfait qui correspond à la taille de votre agence est une étape cruciale pour garantir une connectivité efficace et une communication sans heurts.</p>
            <a target="_self" class="col-8 col-xl-10" href="#">
                <button>S'inscrire</button>
            </a>
        </div>
        <div class="image-section">
            <img src="pro-img.jpg" alt="Car Steering Wheel">
        </div>
    </div>
    <div class="container2">
        <div class="title">
            <h2>Faites augmenter votre chiffre d'affaire d'une manière significative</h2>
        </div>
        <div class="cards">
            <div class="card">
                <h3>Vous avez moins de 10 voitures</h3>
                <p>12000 CFA par an</p>
                <a target="_self" class="col-8 col-xl-10" href="#">
                    <button>S'inscrire</button>
                </a>
            </div>
            <div class="card">
                <h3>Vous avez moins de 50 voitures</h3>
                <p>12000 CFA par an</p>
                <a target="_self" class="col-8 col-xl-10" href="#">
                    <button>S'inscrire</button>
                </a>
            </div>
            <div class="card">
                <h3>Vous avez plus de 50 voitures</h3>
                <p>12000 CFA par an</p>
                <a target="_self" class="col-8 col-xl-10" href="#">
                    <button>S'inscrire</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
$content = ob_get_clean();
require('view_Template.php');
require('view_FAQ.php');
?>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#dcdcdc;
        }
        .container {
          flex-direction:column-reverse; /* Side by side on medium screens */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: rgb(255,255,255);
            background: linear-gradient(158deg, rgba(255,255,255,1) 69%, rgba(220,220,220,1) 70%);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap; /* Allows items to wrap to the next line on small screens */

        }
        .text-section {
            max-width: 100%; /* Full width on small screens */
            margin: 20px 0;
            flex: 1;
            
        }
        .text-section h1 {
            font-size: 2rem; 
            max-width: 90%;
           
        }
        .text-section p {
            font-size: 1rem;
            margin-bottom: 40px;
            color: black;
            font-weight: bold;
            max-width: 90%;
        }
        .text-section button {
            padding: 15px 50px; 
            font-size: 1rem;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .text-section button:hover {
            background-color: #e0a20d;
        }
        .image-section img {
            max-width: 100%;
            border-radius: 10px;
            margin: 20px 0;
            flex: 1;
            margin-right: 80px;
        }
        .container2 {
           align-items: center; 
            margin: 4rem auto;
          background-color: white;
            border-radius: 10px;
        
        }
        .title h2 {
            font-size: 1.5rem; /* Smaller font size on small screens */
            text-align: center;
            margin-bottom: 20px;
        }
        .cards {
            display: flex;
            flex-direction: column; /* Stacks items vertically on small screens */
            width: 100%;
        }
        .card {
            text-align: center;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card button {
            padding: 15px 35px;
            font-size: 1rem;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .card button:hover {
            background-color: #e0a20d;
        }

        /* Media queries for different screen sizes */
        @media (min-width: 768px) {
            .container {
                flex-direction: row; /* Side by side on medium screens */
                padding: 60px;
            }
            .text-section {
                max-width: 45%;
                margin-left: 80px;
            }
            .container2 {
                flex-direction: row; /* Side by side on medium screens */
                justify-content: space-around;
                padding: 40px;
            }
            .cards {
                flex-direction: row; /* Side by side on medium screens */
                gap: 20px;
            }
        }

        @media (min-width: 1024px) {
            .text-section h1 {
                font-size: 45px;
            }
            .text-section p {
                font-size: 18px;
            }
            .text-section button {
                padding: 15px 50px;
                font-size: 18px;
            }
            .container2 {
                width: 70%;
            }
        }
    </style>
