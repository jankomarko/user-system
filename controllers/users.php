<?php
function searchUsers($name,$username)
{
    global $pdo;




/*
    //$link = mysqli_connect("localhost", "root", "", "biblioteka");
    $pdo1 = "SELECT * FROM clanovi where CONCAT(ime, ' ', prezime) like :na%";
    $pdo2 = "SELECT * FROM clanovi where prezime like :na%";
    $pdo3 = "SELECT * FROM clanovi";
    $pdo4 = "SELECT * FROM clanovi where korisnicko_ime like :username";
*/

    if ($name !== "" || $username !== "") {
        if ($name !== "") {
            $search = "SELECT id_clana, ime, prezime, korisnicko_ime,user_type FROM clanovi where CONCAT(ime, ' ', prezime) like :na";
            $pri = $pdo->prepare($search);
            $pri->execute(array(
                ':na' => $name."%"
            ));
            if ($pri->rowCount() == 0) {
                $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`  FROM clanovi where prezime like :na";
                $pri = $pdo->prepare($search);
                $pri->execute(array(
                    ':na' => $name."%"
                ));
            }
        } else {
            $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`  FROM clanovi where korisnicko_ime like :username";
            $pri = $pdo->prepare($search);
            $pri->execute(array(
                ':username' => $username."%"
            ));
        }
    } else {
        $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`  FROM clanovi";
        $pri = $pdo->prepare($search);
        $pri->execute(array(
            ':na' => $name,
            ':username' => $username
        ));
    }

    if ($pri->rowCount() > 0) {

        $result = $pri->fetchAll(PDO::FETCH_OBJ);
        print_r($result);
        return $result;
    } else $_SESSION['greska'] .= "nema";








}

?>






















