<?php

session_destroy();
    header("Location:index.php");
    echo $_SESSION['id'];
?>