<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=muktadiranzan_chat;charset=utf8mb4", "muktadiranzan_client", ",GFX!Ub2kt77");
$conn =new mysqli('localhost', 'muktadiranzan_client', ',GFX!Ub2kt77' , 'muktadiranzan_chat');

date_default_timezone_set('Asia/Kolkata');

function fetch_group_chat_history($connect)
{
	$query = "
	SELECT * FROM chat_message JOIN tbl_user ON chat_message.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history1($connect)
{
	$query = "
	SELECT * FROM chat_message1 JOIN tbl_user ON chat_message1.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history2($connect)
{
	$query = "
	SELECT * FROM chat_message2 JOIN tbl_user ON chat_message2.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history3($connect)
{
	$query = "
	SELECT * FROM chat_message3 JOIN tbl_user ON chat_message3.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history4($connect)
{
	$query = "
	SELECT * FROM chat_message4 JOIN tbl_user ON chat_message4.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history5($connect)
{
	$query = "
	SELECT * FROM chat_message5 JOIN tbl_user ON chat_message5.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history6($connect)
{
	$query = "
	SELECT * FROM chat_message6 JOIN tbl_user ON chat_message6.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history7($connect)
{
	$query = "
	SELECT * FROM chat_message7 JOIN tbl_user ON chat_message7.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history8($connect)
{
	$query = "
	SELECT * FROM chat_message8 JOIN tbl_user ON chat_message8.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history9($connect)
{
	$query = "
	SELECT * FROM chat_message9 JOIN tbl_user ON chat_message9.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history10($connect)
{
	$query = "
	SELECT * FROM chat_message10 JOIN tbl_user ON chat_message10.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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

function fetch_group_chat_history11($connect)
{
	$query = "
	SELECT * FROM chat_message11 JOIN tbl_user ON chat_message11.from_user_id=tbl_user.id
	WHERE to_user_id = '0'  
	ORDER BY timestamp ASC
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