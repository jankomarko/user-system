<?php

if($_POST['username']!=="" && $_POST['password']!=="") {
    $link = mysqli_connect("localhost", "root", "","biblioteka");
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());

    }
    $sql = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime='".$_POST['username']."' and sifra='".$_POST['password']."'";
    ($result = mysqli_query($link, $sql));
    if(mysqli_num_rows($result) > 0){
        echo "uspesno ste se ulogovali" ;
    }
echo "sdgsdgdgfgd";
}
else logovanje.php;



?>