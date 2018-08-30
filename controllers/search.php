<?php

$result = (searchUsers(isset($_POST['name']) ? $_POST['name'] : '', $_POST['username'] ?? ''));

if ($_SESSION['adm']!="Admin") {
    require_once "views/search.php";
}else require "views/admin/users.php";

function searchUsers($name, $username)
{
    global $pdo;
    if ($name !== "" || $username !== "") {
        if ($name !== "") {
            $search = "SELECT id_clana, ime, prezime, korisnicko_ime,user_type,access FROM clanovi where CONCAT(ime, ' ', prezime) like :na";
            $pri = $pdo->prepare($search);
            $pri->execute(array(
                ':na' => $name . "%"
            ));
            if ($pri->rowCount() == 0) {
                $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`,access  FROM clanovi where prezime like :na";
                $pri = $pdo->prepare($search);
                $pri->execute(array(
                    ':na' => $name . "%"
                ));
            }
        } else {
            $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`,access FROM clanovi where korisnicko_ime like :username";
            $pri = $pdo->prepare($search);
            $pri->execute(array(
                ':username' => $username . "%"
            ));
        }
    } else {
        $search = "SELECT `id_clana`, `ime`, `prezime`, `korisnicko_ime`,`user_type`,access  FROM clanovi";
        $pri = $pdo->prepare($search);
        $pri->execute(array(
            ':na' => $name,
            ':username' => $username
        ));
    }

    if ($pri->rowCount() > 0) {

        $result = $pri->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }


}

?>






















