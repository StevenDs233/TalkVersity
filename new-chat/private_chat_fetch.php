<?php
session_start();
include('private_database_connection.php');
$database=$_POST['database'];

if($_POST["action"] == "insert_data")
{
	$data = array(
		':from_user_id'		=>	$_SESSION["user_id"],
		':chat_message'		=>	$_POST['chat_message'],
		':status'			=>	'1'
	);

	$query = "
	INSERT INTO `$database` 
	(from_user_id, chat_message, status) 
	VALUES (:from_user_id, :chat_message, :status)
	";

	$statement = $connect->prepare($query);

	if($statement->execute($data))
	{
// 		echo fetch_group_chat_history($database,$connect);
        $query = "
        	SELECT * FROM `$database` JOIN tbl_user ON `$database`.from_user_id=tbl_user.id
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
        	echo $output;
	}

}

if($_POST["action"] == "fetch_data")
{
	$query = "
	SELECT * FROM `$database` JOIN tbl_user ON `$database`.from_user_id=tbl_user.id
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
	echo $output;
}

?>