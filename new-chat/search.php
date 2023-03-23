<?php	
session_start();

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
$id=$_SESSION['user_id'];

//database configuration
    $dbHost = 'localhost';
    $dbUsername = 'muktadiranzan_client';
    $dbPassword = ',GFX!Ub2kt77';
    $dbName = 'muktadiranzan_chat';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT full_name FROM 
                        ((SELECT friend1,full_name FROM friendlist JOIN tbl_user ON friendlist.friend1=tbl_user.id WHERE friendlist.friend2='". $id. "')
                        UNION 
                        (SELECT friend2,full_name FROM friendlist JOIN tbl_user ON friendlist.friend2=tbl_user.id WHERE friendlist.friend1='". $id. "')) as Q
                        WHERE Q.full_name LIKE '%".$searchTerm."%'");
    // $data[]=array();
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['full_name'];
    }
    
    //return json data
    echo json_encode($data);
?>

