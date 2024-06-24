?>
<?php
$title = "commentaire";
ob_start();
?>
<div class="userComments"></div>
<h2>Avis clients</h2>
<ul class="comments-list">
    <?php
    // Fonction pour générer des étoiles en fonction de la note
    function generateStars($rating)
    {
        $stars = "";
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                $stars .= "<span style='color: yellow;'>&#9733;</span>"; // Étoile jaune pleine
            } else {
                $stars .= "<span class='star-empty'>&#9734;</span>"; // Étoile vide
            }
        }
        return $stars;
    }

    ?>
</ul>
</div>
</div>
<?php
$content = ob_get_clean();
require('view_template.php');
?>