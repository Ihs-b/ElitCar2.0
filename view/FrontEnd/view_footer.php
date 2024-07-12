<?php
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
$footer = ob_get_clean();
?>