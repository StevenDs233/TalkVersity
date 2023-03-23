<?php
session_start();

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
include('database_connection.php');
$statement1 = $conn->prepare("SELECT chat_name FROM private_chat_list WHERE chat_id=?");
$statement1->execute(array($_REQUEST['id']));
$result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
foreach($result1 as $row1){
    $chat_name=$row1['chat_name'];
}
$statement = $conn->prepare("SELECT DISTINCT image,id,full_name FROM (SELECT * FROM private_chat_list JOIN tbl_user ON private_chat_list.users=tbl_user.full_name) as D WHERE D.chat_name=?");
$statement->execute(array($chat_name));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-4529508631166774",
		enable_page_level_ads: true
		});
	</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>TALKVERSITY PRIVATE CHAT ROOM</title>  
	<link rel="stylesheet" href="./css/jquery-ui.css">
	<script src="./js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./js/typeahead.js"></script>

	<link rel="stylesheet" href="./css/bootstrap.min.css">
	
	<script src="./js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="./css/emojionearea.min.css">
	<script src="./js/jquery-ui.js"></script>
	<script src="./js/emojionearea.min.js"></script>
	<script src="./js/jquery.form.js"></script>
	<style>
	    #group_chat_message
        {
        	resize: none;
        	max-width: 600px;
        	height: 80px;
        	overflow-x:none;
        	overflow-y: auto;
        	padding:6px 28px 6px 12px;
        }
	</style>
</head>
<body style="font-family:Verdana">
    <nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
				   <img alt="Brand" src="logo.jpg" style="max-width:50px; margin-top: -14px;">
			    </a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			        <form action="result.php" method="POST" class="navbar-form navbar-left">
                        <div class="form-group">
                          <input type="text" class="form-control"  name="name" id="name" size="50" autocomplete="off" placeholder="Search Your Friends">
                        </div>
                        <!--<button type="submit" name="result"  class="btn btn-default">Submit</button>-->
                        <input type="submit" name="result" style="background-color: #4CAF50; border: none; color: white; padding: 8px 11px; cursor: pointer;" value="GO">
                    </form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">PUBLIC CHAT&nbsp;&nbsp;</a></li>
						<li><a href="create_chat.php">OPEN PRIVATE CHAT&nbsp;&nbsp;</a></li>
						<li><a href="#">CONTACT US&nbsp;&nbsp;</a></li>
						<li class="dropdown">
						<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php">View Profile</a></li>
							<li><a href="edit_profile.php">Edit Profile</a></li>
							<li><a href="private_chat_list.php">My Private Chats</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
  	<div class="container">
		<div class="row">
    	<div class="col-md-8">
        	<div class="panel panel-info">
				<div class="panel-heading">
					<?php echo $chat_name; ?> PRIVATE CHAT
				</div>
            	<div id="group_chat_history" class="panel-body" style="height: 420px; overflow:scroll;">
					
				</div>
				<div class="panel-footer">
					<div class="input-group">
						<!--<input type="text" class="form-control" id="group_chat_message" placeholder="Enter Message" />-->
						
						<div id="group_chat_message" contenteditable class="form-control">

            			</div>
						<span class="input-group-btn">
							<button class="btn btn-info" type="button" name="send_group_chat" id="send_group_chat" style="left:20px;" >SEND</button>
						</span>&nbsp;
						<span class="input-group-btn">
							<form id="uploadImage" method="post" action="upload.php">
            					<label for="uploadFile"><img id="olo" style="cursor: pointer; left:35px; top: 4px;" src="upload.png" /></label>  
            					<input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png, .doc, .pdf, .zip, .tar" style="display: none;" />
            				</form>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
				CHAT MEMBERS
				</div>
				<div class="panel-body">
					<ul class="media-list">
                    <?php 
                        foreach($result as $row) {
                    ?>
						<li class="media">

							<div class="media-body">

								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object img-circle" style="max-height:40px;" src="<?php echo $row['image']; ?>" />
									</a>
									<div class="media-body" >
										<a href="profile.php?id=<?php echo $row['id']; ?>"><h5><?php echo $row['full_name']; ?></h5></a>
									</div>
								</div>

							</div>
						</li>
                    <?php
                        }
                    ?>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script>
    $(document).ready(function () {
        $('#name').typeahead({
            source: function (query, result) {
                $.ajax({
                    url: "server.php",
					data: 'query=' + query,            
                    dataType: "json",
                    type: "POST",
                    success: function (data) {
						result($.map(data, function (item) {
							return item;
                        }));
                    }
                });
            }
        });
    });
</script>
<script>  
$(document).ready(function(){
    
    fetch_group_chat_history();

	setInterval(function(){
		fetch_group_chat_history();
	}, 100);
	
	var input = document.getElementById("group_chat_message");
    input.addEventListener("keydown", function(event) {
      if (event.keyCode === 13 && !event.shiftKey) 
      {
          
        event.preventDefault();
        var chat_message = $('#group_chat_message').html();
		var action = 'insert_data';
		var database='<?php echo $chat_name; ?>';
		if(chat_message != '')
		{
			$.ajax({
				url:"private_chat_fetch.php",
				method:"POST",
				data:{chat_message:chat_message, action:action, database:database},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
					$("#group_chat_history").scrollTop($("#group_chat_history")[0].scrollHeight);
				}
			})
		}
      }
    });

	$('#send_group_chat').click(function(){
		var chat_message = $('#group_chat_message').html();
		var action = 'insert_data';
		var database='<?php echo $chat_name; ?>';
		if(chat_message != '')
		{
			$.ajax({
				url:"private_chat_fetch.php",
				method:"POST",
				data:{chat_message:chat_message, action:action, database:database},
				success:function(data){
					$('#group_chat_message').html('');
					$('#group_chat_history').html(data);
					$("#group_chat_history").scrollTop($("#group_chat_history")[0].scrollHeight);
				}
			})
		}
	});

	function fetch_group_chat_history()
	{
		var action = "fetch_data";
		var database='<?php echo $chat_name; ?>';

		$.ajax({
			url:"private_chat_fetch.php",
			method:"POST",
			data:{action:action, database:database},
			success:function(data)
			{
				$('#group_chat_history').html(data);
				$("#group_chat_history").scrollTop($("#group_chat_history")[0].scrollHeight);
			}
		})
	}

	$('#uploadFile').on('change', function(){
	    document.getElementById("olo").style.display = "none";
		$('#uploadImage').ajaxSubmit({
			target: "#group_chat_message",
			resetForm: true
		});
	});
	
});  
</script>
</body>
</html>
