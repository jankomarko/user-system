<?php

try{
$pdo = new PDO("mysql:host=localhost;dbname=biblioteka", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }


$stmt = $pdo->prepare("INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`)   VALUES (:im, :pr, :ko, :si)");
$ivan="nikola";
$pre="ivanovic";
$kor="ivke";
$sif="1111";
$stmt->bindParam(':im', $ivan);
$stmt->bindParam(':pr', $pre);
$stmt->bindParam(':ko', $kor);
$stmt->bindParam(':si', $sif);

$stmt->execute();