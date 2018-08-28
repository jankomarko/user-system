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



//($result = mysqli_query($link, $sql1));
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Ime</th>";
    echo "<th>Prezime</th>";
    echo "<th>Korisnicko ime</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($result)) {
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
} else {
    echo "No records matching your query were found.";
}


?>