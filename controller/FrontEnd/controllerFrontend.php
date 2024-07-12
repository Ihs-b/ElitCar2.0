<?php
require('././model/FrontEnd/modelFrontend.php');
function elitLandHome()
{
    require('././view/FrontEnd/view_navbar.php');
    require('././view/FrontEnd/view_home.php');
    require('././view/FrontEnd/view_footer.php');
}

function elitAuthCust(){
    require('././view/FrontEnd/view_auth_cust.php');
}
function elitLogCust(){
    require('././view/FrontEnd/view_log_cust.php');
}
function elitAgency()
{
    require('././view/FrontEnd/view_navbar.php');
    require('././view/FrontEnd/view_footer.php');
    require('././view/FrontEnd/view_FAQ.php');
    require('././view/FrontEnd/view_agency.php');
}
function elitLogAgency(){
    require('././view/FrontEnd/view_log_agency.php');
}
function elitAuthAgency()
{
    require('././view/FrontEnd/view_auth_agency.php');
}