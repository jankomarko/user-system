<?php

require_once("config/database.php");

require_once("views/layaut/header.php");
require ("views/meni.php");
require("controllers/connector.php");
conection();

session_start();

if (isset($_SESSION['id'])) {
    menilogin();
     echo $_SESSION['id'];
  echo "<br>";

    if (isset($_GET['opcija'])) {
        $fajl = $_GET['opcija'] . ".php"; //var_dump($_POST); die();
        if (empty($_POST)) {

           $fajl = 'views/' . $fajl;

        } else {


            $fajl = 'controllers/' . $fajl;
        }
        if (file_exists($fajl)) {

            include_once($fajl);
        } else {

            echo "trazena stranica ne postoji vratite se <a href='index.php'>POCETNU STRANICU</a>";
        }


    } else {
        echo "POCETNA STRANICA";

    }


} else {
    menilogout();

    if (isset($_GET['opcija'])) {
        $fajl = $_GET['opcija'] . ".php";
        if (empty($_POST)) {
            $fajl = 'views/' . $fajl;
        } else {
            echo "eeeeee";
            $fajl = 'controllers/' . $fajl;
            echo $fajl;
        }
        if (file_exists($fajl)) {

            include_once($fajl);
        } else {

            echo "trazena stranica ne postoji vratite se <a href='index.php'>POCETNU STRANICU</a>";
        }


    } else {
        echo "POCETNA STRANICA";
        include_once('views/login.php');
        include_once('views/register.php');
    }

}


require_once("views/layaut/foother.php");
