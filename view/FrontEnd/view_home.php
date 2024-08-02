<?php
$title = "ElitCar";
$link ='
    <link rel="stylesheet" href="././public/css/style_home.css">
    <link rel="stylesheet" href="././public/css/style_navbar.css">
    <link rel="stylesheet" href="././public/css/style_footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    ';
$script ='<script src="././public/js/script_navbar.js">
</script>';
ob_start();
?>
<body>
<header>
    <?= $nav ?>
</header>

<main>

<div class="wrapper">
        <div class="reservation">
            <div class="form-container">
                <h1>Louez votre voiture en afrique.</h1>
                <h2>Où allez-vous ?</h2>
                <form>
                    <div class="input-group">
                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" placeholder="Douala, Cameroun">
                    </div>
                    <div class="date-group">
                        <div class="input-group">
                            <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" placeholder="Début">
                        </div>
                        <div class="input-group">
                            <span class="icon"><i class="fas fa-calendar-alt"></i></span>
                            <input type="date" placeholder="Fin">
                        </div>
                    </div>
                    <button type="submit" class=" btn-resv">Recherche</button>
                </form>
            </div>
        </div>
        <div class="image-container">
            <img src="public/img/homepage/1.jpg" alt="Image">
        </div>
    </div>

    <section class="wrap">
      <div class="content">
        <div class="left-column">
            <div class="image-container">
                <img src="public/img/homepage/2.jpg" alt="Image" class="small-image">
            </div>
        </div>
        <div class="right-column">
            <div class="paragraph">
            <h2>Découvrez-la toute nouvelle <br>approche pour la location de voitures.</h2>
            <br>
            <p>Sélectionnez parmi une variété de véhicules proposés par des <br>professionnels à proximité de votre emplacement.</p>

            </div>
            <div class="cards">
                <div class="card">
                   <i class="fa fa-gear" id="icon"></i>
                    <h2>Les offres les plus avantageuses <br> sur les voitures</h2>
                    <p>Explorez les propositions de <br> locations des diverses agences <br> dans plusieurs endroits.</p>
                </div>
                <div class="card">
                    <i class="fa fa-calendar" id="icon"></i>
                    <h2>Flexibilité tarifaire et possibilité <br> de réservation adaptable.</h2>
                    <p>Évitez les surprises avec un prix <br> clair dès le départ et une annulation <br>gratuite et nettoyage amélioré.</p>
                </div>
            </div>
          </div>
       </div>
    </section>

    <div class="containe">
    <h1>Trouvez des véhicules qui répondent <br> à vos exigences</h1>
    <div class="cont">
        <div class="cardd">
            <img src="public/img/homepage/3.jpg" alt="Image 1">
            <div class="card-text">Citadine</div>
            
        </div>
        <div class="cardd">
            <img src="public/img/homepage/4.jpg" alt="Image 2">
            <div class="card-text">Monospace</div>
           
        </div>
        <div class="cardd">
            <img src="public/img/homepage/5.jpg" alt="Image 3">
            <div class="card-text">Utilitaire</div>
           
        </div>
        <div class="cardd">
            <img src="public/img/homepage/6.jpg" alt="Image 4">
            <div class="card-text">SUV</div>
            
        </div>
    </div>
</div>

<h1 class="caramel">Disponible dans 6 villes au Cameroun</h1>
<!-- Contenedor -->
<ul id="accordion" class="accordion">
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Photoshop</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                </ul>
            </li>
            <li>
                <div class="link"> Location de voitures à Yaoundé<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Javascript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Ruby</a></li>
                </ul>
            </li>
            <li>
                <div class="link"> Location de voitures à Garoua<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Desktop</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Bafoussam<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Sangmelima<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Kribi<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
</ul>
        <div class="containe">
            <h1>Conseils pour la location </h1>
            <p>Optez pour la location de voiture en toute assurance et vivez une aventure mémorable lors <br>
            de votre road trip grâce à nos recommandations.</p>
            <div class="cont">
                <div class="cardd">
                    <img src="public/img/homepage/7.jpg" alt="Image 1">
                    <div class="card-text" id="card-te"><h3><span>Où se loger à Yaoundé ?</span></h3> <br>Pour les vacances, le travail, et de nombreuses
                    autres circonstances.</div>
                    
                </div>
                <div class="cardd">
                    <img src="public/img/homepage/8.jpg" alt="Image 2">
                    <div class="card-text" id="card-te"><h3><span>Conseils pour un road trip réussi</span></h3> <br>Pour la Saint-Valentin et bien d'autres occasions.</div>
                
                </div>
                <div class="cardd">
                    <img src="public/img/homepage/9.jpg" alt="Image 3">
                    <div class="card-text" id="card-te"><h3><span>Conseils pour un road trip réussi</span></h3> <br>Pour la Saint-Valentin et bien d'autres occasions.</div>
                
                </div>
                
            </div>
        </div>



        <h1 class="caramel">Vous êtes une agence de location de <br> voitures ?</h1>
<!-- Contenedor -->
<ul id="accordion" class="accordion">
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Photoshop</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Javascript</a></li>
                <li><a href="#">jQuery</a></li>
                <li><a href="#">Ruby</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Tablet</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Desktop</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
            <li>
                <div class="link">Location de voitures à Douala<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                <li><a href="#">Google</a></li>
                <li><a href="#">Bing</a></li>
                <li><a href="#">Yahoo</a></li>
                </ul>
            </li>
</ul>


    <div class="wra">
        <div class="pub">
            <div class="tex">
                <h1>Vous êtes une agence de location <br>
                de voitures ?</h1>
                <p>Avec Afriicar, votre chiffre d'affaire augmente <br>
                de manière significative.</p>
                <a href=""><button class="btn-resv">Voir les solutions</button></a>
            </div>
            <div class="image-container">
            <img src="public/img/homepage/10.jpg" alt="Image">
        </div>
        </div>

        
    </div>
</main>
<footer><?=$footer?></footer>
</body>
<?php
$content = ob_get_clean();
require('view_template.php');
?>

