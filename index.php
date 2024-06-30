<?php
require('controller/FrontEnd/controllerFrontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'auth') {
        elitAuth();
    }elseif($_GET['action'] === 'register'){
        elitRegister();
    }
    
    
    
    
    
    
    
    elseif ($_GET['action'] === 'LogIn') { // urls wich shows users wants to login
        elitLogIn();
    }elseif ($_GET['action']==='LogCust') {
        elitLogCust();
    }elseif ($_GET['action']==='LogAgency'){
        elitLogAgency();
    }
} else {
    elitLandHome();
}
