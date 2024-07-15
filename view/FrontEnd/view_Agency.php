<?
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

    <div class="container1">
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
</div>
</body>
</html>
<?php
$content =ob_get_clean();
require('view_Template.php');
require('view_FAQ.php');
?>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;

        }
        .container1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px;
            background-color: white;
            display: flex;
            align-items: center;
            padding: 20px;
            background: linear-gradient(to bottom right, #ffffff, #f0f0f0);
        
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);


        }
        .text-section {
            max-width: 35%;
            margin-left: 100px;
        }
        .text-section h1 {
            font-size: 45px;
            margin-bottom: 20px;
        }
        .text-section p {
            font-size: 18px;
            margin-bottom: 40px;
            color: black;
            font-weight: bold;
        }
        .text-section button {
            padding: 15px 150px;
            font-size: 18px;
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
       
            margin-right: 100px;
            max-width: 100%;
            border-radius: 10px;
        }

        .container2 {
            display: flex;
            margin-top: 4rem;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            justify-content: center; /* Center horizontally */
            height: 60vh; /* Full viewport height */
            background-color: white;
            border-radius: 10px;
        }
        .title h2 {
            font-size: 24px;
            margin-top: 4rem;
            font-size:2rem;
            text-align: center;

        }
        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .card {
            text-align: center;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px; 
            width: 300px; 
            margin-top: 2rem;

        }
        .card h3 {
            font-size: 18px;
            
        }
        .card p {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .card button {
            padding: 10px 25px;
            font-size: 16px;
            background-color: #ff9900;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            margin-left: auto;
        }
        .card button:hover {
            background-color: #e0a20d;
        }
    </style>
