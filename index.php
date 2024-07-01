<?php
require('controller/FrontEnd/controllerFrontend.php');

if (isset($_GET['action'])) {
    if($_GET['action'] === 'logCust'){// "se connecter"
        elitLogCust();
    }elseif ($_GET['action'] === 'authCust') {//"s'inscrire"
        elitAuthCust();
    }
}else {
    elitLandHome();
}
