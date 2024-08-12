<?php
require('controller/FrontEnd/controllerFrontend.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'logCust') { //"auth cust page"
        elitlogCust();
    } elseif ($_GET['action'] === 'agency') { //"auth Agency"
        elitAgency();
    } elseif ($_GET['action'] === 'logAgency') { //"auth Agency"
        elitlogAgency();
    }
} else {
    elitLandHome();
}
