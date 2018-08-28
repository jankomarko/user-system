<?php
function login($username,$password){
    echo "wwwwww";
//require_once("connector.php");
    $err = "";
    if (!empty($_POST['username'])) {
        $qusername = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime= :username";
        $clanovi = $pdo->prepare($qusername);
        $clanovi->execute(array(
            ':username' => $username
        ));
        if ($clanovi->rowCount()) {
            // $err .= "Username postoji u bazi, unesite drugi<br>";
        } else $err .= "Username ne postoji u bazi";
    } else $err .= "- Morate popuniti polje Username<br>";

    if (empty($_POST['password'])) {
        $err .= "- Morate popuniti polje Password<br>";
    }
    if ($err <> "") {
        echo $err;
    } else {
        $prijava = ("SELECT * FROM `clanovi` WHERE korisnicko_ime= :username AND sifra=:password");
        $pri = $pdo->prepare($prijava);
        $pri->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
        if ($pri->rowCount() == 1) {
            $qlog = $pri->fetchAll(PDO::FETCH_OBJ);
            foreach ($qlog as $acount) {
                $nalog = $acount->id_clana;
            }
            $_SESSION['id'] = $nalog;
            header("Location:index.php");


        } else echo "Pogresan password";

    }
}
?>