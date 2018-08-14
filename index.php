<?php

 session_start();
error_reporting(false);
if(isset($_SESSION['logindtl']['id']))
	$usersessionid=$_SESSION['logindtl']['id'];

 ?>
<?php

//include_once("connection.php");
include_once('header.php');
$mod="home";
$do="home";
if(isset($_GET['mod']))
{
$mod=$_GET['mod'];
$do=$_GET['do'];
}
include("module/$mod/$do.php");
//if(isset($_GET['mod']) && $_GET['do']!='dpp'){
  include_once('right.php');
//}

include_once('footer.php');
?>
