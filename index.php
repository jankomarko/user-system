<?php


session_start();

if (isset($_SESSION['id'])) {
    ?>
    <a href="index.php">POCETNA</a>
    <a href="index.php?opcija=pretraga">PRETRAGA CLANOVA</a>
    <a href="index.php?opcija=logout">ODJAVA</a>
    <hr>
    <br>  <h4> <?php echo $_SESSION['id']; ?>   </h4>

    <?php
    if (isset($_GET['opcija'])) {
        $fajl = $_GET['opcija'] . ".php";
        if (file_exists($fajl)) {
            include_once($fajl);
        } else {

            echo "trazena stranica ne postoji vratite se <a href='index.php'>POCETNU STRANICU</a>";
        }


    } else {
        echo "POCETNA STRANICA";

    }


} else {
    ?>
    <a href="index.php">POCETNA</a>
    <a href="index.php?opcija=registracija">REGISTRACIJA</a>
    <a href="index.php?opcija=logovanje">PRIJAVA</a>
    <hr>

<?php
    if(isset($_GET['opcija'])) {
        $fajl = $_GET['opcija'] . ".php";
        if (file_exists($fajl)) {
            include_once($fajl);
        } else {

            echo "trazena stranica ne postoji vratite se <a href='index.php'>POCETNU STRANICU</a>";
        }


    }else{
        echo "POCETNA STRANICA";
include_once ('logovanje.php');
include_once ('registracija.php');
    }

}
            
            
            
