
    <?php ?>
<?php
require_once ("konektor.php");
$err="";
if(isset($_POST['submit'])){
   if(!empty($_POST['username'])){
       $qusername = "SELECT `korisnicko_ime` FROM `clanovi` WHERE korisnicko_ime= :username";
$clanovi= $pdo -> prepare($qusername);
$clanovi->execute(array(
        ':username'=>$_POST['username']
));
if($clanovi->rowCount()){
$err.="Username postoji u bazi, unesite drugi<br>";
}
   }else $err.= "- Morate popuniti polje Username<br>";

    if(!empty($_POST['password'])){
    }else $err.= "- Morate popuniti polje Password<br>";

    if(!empty($_POST['repassword'])){
        if($_POST['repassword']==$_POST['password']){

        }else $err .="Vase lozinke se ne podudaraju<br>";

    }else $err.= "- Morate popuniti polje Repassword<br>";
    if(!empty($_POST['name'])){
    }else $err.= "- Morate popuniti polje Name<br>";
    if(!empty($_POST['lastname'])){
    }else $err.= "- Morate popuniti polje Lastname<br>";


   if($err<>""){
       echo $err;
   } else{
       $dodaj = ("INSERT INTO `clanovi`(`ime`, `prezime`, `korisnicko_ime`, `sifra`)   VALUES (:ime, :pre, :koo, :sif)");
        $d= $pdo ->prepare($dodaj);
$d->execute(array(
    ':koo'=>$_POST['username'],
    ':ime'=>$_POST['name'],
    ':pre'=>$_POST['lastname'],
    ':sif'=>$_POST['password']
));


       echo "Uspesno ste re registrovali!<br>";
   }

}


?>
<form method="POST" action="index.php?opcija=registracija">

   <table>
<tr>
    <td>
        Username
    </td>
    <td>
        <input type="text" name="username">
    </td>
</tr>
       <tr>
           <td>
               Password
           </td>
           <td>
               <input type="password" name="password">
           </td>
       </tr>
       </tr>
       <tr>
           <td>
               Repassword
           </td>
           <td>
               <input type="password" name="repassword">
           </td>
       </tr>
       <tr>
           <td>
               Name
           </td>
           <td>
               <input type="text" name="name">
           </td>
       </tr>
       <tr>
           <td>
               Lastname
           </td>
           <td>
               <input type="text" name="lastname">
           </td>
       </tr>
       <tr>

           <td colspan="2">
               <input type="submit" name="submit" value="Registruj se">
           </td>
       </tr>
   </table>
</form>
<h4> Ako imate nalog <a href="logovanje.php"> prijavite se</a>








































