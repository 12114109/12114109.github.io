<?php
require("../db_config.php");

require("../functions.php");

?>

<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">

    <div class="mx-auto text-center">
    <img src="../img/startit_logo.jpg" class="img-fluid w-50" style="max-height: 600px">
    </div>

      <form class="form-signin" method="POST">
        <br>
        <label for="username" class="sr-only">Korisničko ime</label>
        <input name="username" type="text" id="username" class="form-control" placeholder="Unesite korisničko ime" required autofocus>
        <label for="password" class="sr-only">Šifra</label>
        <input name="password" type="password" id="password" class="form-control" placeholder="Unesite šifru" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ulogujte se</button>
        <button class="btn btn-lg btn-secondary btn-block" type="reset">Resetuj</button>
      </form>

    </div>
    <br>
    <br>
    <br>


<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = mysqli_real_escape_string($connection,trim($_POST["username"]));
    $password = mysqli_real_escape_string($connection,trim($_POST["password"]));
   
   $id_user = check_login_admin($username,$password);

if(is_numeric($id_user))
{
    $_SESSION['id_startit_center'] = $id_user;
    $_SESSION['admin_session'] = $username;
    header("Location:index.php");
    exit();
}
else
    header("Location:index.php?error=nouser");
}


?>