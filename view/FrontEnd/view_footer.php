<?php
ob_start();
?>
<footer class="footer">
  <div class="cner">
    <div class="ro">
      <div class="footer-col">
        <h4>entreprise</h4>
        <ul>
          <li><a href="#">à propos de nous</a></li>
          <li><a href="#">nos services</a></li>
          <li><a href="#">politique de confidentialité</a></li>
          <li><a href="#">programme d'affiliation</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>obtenir de l'aide</h4>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">expédition</a></li>
          <li><a href="#">retours</a></li>
          <li><a href="#">statut de la commande</a></li>
          <li><a href="#">options de paiement</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>nous suivre</h4>
        <div class="social-links">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
$footer = ob_get_clean();
?>