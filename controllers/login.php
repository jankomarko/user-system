<?php

login($_POST['username'],$_POST['password']);

function login($username, $password){
    global $pdo;
    $_SESSION['error_mesage']="";
    $err = "";
    if (!empty($username) && !empty($password)) {
        $prijava = ("SELECT * FROM `clanovi` WHERE korisnicko_ime= :username AND sifra=:password");
        $pri = $pdo->prepare($prijava);
        $pri->execute(array(
            ':username' => $username,
            ':password' =>md5($password)
        ));
        if ($pri->rowCount() == 1) {
            $qlog = $pri->fetchAll(PDO::FETCH_OBJ);
            foreach ($qlog as $acount) {
                $nalog = $acount->id_clana;
                $adm= $acount->user_type;
                $access= $acount->access;
            }

            if($access=="unlock") {
                $_SESSION['id'] = $nalog;
                $_SESSION['adm'] = $adm;
                header("Location:index.php");

            }else $_SESSION['error_mesage'].="Pristup odbijen";
        } else $_SESSION['error_mesage'] .= "Pogresni podaci";


    } else $_SESSION['error_mesage'].= "Morate popuniti sva polja";
if($_SESSION['error_mesage']!==""){
  //  header("Location:index.php?views/login");
    require_once('views/errorpage.php');
}

}