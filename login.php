<?php
session_start();
require("db_config.php");
require("functions.php");

$username = '';
$password = '';

if(isset($_POST['username']))
    $username = mysqli_real_escape_string($connection,trim($_POST["username"]));

if(isset($_POST['password']))
    $password = mysqli_real_escape_string($connection,trim($_POST["password"]));

if(isset($_POST['type']))
    $type = mysqli_real_escape_string($connection,trim($_POST["type"]));

$id_user = check_login_user($username,$password);

if(is_numeric($id_user))
{
    $_SESSION['id_user'] = $id_user;
    $_SESSION['username'] = $username;
    $_SESSION['type'] = $type;
    header("Location:index.php");
    exit();
}
else
    header("Location:index.php?error=nouser");
?>