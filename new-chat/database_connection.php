<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=muktadiranzan_chat;charset=utf8mb4", "muktadiranzan_client", ",GFX!Ub2kt77");
// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'muktadiranzan_chat';

// Database Username
$dbuser = 'muktadiranzan_client';

// Database Password
$dbpass = ',GFX!Ub2kt77';

// Defining base url
define("BASE_URL", "http://localhost/chat");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$conn = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}

date_default_timezone_set('Asia/Kolkata');

function fetch_group_chat_history($connect)
{
	$query = "
	SELECT * FROM chat_message 
	WHERE to_user_id = '0'  
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		if($row["from_user_id"] == $_SESSION["user_id"])
		{
			$user_name = '<b class="text-success">You</b>';
		}
		else
		{
			$user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
		}

		$output .= '

		<li style="border-bottom:1px dotted #ccc">
			<p>'.$user_name.' - '.$row['chat_message'].' 
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	return $output;
}

function fetch_group_chat_history1($connect)
{
	$query = "
	SELECT * FROM chat_message1 
	WHERE to_user_id = '0'  
	ORDER BY timestamp DESC
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '<ul class="list-unstyled">';
	foreach($result as $row)
	{
		$user_name = '';
		if($row["from_user_id"] == $_SESSION["user_id"])
		{
			$user_name = '<b class="text-success">You</b>';
		}
		else
		{
			$user_name = '<b class="text-danger">'.get_user_name($row['from_user_id'], $connect).'</b>';
		}

		$output .= '

		<li style="border-bottom:1px dotted #ccc">
			<p>'.$user_name.' - '.$row['chat_message'].' 
				<div align="right">
					- <small><em>'.$row['timestamp'].'</em></small>
				</div>
			</p>
		</li>
		';
	}
	$output .= '</ul>';
	return $output;
}


?>