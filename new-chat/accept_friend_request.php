<?php	
session_start();
$id=$_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
include('database_connection.php');

	$statement = $conn->prepare("INSERT INTO friendlist (friend1,friend2) VALUES (?,?)");
	$statement->execute(array($_SESSION['user_id'],$_REQUEST['friend']));
	$statement = $conn->prepare("DELETE FROM friend_request WHERE request_from=? AND request_to=?");
	$statement->execute(array($_REQUEST['friend'],$_SESSION['user_id']));
	header("location:friend_request.php");
?>

