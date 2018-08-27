<?php
session_destroy();
if(isset($_SESSION['username1'])){
    echo $_SESSION['username1'];
}else header("Location:index.php") ;
?>