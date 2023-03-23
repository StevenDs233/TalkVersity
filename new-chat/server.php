<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
// 	$conn =new mysqli('localhost', 'muktadiranzan_client', ',GFX!Ub2kt77' , 'muktadiranzan_chat');
    include('database_connection1.php');

	$sql = $conn->prepare("SELECT * FROM tbl_user WHERE full_name LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["full_name"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

