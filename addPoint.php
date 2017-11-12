<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require ("db_config.php");

if(isset($_GET['id']) && isset($_GET['userId'])) {
    $id = $_GET['id'];
    $userId = $_GET['userId'];
}

$sql = "UPDATE attendance SET points=points+1
        where attendant_id='$userId' and lesson_id='$id'";

$result = mysqli_query($connection,$sql) or die(mysqli_error($connection));

header("Location: index.php?link=lesson&id=$id");