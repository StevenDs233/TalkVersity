<?php	
session_start();
$id=$_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
include('database_connection.php');

	$statement = $conn->prepare("INSERT INTO friend_request (request_from,request_to) VALUES (?,?)");
	$statement->execute(array($_SESSION['user_id'],$_REQUEST['id']));
	header("location:profile.php?id=".$_REQUEST['id']);
?>

