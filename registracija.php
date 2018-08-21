<!DOCTYPE html>
<html lang="en">
<head>
    <title>Prijava</title>
</head>
<body>
<h1 style="text-align: center"> Registracija<h1> <br>
        <form action="" method="post">
            <h6 align="center"> Ime: <input type="text" name="ime" value=""><h5>
                    <h6 align="center"> Prezime: <input type="text" name="prezime" value=""><h5>
                            <h6 align="center"> Korisnicko ime: <input type="text" name="korisnicko" value=""><h5>
                                    <h6 align="center"> Sifra: <input type="text" name="sifra" value=""><h5>
                                            <h6 align="center"> Provera sifre : <input type="text" name="proverasifra" value=""><h5>
                                        <h6 align="center"> <input type="submit" name="action" value="Registruj se"></h6>
        </form>
        <h3 style="text-align: center"> Ako imate nalog <a href="logovanje.php"> prijavite se</a>

        <?php
        $link = mysqli_connect("localhost", "root", "","biblioteka");
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());

        }

        if($_POST['ime']!=="" && $_POST['prezime']!==""&&$_POST['korisnicko']!=="" && $_POST['sifra']!==""&& $POST['proverasifra']!=="") {
            $sql = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime='".$_POST['korisnicko']."'";
            ($result = mysqli_query($link, $sql));
        if(mysqli_num_rows($result) == 0){
            if($_POST['proverasifra']== $_POST['sifra']){
                echo "dddddd";
                $sql="INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`) VALUES ('".$_POST['ime']."','".$_POST['preime']."','".$_POST['korisnicko']."','".$_POST['sifra']."')";

                if(mysqli_query($link, $sql)){
                    echo "Uspesno ste se registrovali";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            }


        }else echo "fffffffff";

        }






        ?>

</body>
</html>