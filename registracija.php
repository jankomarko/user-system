<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Meni</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Pocetna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logovanje.php">Prjava</a>
            </li>
        </ul>
    </div>
</nav>







<h1 style="text-align: center"> Registracija
    <h1><br>
        <form action="" method="post">
            <h6 align="center"> Ime: <input type="text" name="ime" value="">
                <h5>
                    <h6 align="center"> Prezime: <input type="text" name="prezime" value="">
                        <h5>
                            <h6 align="center"> Korisnicko ime: <input type="text" name="korisnicko" value="">
                                <h5>
                                    <h6 align="center"> Sifra: <input type="password" name="sifra" value="">
                                        <h5>
                                            <h6 align="center"> Provera sifre : <input type="password"
                                                                                       name="proverasifra" value="">
                                                <h5>
                                                    <h6 align="center"><input type="submit" name="action"
                                                                              value="Registruj se"></h6>
        </form>
        <h3 style="text-align: center"> Ako imate nalog <a href="logovanje.php"> prijavite se</a><br>

            <?php

            if(isset($_POST['action'])) {
                $link = mysqli_connect("localhost", "root", "", "biblioteka");
                if ($link === false) {
                    die("ERROR: Could not connect. " . mysqli_connect_error());

                }

                if ($_POST['ime'] !== "" && $_POST['prezime'] !== "" && $_POST['korisnicko'] !== "" && $_POST['sifra'] !== "" && $_POST['proverasifra'] !== "") {
                    $sql = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime='" . $_POST['korisnicko'] . "'";
                    ($result = mysqli_query($link, $sql));
                    if (mysqli_num_rows($result) == 0) {
                        if ($_POST['proverasifra'] == $_POST['sifra']) {

                            $sql = "INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`) VALUES ('" . $_POST['ime'] . "','" . $_POST['prezime'] . "','" . $_POST['korisnicko'] . "','" . $_POST['sifra'] . "')";

                            if (mysqli_query($link, $sql)) {
                                echo "Uspesno ste se registrovali";
                            } else {
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        }


                    }

                }else  echo "Morate popuniti sva polja";

            }
            ?>

</body>
</html>