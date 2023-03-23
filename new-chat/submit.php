<?php	
session_start();
$id=$_SESSION['user_id'];
if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
    include('database_connection.php');
    if(isset($_POST['submits'])){
        // Get selected skills
        $selected_skills_ids = $_POST['cname'];
    
        // Convert skills ids string to array
        $selected_skills_arr = explode(', ', $selected_skills_ids);
        // $count = sizeof($selected_skills_arr);
        foreach($selected_skills_arr as $value){ 
            $statement = $conn->prepare("INSERT INTO  private_chat_list (chat_name,users) VALUES (?,?)");
            $statement->execute(array($_SESSION['chat_name'],$value));
        }
        unset($_SESSION["chat_name"]);
        $null=" ";
        $statement = $conn->prepare("DELETE FROM `private_chat_list` WHERE users=?");
        $statement->execute(array($null));
        header("location:profile.php");
        
    }
?>

