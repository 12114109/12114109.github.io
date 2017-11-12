
<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require("../db_config.php");
if (isset($_GET["link"]) && isset($_GET["id"])) {

	var_dump($_GET);

$delete = mysqli_real_escape_string($connection,trim($_GET["link"]));
if($delete != "delete")
{
	echo "<script>alert('Greška prilikom brisanja predavanja iz liste');</script>";
	header("Location:index.php?link=lessons");
}
$id = mysqli_real_escape_string($connection,trim($_GET["id"]));

 $delete_query = "DELETE FROM lesson WHERE id_lesson='$id'";
 $result_delete = mysqli_query($connection,$delete_query);

 if(!$result_delete)
 {
   echo "<script>alert('DB error');</script>";
   echo mysqli_error($connection);
  
 }
 else
 {
  header("Location:index.php?link=lessons");
 }

}

?>