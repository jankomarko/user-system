
<form action="index.php?opcija=register" method="post">
    <div align="center" class="form-group row">
        <label  for="inputUsername" class="col-sm-2 col-form-label">Username:</label>
        <div   class="col-sm-2">
            <input type="text" class="form-control" id="inputUsername" name="username">
        </div>
    </div>
    <div align="center" class="form-group row">
        <label align="center" for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
        </div>
    </div>
    <div align="center" class="form-group row">
        <label align="center" for="inputPassword3" class="col-sm-2 col-form-label">Repassword:</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" id="inputPassword3" name="repassword" placeholder="Password">
        </div>
    </div>
    <div align="center" class="form-group row">
        <label  for="inputUsername" class="col-sm-2 col-form-label">Name:</label>
        <div   class="col-sm-2">
            <input type="text" class="form-control" id="inputUsername" name="name">
        </div>
    </div>
    <div align="center" class="form-group row">
        <label  for="inputUsername" class="col-sm-2 col-form-label">lastname:</label>
        <div   class="col-sm-2">
            <input type="text" class="form-control" id="inputUsername" name="lastname">
        </div>
    </div>




    <div align="center" class="form-group row">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary" name="submit"  >Registruj se</button><br>
        </div>
    </div>
</form>












<?php
if(isset($_POST['submit'])){
    echo"eeeeeeeeeeeee";
    require ('controllers/register.php');
    register($_POST['name'],$_POST['lastname'],$_POST['username'],$_POST['password'],$_POST['repassword'],$pdo);
  //  require_once ("controllers/register.php");

}


?>

  <br>  <h6> Ako imate nalog <a href="index.php?opcija=login"> prijavite se</a><br>

    <hr>































