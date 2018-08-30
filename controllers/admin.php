<?php

if($_POST['id']!=$_SESSION['id']) {
    if ($_POST['submit'] == "unlock") {
        $edit = ("UPDATE `clanovi` SET `access`='lock' WHERE id_clana=:id");
    } else  $edit = ("UPDATE `clanovi` SET `access`='unlock' WHERE id_clana=:id");

    $pri = $pdo->prepare($edit);
    $pri->execute(array(
        ':id' => $_POST['id'],
    ));
}else echo "ne mozete sami sebi promeniti pristup";