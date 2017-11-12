<?php
$type=$_SESSION['type'];
$username=$_SESSION['username'];

switch ($type){
    case "attendant":
        include ('attendant.php');
        break;
    case "instructor":
        include ('instructor.php');
        break;
}
