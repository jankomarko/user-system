<?php

register($_POST['name'], $_POST['lastname'], $_POST['username'], $_POST['password'], $_POST['repassword'], $pdo);

function register($name, $lastname, $username, $password, $repassword, $pdo)
{

    $err = "";
    if (!empty($username)) {
        $qusername = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime= :username";
        $clanovi = $pdo->prepare($qusername);
        $clanovi->execute(array(
            ':username' => $username
        ));
        if ($clanovi->rowCount()) {
            $err .= "Username postoji u bazi, unesite drugi<br>";
        }
    } else $err .= "- Morate popuniti polje Username<br>";

    if (empty($password)) {
        $err .= "- Morate popuniti polje Password<br>";
    }
    if (!empty($repassword)) {
        if ($repassword == $password) {

        } else $err .= "Vase lozinke se ne podudaraju<br>";

    } else $err .= "- Morate popuniti polje Repassword<br>";

    if (empty($name)) {
        $err .= "- Morate popuniti polje Name<br>";
    }
    if (empty($lastname)) $err .= "- Morate popuniti polje Lastname<br>";


    if ($err == "") {
        $dodaj = ("INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`)   VALUES (:ime, :pre, :koo, :sif)");
        $d = $pdo->prepare($dodaj);
        $d->execute(array(
            ':koo' => $username,
            ':ime' => $name,
            ':pre' => $lastname,
            ':sif' => md5($password)
        ));


        echo "Uspesno ste re registrovali!<br>";
    } else {
        $_SESSION['error_mesage'] = $err;
        require_once('views/errorpage.php');

    }

}

