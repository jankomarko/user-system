<?php
require_once ("konektor.php");
$err="";
if (!empty($_POST['username'])) {
    $qusername = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime= :username";
    $clanovi= $pdo->prepare($qusername);
    $clanovi->execute(array(
        ':username'=>$_POST['username']
    ));
    if($clanovi->rowCount()) {
        // $err .= "Username postoji u bazi, unesite drugi<br>";
    }else $err .="Username ne postoji u bazi";
} else $err .= "- Morate popuniti polje Username<br>";

if (!empty($_POST['password'])) {
} else $err .= "- Morate popuniti polje Password<br>";

if($err<>""){
    echo $err;
} else{
    $prijava =("SELECT * FROM `clanovi` WHERE korisnicko_ime= :username AND sifra=:si");
    $pri= $pdo->prepare($prijava);
    $pri->execute(array(
        ':username'=>$_POST['username'],
        ':si'=>$_POST['password']
    ));
    if($pri->rowCount()==1){
        $qlog=$pri->fetchAll(PDO::FETCH_OBJ);
        foreach ($qlog as $acount){
            $NALOG= $acount->id_clana;
        }
        $_SESSION['id']= $NALOG;
        header("Location:index.php");


    }else echo"Pogresan password";

}

?>