
<main>

<div class="apper">
      <i id="left" class="fa fa-angle-left"></i>
      <div class="carousel">
        <img src="public/img/11.jpg" alt="img" draggable="false">
        <img src="public/img/12.jpg" alt="img" draggable="false">
        <img src="public/img/13.jpg" alt="img" draggable="false">
        <img src="public/img/12.jpg" alt="img" draggable="false">

        <div class="reservation-box">
        <div class="price">75 614 CFA</div>
        <div class="details">
            <p>Pour 9 jours</p>
            <p>1 460 km inclus</p>
        </div>
        <button class="reserve-button">Réserver</button>
    </div>
    
      </div>
      <i id="right" class="fa fa-angle-right"></i>
    </div>

    <div class="divcontainer">
        <h1>Alfa-Romeo Stelvio</h1>
        <p class="subtitle">2022 • 5 places</p>
        <div class="stars">
            <span>★★★★☆</span> <span>4.7 (21)</span>
        </div>
        
        <div class="divsection">
            <h2>Adresse de départ et de retour</h2>
            <div class="address-box">
                <p>Quartier Douala - PK12</p>
                <p>Richelieu Bonis, Douala, Cameroun</p>
                <img src="public/img/map.png" alt="Map">
            </div>
        </div>

        <div class="divsection">
            <h2>Propriétaire</h2>
            <div class="owner-box">
                <img src="public/img/15.png" alt="Owner" class="owner-image">
                <div class="owner-details">
                    <p>EASYCAR <span class="pro-badge">PRO</span></p>
                    <p>★★★★★</p>
                </div>
            </div>
        </div>

        <div class="divsection">
            <h2>Description du véhicule</h2>
            <div class="description-box">
                <ul>
                    <li><span>Merci de respecter les règles sanitaires, ne laissez pas de déchets dans le véhicule !</span></li>
                    <li>Véhicule NEUF, qui convient à vos déplacements courts en ville comme à de plus longs trajets. Les options vous assureront un grand confort.</li>
                    <li>Les retours en retard seront facturés.</li>
                    <li>Options:</li>
                    <ul>
                        <li>Climatisation</li>
                        <li>Régulateur de vitesse</li>
                        <li>Système de Navigation</li>
                        <li>Caméra de recul</li>
                    </ul>
                    <li>Inclus:</li>
                    <ul>
                        <li>Assurance tous risques</li>
                        <li>Assistance 24/7</li>
                    </ul>
                    <ul>
                        <li>Voici les tarifs pour les siéges enfanst:</li>
                        <li>1 jour : 10€</li>
                        <li>3 jours : 20€</li>
                        <li>1 semaine : 30€</li>
                        <li>2 semaine ou plus : 50€</li>
                       
                    </ul>
                </ul>
            </div>
        </div>

        <div class="divsection">
            <h2>Caution</h2>
            <div class="caution-box">
                <p>100 759 CFA bloqués jusqu'au 10/07/24</p>
            </div>
        </div>

        <div class="divsection">
            <h2>Les annonces de ce pro</h2>
            <div class="pro-listings">
                <div class="listing">
                    <img src="public/img/16.jpg" alt="Car">
                    <p>Volkswagen Polo</p>
                    <p>2022 • 5 places</p>
                    <div class="stars">
                       <span>★★★★☆</span> <span>4.7 (21)</span>
                    </div>
                    <p>60 000 CFA / jour</p>
            
                </div>
                <div class="listing">
                    <img src="public/img/16.jpg" alt="Car">
                    <p>Volkswagen Polo</p>
                    <p>2022 • 5 places</p>
                    <div class="stars">
                       <span>★★★★☆</span> <span>4.7 (21)</span>
                    </div>
                    <p>60 000 CFA / jour</p>
            
                </div>
                <div class="listing">
                    <img src="public/img/16.jpg" alt="Car">
                    <p>Volkswagen Polo</p>
                    <p>2022 • 5 places</p>
                    <div class="stars">
                         <span>★★★★☆</span> <span>4.7 (21)</span>
                    </div>
                    <p>60 000 CFA / jour</p>
            
                </div>
                <div class="listing">
                    <img src="public/img/16.jpg" alt="Car"  >
                    <p>Volkswagen Polo</p>
                    <p>2022 • 5 places</p>
                    <div class="stars">
                        <span>★★★★☆</span> <span>4.7 (21)</span>
                    </div>
                    <p>60 000 CFA / jour</p>
           
                </div>
            </div>
        </div>
    </div>
   
</main>

<?php include_once ("view/FrontEnd/view_footer.php") ?>
<script src="public/js/homepage.js"></script>

<style>
    * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  
  body {
    font-family: "Roboto", sans-serif;
    font-size: 0.925rem;
  
  }
  
  a {
    text-decoration: none;
  }
  
  
  /* ___________________________________________________navbar___________________________ */
  
  .container {
    width: 1170px;
    position: relative;
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px;
  }
  
  .navbar,
  .navbar > .container {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .navbar {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    background-color: #fff;
    padding: 1rem 1.15rem;
    border-bottom: 1px solid #eceef3;
  }
  
  .navbar .container {
    max-width: 1170px;
  }
  
  .navbar .navbar-header {
    display: flex;
    align-items: center;
  }
  
  .navbar .navbar-header .navbar-toggler {
    cursor: pointer;
    border: none;
    display: none;
    outline: none;
  }
  
  .navbar .navbar-header .navbar-toggler span {
    height: 2px;
    width: 22px;
    background-color: #a9ad92;
    display: block;
  }
  
  .navbar .navbar-header .navbar-toggler span:not(:last-child) {
    margin-bottom: 0.2rem;
  }
  
  .navbar .navbar-header > a {
    font-weight: 500;
    color: #3c4250;
  }
  
  .navbar .navbar-menu {
    display: flex;
    align-items: center;
    flex-basis: auto;
    flex-grow: 1;
  }
  
  .navbar .navbar-menu .navbar-nav {
    margin-left: auto;
    flex-direction: row;
    display: flex;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }
  
  .navbar .navbar-menu .navbar-nav > li > a {
    color: #3c4250;
    text-decoration: none;
    display: inline-block;
    padding: 0.5rem 1rem;
  }
  
  .navbar .navbar-menu .navbar-nav > li > a:hover {
    color: rgb(255, 219, 102);
  }
  
  .navbar .navbar-menu .navbar-nav > li.active a {
    color:rgb(255, 219, 102);
  }
  
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
    list-style: none;
    position: absolute;
    top: 150%;
    left: 0;
    background-color: #fff;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    min-width: 160px;
    width: auto;
    white-space: nowrap;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    z-index: 99999;
    border-radius: 0.75rem;
    display: none;
  }
  
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown li a {
    color: #3c4250;
    padding: 0.25rem 1rem;
    display: block;
  }
  
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown.show {
    display: block !important;
  }
  
  .navbar .navbar-menu .navbar-nav .dropdown > .separator {
    height: 1px;
    width: 100%;
    margin-top: 9px;
    margin-bottom: 9px;
    background-color: #eceef3;
  }
  
  .navbar .navbar-dropdown {
    position: relative;
  }
  
  .navbar .navbar-header > a span {
    color: rgb(255, 209, 44);
  }
  
  .navbar .navbar-header h4 {
    font-weight: 500;
    font-size: 1.25rem;
  }
  .wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 100%;
  }
  /* _________________________________________________partie reservation_____________________________________ */
  .reservation {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 0.5rem;
     
  }
  
  .form-container {
      
      padding: 8rem;
      border-radius: 0.5rem;
  }
  
  .form-container h1 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
  }
  
  .form-container h2 {
      font-size: 1.2rem;
      color: #ff9900;
      margin-bottom: 1rem;
  }
  
  .input-group {
      display: flex;
      align-items: center;
      background-color: #f0f0f0;
      margin-bottom: 1rem;
      padding: 0.5rem;
      border-radius: 0.25rem;
  }
  
  .input-group label {
      margin-right: 0.5rem;
  }
  
  .input-group input {
      border: none;
      background: none;
      flex: 1;
      padding: 0.5rem;
      font-size: 1rem;
  }
  
  .input-group input:focus {
      outline: none;
  }
  
  .btn-resv{
      width: 100%;
      padding: 0.75rem;
      font-size: 1rem;
      color: #fff;
      background-color: #ff9900;
      border: none;
      border-radius: 0.25rem;
      cursor: pointer;
  }
  
  .btn-resv:hover {
      background-color: #e68a00;
  }
  
  .image-container {
      margin-left: 2rem;
  }
  
  .image-container img {
      max-width: 500px;
      border-radius: 0.5rem;
      margin-bottom: 20px;
  }
  /* __________________________________________________partie pub 1___________________________________ */
  .wrap {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #EDECEC; 
      
  }
  
  .content {
      display: flex;
      gap: 20px;
      background-color: #EDECEC; /* Espacement entre les colonnes */
  }
  
  .left-column {
      flex: 0 0 30%; /* Largeur fixe pour la colonne de gauche */
  }
  
  .right-column {
      flex: 1;
      background-color: #fff; 
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      padding: 20px;
      /* Colonne de droite occupe tout l'espace restant */
  }
  
  
  .small-image {
      width: 100%; /* La taille de l'image peut être ajustée selon ton besoin */
      max-width: 200px; /* Largeur maximale pour l'image */
      height: auto;
  }
  
  .paragraph p {
      font-size: 1.1rem;
      line-height: 1.6;
  }
  
  .cards {
      display: flex;
      flex-wrap: wrap; /* Permet à chaque carte de passer à la ligne si nécessaire */
      gap: 20px; 
      padding: 10px;/* Espacement entre les cartes */
  }
  
  .card {
      flex: 1 0 calc(50% - 10px); /* Les cartes occupent 50% de la largeur, moins l'espacement */
      padding: 20px;
      /* background-color: #f0f0f0; */
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  }
  
  .card h2 {
      font-size: 1.2rem;
      margin-bottom: 10px;
  }
  
  .card p {
      font-size: 1rem;
      line-height: 1.4;
  }
  #icon{
      font-size: 40px;
      background-color: aqua;
      padding: 8px;
      color: #e68a00;
  }
  
  
  /* ________________________________________________________partie pub2_________________________ */
  .containe {
      max-width: 1200px;
      margin: 0 auto;
      /* padding: 20px; */
      margin-top: 5%;
  }
  
  h1 {
      
      font-size: 2rem; /* Taille de police du titre */
      margin-bottom: 20px; /* Espacement sous le titre */
  }
  
  .cont {
      display: flex;
      justify-content: space-between; /* Espacement équitable entre les cartes */
      flex-wrap: wrap; /* Permet aux cartes de passer à la ligne si nécessaire */
  }
  
  .cardd {
      flex: 1; /* Chaque carte prend la même quantité d'espace */
      
      border-radius: 8px; /* Coins arrondis */
      overflow: hidden; /* Pour cacher le contenu qui pourrait déborder */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
      margin-bottom: 20px; /* Espacement entre les cartes */
      margin: 20px;
  }
  
  .cardd img {
      width: 100%; /* Image remplit complètement la carte */
      height: 170px; /* Hauteur ajustée automatiquement */
      display: block; /* Pour enlever l'espace en dessous de l'image */
      border-bottom: 1px solid #ccc; /* Bordure inférieure légère */
  }
  .card-text {
     
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 10px;
      text-align: center; /* Centre le texte */
      box-sizing: border-box; /* Pour inclure le padding dans la largeur */
  }
  #card-te{
    text-align: start;
  }
  
  .caramel{
      margin-left: 156px;
      margin-top: 70px;
  }
  #accordion {
    list-style: none;
    padding: 35px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
}

#accordion > li {
    width: calc(33.33% - 20px); /* 3 colonnes par ligne avec espacement entre les colonnes */
    margin-right: 20px; /* Espacement entre les colonnes */
    margin-bottom: 20px; /* Espacement entre les lignes */
    border-bottom: 1px solid rgb(141, 141, 141);
}

.link {
    padding: 10px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.link i {
    margin-right: 10px;
}

.submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
}

.submenu li {
    padding: 10px;
}


  .section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 40px;
}
.text {
    flex: 1;
    display: flex;
    flex-direction: column;
    max-width: 50%;
}
.title {
    font-size: 2em;
    margin-bottom: 20px;
}
.button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
    width: fit-content;
}
.button:hover {
    background-color: #0056b3;
}
.image {
    flex: 1;
    max-width: 40%;
}
.pub{
    display: flex;
    justify-content: space-between;
    
  
}
.wra{
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      background-color: #006E97;
      margin-top: 30px;
}
.tex{
    margin: 0 auto;
    color: #fff;
}

/* __________________________________footer_________________________ */
.cner{
    max-width: 1170px;
    margin:auto;
  }
  .ro{
    display: flex;
    flex-wrap: wrap;
  }
  ul{
    list-style: none;
  }
  .footer{
    background-color: #EDECEC;
      padding: 70px 0;
      margin-top: 100px;
  }
  .footer-col{
     width: 25%;
     padding: 0 15px;
  }
  .footer-col h4{
    font-size: 18px;
    color: #434343;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: rgb(44, 107, 255);
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  }
  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color: #3c3939;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #ffffff;
    padding-left: 8px;
  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
   
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
  }
  
  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px;
  }
  
  .social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all 0.2s linear;
    -o-transition: all 0.2s linear;
    transition: all 0.2s linear;
  }
  
  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
    background-color: #29aafe;
  }
  
  .social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px;
  }
  
  .social-icons a.facebook:hover {
    background-color: #3b5998;
  }
  
  .social-icons a.twitter:hover {
    background-color: #00aced;
  }
  
  .social-icons a.linkedin:hover {
    background-color: #007bb6;
  }
  
  .social-icons a.dribbble:hover {
    background-color: #ea4c89;
  }
  


/* ________________page9 code _________________________ */

.code {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  margin-top: 50px;
}
.verification-code {
  background-color: white;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  width: 352px;
}
.verification-code h2 {
  margin-bottom: 20px;
}
.code-inputs {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}
.code-inputs input {
  width: 40px;
  height: 40px;
  margin: 0 5px;
  font-size: 24px;
  text-align: center;
  border: 1px solid #ddd;
  border-radius: 5px;
}
.code-inputs input:focus {
  outline: none;
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}
.submit-button {
  background-color: #ff9900;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}
.submit-button:disabled {
  background-color: #fbc02d;
  opacity: 0.6;
  cursor: not-allowed;
}
.resend-code {
  margin-top: 10px;
  font-size: 14px;
}
.resend-code a {
  color: #007bff;
  text-decoration: none;
}
.resend-code a:hover {
  text-decoration: underline;
}

/* ______________________________________________page3_________________________________  */
/* Import Google font - Poppins */


.apper{
  display: flex;
  max-width: 1200px;
  position: relative;
  margin-left: 160px;
}
.apper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #343F4F;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #8d8d8dc3;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.apper i:active{
  transform: translateY(-50%) scale(0.9);
}
.apper i:hover{
  background: #f2f2f2;
}
.apper i:first-child{
  left: -22px;
  display: none;
}
.apper i:last-child{
  right: -22px;
}
.apper .carousel{
  /* font-size: 0px; */
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  /* height: 340px; */
  object-fit: cover;
  user-select: none;
  /* margin-left: 14px; */
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}


.reservation-box {
  width: 300px;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  font-family: Arial, sans-serif;
  position: absolute;
  bottom: -35px;
  left: 70%;
}

.price {
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

.details p {
  margin: 5px 0;
  color: #666;
  font-size: 14px;
}

.reserve-button {
  background-color: #e67e22;
  border: none;
  padding: 10px 20px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.reserve-button:hover {
  background-color: #d35400;
}

/* ______________________________coté informations */

.divcontainer {
  width: 80%;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
  /* border-radius: 10px; */
}

h1 {
  font-size: 2em;
  margin-bottom: 10px;
}

.subtitle {
  font-size: 1.2em;
  color: #666;
}

.stars {
  margin-bottom: 20px;
}

.stars span:first-child {
  color: #f39c12;
}

.divsection {
  margin-bottom: 40px;
}

.address-box, .owner-box, .description-box, .caution-box, .pro-listings {
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 10px;
  background-color: #fff;
  display: flex;
}

.address-box img, .owner-image {
  width: 55%;
  margin-top: 10px;
  margin-left: 30px;
}

.owner-box {
  display: flex;
  align-items: center;
}

.owner-image {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 20px;
}

.owner-details {
  flex: 1;
}

.pro-badge {
  background-color: #e67e22;
  color: #fff;
  padding: 2px 5px;
  border-radius: 3px;
  margin-left: 5px;
}

.description-box ul, .description-box ul ul {
  list-style-type: none;
  padding: 0;
}

.description-box ul li, .description-box ul ul li {
  margin-bottom: 10px;
}

.pro-listings {
  display: flex;
  gap: 20px;
  overflow-x: auto;
}

.listing {
  flex: 0 0 200px;
  border: 1px solid #ddd;
  border-radius: 10px;
  padding: 10px;
  background-color: #fff;
  text-align: center;
}

.listing img {
  width: 100%;
  border-radius: 10px;
  margin-bottom: 10px;
}

/* ________________________________________page4/5/6/7____________________________ */
.container-box {
  display: flex;
  justify-content: space-between;
  align-items: center; /* Ajout pour aligner verticalement */
  padding: 20px;
}

.left-side {
  flex: 1;
}

.right-side {
  flex: 1;
  display: flex; /* Utilisation de flexbox pour aligner l'image et la case côte à côte */
  justify-content: flex-end; /* Aligner l'image à droite */
  align-items: center; /* Centrer verticalement l'image */
}

.right-side img {
  max-width: 100%;
  height: auto;
  margin-left: 10px; /* Espacement entre l'image et la case */
}

.switch {
  display: flex;
  justify-content: center;
  padding: 10px 0;
}

.switch span {
  cursor: pointer;
  padding: 10px 20px;
  border-bottom: 2px solid transparent;
  transition: border-bottom 0.3s ease;
}

.switch span.active {
  border-bottom: 2px solid #e68a00;
}

.form-container-box {
  max-width: 600px;
  margin: 20px auto;
  padding: 20px;
}

form {
  display: none; /* Masquer tous les formulaires par défaut */
}

form:first-child {
  display: block; /* Afficher le premier formulaire par défaut */
}

h2 {
  margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="password"], button, label {
  margin-bottom: 10px;
  padding: 10px;
  font-size: 16px;
  display: list-item;
}

.btn-conx {
  background-color: #f8fafb;
  color: #0a0a0a;
  border: 1px solid;
  cursor: pointer;
  width: 100%;
  padding: 0.75rem;
  font-size: 1rem;
}

#btn-fb {
  background-color: #4781fe;
  color: #ffffff;
  border: 1px solid;
  cursor: pointer;
  font-size: 16px;
}

#btn-ap {
  background-color: #151619;
  color: #ffffff;
  border: 1px solid;
  cursor: pointer;
  font-size: 16px;
}

label {
  font-size: 14px;
}

.small-imagegoogle {
  width: 23px;
  height: 23px;
  margin-right: 5px;
}

.small-imagefb {
  width: 20px;
  height: 20px;
  margin-right: 5px;
}

.small-imageapple {
  width: 25px;
  height: 25px;
  margin-right: 5px;
}

.ou {
  text-align: center;
}
</style>