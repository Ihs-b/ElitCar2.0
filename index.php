<?php
require('controller/FrontEnd/controllerFrontend.php');

if (isset($_GET['action'])) {
    if($_GET['action'] === 'logCust'){// "log page cust"
        elitLogCust();
    }elseif ($_GET['action'] === 'authCust') {//"auth cust page"
        elitAuthCust();
    }elseif ($_GET['action'] === 'logAgency') {//"log agency pages"
        elitLogAgency();
    }elseif ($_GET['action'] === 'agency') {//"auth Agency"
        elitAgency();
    }elseif ($_GET['action'] === 'authAgency') {//"auth Agency"
        elitAuthAgency();
    }
}else {
    elitLandHome();
}
