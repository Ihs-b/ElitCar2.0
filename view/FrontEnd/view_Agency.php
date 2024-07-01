<?
$title="Agence";
ob_start();
?>
<main class="col-12 g-0">
    <div class="container-professional">
        <div class="container-pro-create  ">
            <div class="container-pro-center ">
                <div class="container-pro-title  ">
                    <h1>S’inscrire en tant qu'agence de location de voiture</h1>
                </div>
                <div class="container-pro-subtitle">
                    <p>Choisir le forfait qui correspond à la taille de votre agence est une étape cruciale pour garantir une connectivité efficace et une communication sans heurts.</p>
                </div>
                <div class="container-btn-create ">
                    <a target="_self" class="col-8" href="#"><button class="btn btn-warning-pro-1 ">S'inscrire</button></a>
                </div>
            </div>
        </div>
        <div class="container-pro-img ">
            <div class="container-pro-img-1 "><img src="pro-img.jpg"></div>
        </div>
    </div>

    <div class="container-professional-2">
    
        <div class="container-main-choose-sub ">

            <div class="container-main-choose-sub-title ">
                <h2>Faites augmenter votre chiffre d’affaires d’une manière significative</h2>
            </div>

            <div class="container-main-choose-sub-card ">

                <div class="container-main-choose-sub-card-1  ">

                    <div class="container-main-choose-sub-card-title ">

                        <p>Vous avez moins de 10 voitures</p>

                    </div>
                    <div class="container-main-choose-sub-card-price ">

                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn  ">

                        <a target="_self" class="col-8 col-xl-10" href="#">

                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>

                    </div>

                </div>

                <div class="container-main-choose-sub-card-2  ">

                    <div class="container-main-choose-sub-card-title ">
                        <p>Vous avez moins de 10 voitures</p>
                    </div>

                    <div class="container-main-choose-sub-card-price">
                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn ">
                        <a target="_self" class="col-8 col-xl-10" href="#">
                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>
                    </div>

                </div>

                <div class="container-main-choose-sub-card-3">

                    <div class="container-main-choose-sub-card-title ">
                        <p>Vous avez moins de 10 voitures</p>
                    </div>

                    <div class="container-main-choose-sub-card-price ">
                        <h5>12000 CFA par an</h5>
                    </div>

                    <div class="container-main-choose-sub-card-btn ">
                        <a target="_self" class="col-8 col-xl-10" href="#">
                            <button class="btn btn-warning-pro-2 ">S'inscrire</button>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    
</main>

<?php
$content =ob_get_clean();
require('view_Template.php');
require('view_FAQ.php');
?>
<style>
    
  
body {
            background-color: silver;
            
    font-size: 16px; /* Taille de base pour le corps du document */
}


.container-professional {
    height: 75vh;
    display: flex;
    flex-wrap: wrap;
     width: 100%;
    padding: 0;
    background-color: #ffffff;
    border-radius: 8px;
}

.container-pro-create {
    display: flex;
  flex-direction: column;
  justify-content: center;
}
.container-pro-create p{
    font-size:medium;
}

.container-pro-center {
    width: 66.66666667%;
    margin-left: auto;
    margin-right: auto;
}

.container-pro-title h1 {
     font-size: 2.5rem;
    font-weight: bold;
}

.container-btn-create  {
    width: 60%;
}

.container-pro-img {
    display: flex;
    width: 150px; /* Ajustez la largeur de l'image selon vos besoins */
    height: auto;
    display: none;
}

.container-pro-img-1 {
  background-image: url('pro-img.jpg');
  width: 66.66666667%;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    
}


.container-professional-2 {
    display: flex;
    margin-top: 4rem;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    justify-content: center; /* Center horizontally */
    height: 50vh; /* Full viewport height */
    background-color: white;
}

.container-main-choose-sub {
  background-color: #ffffff;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
  border-radius: 8px;
  
}

h5{
    font-size:20px;
}
.container-main-choose-sub-title h2{
    font-size:2rem;
}
.container-main-choose-sub-card-title P{
    font-size:25px;

}

.container-main-choose-sub-card  {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin: auto;
  border:3px;
}
.container-main-choose-sub-card-1 {
    
  margin-bottom: 100px;
  border: 3px solid #bfbfbf;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px; 
  width: 400px; /* Largeur fixe en pixels */
  
}

.container-main-choose-sub-card-2 {
  margin-bottom: 75px;
  border: 3px solid #bfbfbf;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px; 
  width: 400px;

}
.container-main-choose-sub-card-3 {
  margin-bottom: 75px;
  border: 3px solid #bfbfbf;
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 20px; 
  width: 400px;
}
.btn-warning-pro-1 {
  /* Style du bouton de recherche */
  height: 40px;
  width: 100%;
  background-color: #ffaa00;
  border: none;
 color: #ffffff;
 border-radius: 10px
}
.btn-warning-pro-2 {
  /* Style du bouton de recherche */
  background-color: #ffaa00;
    border: none;
    color: white;
    padding: 15px 40px;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
  
}
/* l'effet de survol pour le bouton */
.btn-warning-pro:hover {
  background-color: #ffaa00;
  color: #000000;
  border: 4px solid #000000;
  box-shadow: none;
  font-weight: bold;
}

/* l'effet de focus */
.btn-warning-pro:focus {
  background-color: #ffaa00;
  box-shadow: none !important;
  font-weight: bold;
}
@media screen and (max-width: 1200px) {
  .container-main-choose-sub-card {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .container-professional-2 {
    height: 100%;
    margin-top: 100px;
    background-color: #cccccc;
    align-items: center;
  }
}

