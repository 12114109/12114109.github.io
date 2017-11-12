
<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require("../db_config.php");
if (isset($_GET["link"]) && isset($_GET["id"])) {

	var_dump($_GET);

$delete = mysqli_real_escape_string($connection,trim($_GET["link"]));
if($delete != "delete")
{
	echo "<script>alert('Greška prilikom brisanja kompanije iz liste');</script>";
	header("Location:index.php?link=companies");
  	

}
$id = mysqli_real_escape_string($connection,trim($_GET["id"]));

 $delete_query = "DELETE FROM company WHERE id_company='$id'";
 $result_delete = mysqli_query($connection,$delete_query);

 if(!$result_delete)
 {
   echo "<script>alert('DB error');</script>";
   header("Location:index.php?link=companies");
  
 }
 else
 {
  header("Location:index.php?link=companies");
 }

}

?>