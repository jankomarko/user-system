
<form method="POST" action="index.php?opcija=views/register">

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
<?php
if(isset($_POST['submit'])){
    require_once ("controlers/registercontrol.php");
}


?>

  <br>  <h6> Ako imate nalog <a href="index.php?opcija=views/login"> prijavite se</a><br>

































