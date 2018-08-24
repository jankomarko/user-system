<?php
session_start();
if(isset($_SESSION['username1'])){

}else header("Location:logovanje.php") ;
?>
    <h4 align="right"> <?php echo $_SESSION['username1']; ?>   </h4>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Meni</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="pretraga.php">Pretraga</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="pocetna.php">Pocetna</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="logout.php">Odjava</a>
            </li>
        </ul>
    </div>
</nav>
<?php

$link = mysqli_connect("localhost", "root", "","biblioteka");
$sql = "SELECT * FROM clanovi where CONCAT(ime, ' ', prezime) like '".$_POST['ime']. "%'";
$sql2= "SELECT * FROM clanovi where prezime like '".$_POST['ime']. "%'";
$sql3= "SELECT * FROM clanovi";
$sql4= "SELECT * FROM clanovi where korisnicko_ime='".$_POST['korisnicko']."'";



if($_POST['ime']!==""||$_POST['korisnicko']!==""){
    if($_POST['ime']!==""){
        ($result = mysqli_query($link, $sql));
        if(mysqli_num_rows($result) == 0){
                ($result = mysqli_query($link, $sql2));
                if(mysqli_num_rows($result) == 0){
                    ($result = mysqli_query($link, $sql4));
                }

        }

    }else ($result = mysqli_query($link, $sql4));



}else{
    $result = mysqli_query($link, $sql3);
}


//($result = mysqli_query($link, $sql1));
if(mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "<th>Korisnicko ime</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['id_clana'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['prezime'] . "</td>";
        echo "<td>" . $row['korisnicko_ime'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // Free result set
    mysqli_free_result($result);
} else{
    echo "No records matching your query were found.";
}














?>