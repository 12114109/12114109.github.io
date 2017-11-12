<?php
define("SECRET","@7sfekjsdngjkfshsgj#GFJHddsgjfshjkfhjk!");
require("admin_header.php");


if(isset($_SESSION['admin_session']))
{

    $link = "";
if(isset($_GET['link']))
    $link = $_GET['link'];
switch ($link) {
    case "lessons":
        require("lessons.php");
        break;
    case 'companies':
    	require("company.php");
    	break;
    case 'instructor':
    	require("instructor.php");
    	break;
    default:
         require("admin_main.php");
        break;
}

}
else
{
    require("admin_login.php");
}


require("admin_footer.php");
?>