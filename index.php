
<?php require("header.php"); ?>


<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
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

