<?php 
include"connection.php";
/*if (!isset($_SESSION['username'])) {
 header("location:/index.php");
}*/
if (isset($_GET['userid'])) {
	$sql = $connection->query("DELETE FROM users WHERE userid = '$_GET[userid]'");


	if($sql){
		header("location:registerret.php");
	}else{
		echo"not deleted".mysqli_error($connection);
	}
}
 ?>