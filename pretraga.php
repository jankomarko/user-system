<?php
session_start();
if(isset($_SESSION['username1'])){

}else header("Location:logovanje.php") ;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>welcome</title>
</head>
<body>
<h4 align="right"> <?php echo $_SESSION['username1']; ?>   </h4>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Meni</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="pretraga.php">Pretraga</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="pocetna.php">Pocetna</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="logout.php">Odjava</a>

            </li>
        </ul>
    </div>
</nav>
















        <h1 style="text-align: center"> Pretraga clanova<h1>
                <form action="clanovi.php" method="post">
                    <h6 align="center"> Ime i prezime:<h5>
                            <h6 align="center"> <input type="text" name="ime" value=""></h6>
                            <h6 align="center"> korisnicko ime:<h5>
                                    <h6 align="center">  <input type="text" name="korisnicko" value=""></h6>
                                    <h6 align="center"> <input type="submit" name="action" value="Pronadji"></h6>
                </form>




            <?php






                        ?>


</body>
