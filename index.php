
<?php require("header.php"); ?>
<?php
$link = "";
if(isset($_GET['link']))
    $link = $_GET['link'];
switch ($link) {
    case "lessions":
        $page_title="Svi kursevi";
        break;
    default:
        $page_title="Početna";
        break;
}
?>

<?php

$link = "";
if(isset($_GET['link']))
    $link = $_GET['link'];
switch ($link) {
case "lessions":
  require("lessions.php");
  break;
default:
  require("main.php");
  break;
}

?>
    <?php require("footer.php"); ?>

