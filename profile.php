<?php
$type=$_SESSION['type'];
$username=$_SESSION['username'];

switch ($type){
    case "attendant":
        include ('attendant.php');
}
