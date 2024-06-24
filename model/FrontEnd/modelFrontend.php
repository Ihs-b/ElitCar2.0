<?php

function dbConnect(){
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = new PDO('mysql:host'.$servername.';dbname=elitcar2.0;charset=utf8',$username, $password);

        return $db;
    } catch (Exception $e) {
        die('Erreur :'.$e->getMessage());
    }
}

function authCustommer(){

}
function authAgency(){

}

