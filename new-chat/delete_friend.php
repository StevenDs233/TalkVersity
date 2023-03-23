<?php	
session_start();
$id=$_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
    include('database_connection.php');

	$statement = $conn->prepare("DELETE FROM friendlist WHERE (friend1=? AND friend2=?) OR (friend1=? AND friend2=?)");
	$statement->execute(array($_SESSION['user_id'],$_REQUEST['friend'],$_REQUEST['friend'],$_SESSION['user_id']));
	header("location:friendlist.php");
?>

