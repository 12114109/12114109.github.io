<?php
function create_code($length)
{
    $down = 97;
    $up = 122;
    $i = 0;
    $code = "";

    /*
      48-57  = 0 - 9
      65-90  = A - Z
      97-122 = a - z
    */

    $div = mt_rand(3,9);//3

    while($i<$length) // 0-39
    {
        if($i%$div==0)
            $character = strtoupper(chr(mt_rand($down,$up)));
        else
            $character = chr(mt_rand($down,$up)); // mt_rand(97,122) chr(98)
        $code .= $character; // $code = $code.$character; //
        $i++;
    }
    return $code;
}

function check_login_user($username,$type,$password)
{
    $SALT1 = "skjdghjdhskdgsshkgdhkgdkj";
    $SALT2 = "isdjghgsjdk8795njrgh9734h";

    global $connection;
    $password_temp = $SALT1.$password.$SALT2;
    $id_user = false;

    $sql = "SELECT id_$type FROM $type
            WHERE username = '$username' AND password = MD5('$password_temp') AND active=1";


    $result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    if (mysqli_num_rows($result)>0) {
        while($record = mysqli_fetch_array($result,MYSQLI_ASSOC))
            $id_user = $record['id_'.$type];
    }

    return $id_user;
}
