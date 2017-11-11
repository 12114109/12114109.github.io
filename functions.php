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
