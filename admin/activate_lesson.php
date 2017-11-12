
<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require("../db_config.php");
if (isset($_GET["link"]) && isset($_GET["id"])) {

$activate = mysqli_real_escape_string($connection,trim($_GET["link"]));

if($activate != "activate")
{
  echo "error";
  
}
$id = mysqli_real_escape_string($connection,trim($_GET["id"]));

 $active_query = "UPDATE lesson SET active = '1'  WHERE id_lesson='$id'";
 $result_active = mysqli_query($connection,$active_query);

 if(!$result_active)
 {
   echo "Error";
   
  
 }
 else
 {
  header("Location:index.php?link=lessons");
 }

}

?>