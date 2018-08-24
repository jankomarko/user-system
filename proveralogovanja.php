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








/*if($_POST['username']!=="" && $_POST['password']!=="") {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=biblioteka", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        $stmt = $pdo->prepare("SELECT korisnicko_ime FROM `clanovi` WHERE korisnicko_ime=':ko' and sifra=':si'");


        $stmt->bindParam(':ko', $_POST['username']);
        $stmt->bindParam(':si', $_POST['password']);

        $stmt->execute();
      //  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
       // $result = $stmt->fetchAll();
        echo "1111";
      //  foreach ($result as $e){
       //     echo "$e";
       //     echo "rrrrrrrrrrrrrrrrrrrrr";
      //  }

        if(!empty(2>1)) {
            echo"toooooooooooo";
            print_r($result);


        }else echo "neeeeeeeeeeee";







    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }




}

*/

?>