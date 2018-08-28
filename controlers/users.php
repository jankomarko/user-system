<?php
$link = mysqli_connect("localhost", "root", "", "biblioteka");
$sql = "SELECT * FROM clanovi where CONCAT(ime, ' ', prezime) like '" . $_POST['name'] . "%'";
$sql2 = "SELECT * FROM clanovi where prezime like '" . $_POST['name'] . "%'";
$sql3 = "SELECT * FROM clanovi";
$sql4 = "SELECT * FROM clanovi where korisnicko_ime like '" . $_POST['username'] . "%'";


if ($_POST['name'] !== "" || $_POST['username'] !== "") {
    if ($_POST['name'] !== "") {
        ($result = mysqli_query($link, $sql));
        if (mysqli_num_rows($result) == 0) {
            ($result = mysqli_query($link, $sql2));
            if (mysqli_num_rows($result) == 0) {
                ($result = mysqli_query($link, $sql4));
            }

        }

    } else ($result = mysqli_query($link, $sql4));


} else {
   $result = mysqli_query($link, $sql3);
}


?>






















