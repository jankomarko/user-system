
<?php
if(isset($_SESSION['id'])) {
 //   header("Location: index.php?opcija=pretraga");


    ?>


    <h1 style="text-align: center"> Pretraga clanova
        <h1>
            <form action="index.php?opcija=pretraga" method="post">
                <h6 align="center"> Ime i prezime:
                    <h5>
                        <h6 align="center"><input type="text" name="ime" value=""></h6>
                        <h6 align="center"> korisnicko ime:
                            <h5>
                                <h6 align="center"><input type="text" name="korisnicko" value=""></h6>
                                <h6 align="center"><input type="submit" name="action" value="Pronadji"></h6>
            </form>


    <?php
    if(isset($_POST['action'])) {

        require_once("clanovi.php");
    }
} else header("Location: index.php");