<?php
$title = "Accueil";
ob_start();
?>
<h1>Bonjour bienvenu sur Elitcar</h1>
<p><input type="button" value="Connexion" onclick="document.location.href = 'index.php?action=login';" /></p>
<p><input type="button" value="Créer mon compte" onclick="document.location.href = 'index.php?action=auth';" /></p>
<?php
$content = ob_get_clean();
require('view_template.php');
?>