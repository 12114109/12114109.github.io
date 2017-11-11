<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require("db_config.php");
global $connection;
$code = "";
$a = "";

if(isset($_GET['code']))
    $code = mysqli_real_escape_string($connection,$_GET['code']);

if(!empty($code) AND strlen($code)==40)
{
    $sql = "UPDATE attendant SET active='1'
            WHERE  code = '$code'";


    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if(mysqli_affected_rows($connection)>0)
        $a = "?a=1";
}

header("Location:index.php$a");
exit();
?>