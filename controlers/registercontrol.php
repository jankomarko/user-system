
<?php
//require_once("connector.php");
$err = "";
if (isset($_POST['submit'])) {
    if (!empty($_POST['username'])) {
        $qusername = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime= :username";
        $clanovi = $pdo->prepare($qusername);
        $clanovi->execute(array(
            ':username' => $_POST['username']
        ));
        if ($clanovi->rowCount()) {
            $err .= "Username postoji u bazi, unesite drugi<br>";
        }
    } else $err .= "- Morate popuniti polje Username<br>";

    if (!empty($_POST['password'])) {
    } else $err .= "- Morate popuniti polje Password<br>";

    if (!empty($_POST['repassword'])) {
        if ($_POST['repassword'] == $_POST['password']) {

        } else $err .= "Vase lozinke se ne podudaraju<br>";

    } else $err .= "- Morate popuniti polje Repassword<br>";
    if (!empty($_POST['name'])) {
    } else $err .= "- Morate popuniti polje Name<br>";
    if (!empty($_POST['lastname'])) {
    } else $err .= "- Morate popuniti polje Lastname<br>";


    if ($err <> "") {
        echo $err;
    } else {
        $dodaj = ("INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`)   VALUES (:ime, :pre, :koo, :sif)");
        $d = $pdo->prepare($dodaj);
        $d->execute(array(
            ':koo' => $_POST['username'],
            ':ime' => $_POST['name'],
            ':pre' => $_POST['lastname'],
            ':sif' => $_POST['password']
        ));


        echo "Uspesno ste re registrovali!<br>";
    }

}


?>