<h1 style="text-align: center"> Pretraga clanova
    <h1>
        <form action="index.php?opcija=views/search" method="post">
            <h6 align="center"> Ime i prezime:
                <h5>
                    <h6 align="center"><input type="text" name="name" value=""></h6>
                    <h6 align="center"> korisnicko ime:
                        <h5>
                            <h6 align="center"><input type="text" name="username" value=""></h6>
                            <h6 align="center"><input type="submit" name="action" value="Pronadji"></h6>
        </form>


<?php
if (isset($_POST['action'])) {

    require ("controllers/users.php");
$result=searchUsers($_POST['name'],$_POST['username']);


    if (!empty($result)) {
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
            echo "<td>" . $row['user_type'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";
    }





};