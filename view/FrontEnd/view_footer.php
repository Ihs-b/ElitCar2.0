
<?
$title="Footer";
ob_start();
?>
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Entreprise</h3>
                <ul>
                    <li><a href="#">Comment ça marche ?</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Application mobile</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Mentions légales</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Nos Horaires</h3>
                <ul>
                    <li>du Lundi au Samedi :</li>
                    <li>8h00 - 18h00</li>
                    <li>Dimanche: fermé</li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Rejoignez-Nous</h3>
                <ul>
                    <li><a href="#"><img src="instagram-icon.png" alt="Instagram"> Instagram</a></li>
                    <li><a href="#"><img src="facebook-icon.png" alt="Facebook">Facebook</a></li>
                    <li><a href="#"><img src="linkedin-icon.png" alt="LinkedIn">Linkedin</a></li>
                    <li><a href="#"><img src="tiktok-icon.png" alt="TikTok">TikTok</a></li>
                    <li><a href="tel:+237679278356">(+237) 679 27 83 56</a></li>
                    <li><a href="tel:+237233471026">(+237) 233 47 10 26</a></li>
                    <li><a href="mailto:info@opiumdigital.fr">Adresse mail: info@opiumdigital.fr</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-column">
                <p>Confidentialité</p>
            </div>
            <div class="footer-bottom-column">
                <p>Conditions générales</p>
            </div>
            <div class="footer-bottom-column">
                <p>&copy; 2024 ElitCar</p>
            </div>
        </div>
    </footer>


<?php
$content =ob_get_clean();
require('view_Template.php');
?>

<style>
   /* Footer styles */
footer {
    background-color: #333;
    color: #ccc;
    padding: 2rem 0;
    text-align: left;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.footer-column {
    flex: 1;
    min-width: 200px;
    margin: 1rem;
}

.footer-column h3 {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 1rem;
    position: relative;
}

.footer-column h3::after {
    content: "";
    display: block;
    width: 50px;
    height: 2px;
    background-color: #f9a825;
    position: absolute;
    bottom: -0.5rem;
    left: 0;
}

.footer-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-column ul li {
    margin: 0.5rem 0;
}

.footer-column ul li a {
    color: #ccc;
    text-decoration: none;
}

.footer-column ul li a:hover {
    text-decoration: underline;
}

.footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #222;
    padding: 1rem 0;
    margin-top: 2rem;
}

.footer-bottom-column {
    flex: 1;
    text-align: center;
    color: #f9a825;
}

.footer-column ul li img {
    width: 20px;
    height: 20px;
    vertical-align: middle;
    margin-right: 10px;
}

.footer-column ul li a {
    display: flex;
    align-items: center;
}

.footer-column ul li a img {
    margin-right: 10px;
}


</style>