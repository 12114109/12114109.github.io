<?php
session_start();
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require "db_config.php";
if(isset($_POST['title']) && isset($_POST['date']) && isset($_POST['time'])
    && isset($_POST['topic']) && isset($_POST['description']) && isset($_POST['type'])) {

    $id = '';

    if(isset($_SESSION['id_user'])){
        $id = $_SESSION['id_user'];
    }

    $title = mysqli_real_escape_string($connection, trim($_POST['title']));
    $date = mysqli_real_escape_string($connection, trim($_POST['date']));
    $time = mysqli_real_escape_string($connection, trim($_POST['time']));
    $topic = mysqli_real_escape_string($connection, trim($_POST['topic']));
    $description = mysqli_real_escape_string($connection, trim($_POST['description']));
    $type = mysqli_real_escape_string($connection, trim($_POST['type']));

    $datetime = $date.' '.$time;

    $code = rand(1000, 9999);

    $sql = "INSERT INTO lesson(title, time, description, active, instructor_id, topic_id, startit_center_Id, type, code)
            VALUES ('$title', '$datetime', '$description', 0, '$id', '$topic', 1, '$type', '$code')";

    $res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    header("Location: index.php?link=profile&success=1");
}