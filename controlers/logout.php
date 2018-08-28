<?php
echo "dfdddd";
session_destroy();
if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
}else header("Location:index.php") ;
?>