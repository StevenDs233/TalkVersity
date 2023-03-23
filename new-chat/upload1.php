<?php
session_start();
include('database_connection.php');

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
$id=$_SESSION['user_id'];
if(!empty($_FILES))
{
	if(is_uploaded_file($_FILES['myfile']['tmp_name']))
	{
		$ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
		$allow_ext = array('jpg', 'png', 'doc', 'pdf', 'zip', 'zip');
		if(in_array($ext, $allow_ext))
		{
			$_source_path = $_FILES['myfile']['tmp_name'];
			$target_path = 'upload/' . $_FILES['myfile']['name'];
			if(move_uploaded_file($_source_path, $target_path))
			{
				$statement = $connect->prepare("UPDATE `tbl_user` SET image=? WHERE id=?");
                $statement->execute(array($target_path,$id));
				
			}
		}
	}
}

?>