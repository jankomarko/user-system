<?php
//echo $_SESSION['adm'];

if($_SESSION['adm']=="Admin"){
  //  require searchUsers("marko","");
//require ("controllers/search.php");
    ?>   <table class="table table-sm table-dark"
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Lastname</th>
        <th scope="col">Username</th>
        <th scope="col">User type</th>
        <th scope="col">Access</th>
    </tr>
    </thead>
    <?php
    foreach ($result as $acount) {

        ?> <form action="index.php?opcija=admin" method="post">

            <input type="hidden" name="id"class="table" value=" <?php echo $acount->id_clana ?>">
            <tr>
                <td><?=  $acount->id_clana?></td>
                <td><?php echo  $acount->ime?></td>
                <td><?php echo $acount->prezime?></td>
                <td><?php echo $acount->korisnicko_ime?></td>
                <td><?php echo $acount->user_type?></td>
                <td> <input type="submit" name="submit" class="btn btn-link" value="<?php echo $acount->access?>"></td>
        </form>
        </tr>


        <?php
    }
    ?>
    </table>
    <?php
}else header("Location:index.php");