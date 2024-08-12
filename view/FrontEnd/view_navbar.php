<?php
ob_start();
?>
<header>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggler" data-toggle="open-navbar1"></button>
                <a href="index.php">
                    <h4>Elit<span>Car</span></h4>
                </a>
            </div>
            <div class="navbar-menu" id="open-navbar1">
                <ul class="navbar-nav">
                    <!-- <li class="active"><a href="#">Se connecter</a></li> -->
                    <li class="navbar-dropdown">
                        <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">Se connecter <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown" id="my-dropdown-id">
                            <li><a href="index.php?action=logAdmin">Admin</a></li>
                            <li class="separator"></li>
                            <li><a href="index.php?action=logAgency">Professionnel</a></li>
                            <li class="separator"></li>
                            <li><a href="index.php?action=logCust">particulier</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?action=agency">Agences</a></li>
                    <li><a href="index.php?action=faq">F&Q</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<?php
$nav = ob_get_clean();
?>