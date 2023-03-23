<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=muktadiranzan_chat;charset=utf8mb4", "muktadiranzan_client", ",GFX!Ub2kt77");

date_default_timezone_set('Asia/Kolkata');

function fetch_group_chat_history($connect)
{
	$query = "
	SELECT * FROM chat_message JOIN tbl_user ON chat_message.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp DESC
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '<ul class="media-list">';
	foreach($result as $row)
	{
		$user_name = '';
		if($row["from_user_id"] == $_SESSION["user_id"])
		{
			$user_name = '<b class="text-success">You</b>';
		}
		else
		{
			$user_name = '<b class="text-danger">'.$row['full_name'].'</b>';
		}

		$output .= '
		        <li class="media">
		            <div class="media-body">
        		        <div class="media">
                            <a class="pull-left" href="#">
                                '.$user_name.' -
                            </a>
                            <div class="media-body" >
                                '.$row['chat_message'].'
                                <br />
                               <small class="pull-right text-muted"> '.$row['timestamp'].'</small>
                                <hr />
                            </div>
                        </div> 
            		</div>
				</li>
		';
	}
	$output .= '</ul>';
	return $output;
}
?>