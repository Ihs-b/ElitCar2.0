<?php
require('controller/FrontEnd/controllerFrontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'auth') {
        elitAuth();
    }
} else {
    elitLandHome();
}
