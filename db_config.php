<?php
if(defined('SECRET') AND SECRET=='@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!')
{
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DATABASE","usavrsi");

    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    //connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());
    //$connection = mysqli_connect(HOST, USER, PASSWORD);
    //mysqli_select_db($connection,DATABASE);

    /*if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }*/

    mysqli_query($connection,"SET NAMES utf8") or die (mysqli_error($connection));
    mysqli_query($connection,"SET CHARACTER SET utf8") or die (mysqli_error($connection));
    mysqli_query($connection,"SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($connection));

    // http://php.net/manual/en/book.mysqli.php
}