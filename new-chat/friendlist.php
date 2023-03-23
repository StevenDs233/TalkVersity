<?php
session_start();

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
include('database_connection.php');


$statement = $conn->prepare("SELECT * FROM friendlist JOIN tbl_user ON friendlist.friend1=tbl_user.id WHERE friendlist.friend2=?
	                        UNION 
	                        SELECT * FROM friendlist JOIN tbl_user ON friendlist.friend2=tbl_user.id WHERE friendlist.friend1=?");
$statement->execute(array($_SESSION['user_id'],$_SESSION['user_id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC); 
$count = $statement->rowCount();
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TALKVERSITY</title>  
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/typeahead.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style>
	@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1.7em;
    font-weight: 700;
}

.infos {
    font-size: 1.1em;
    font-weight: 300;
}
.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}
	</style>
</head>
	<body>
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
                    <div class="col-xs-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading c-list">
                                <span class="title">You have <?php echo $count; ?> friends</span>
                            </div>
                            
                            <ul class="list-group" id="contact-list">
                                <?php 
                                foreach($result as $row) {
                                ?>
                                <li class="list-group-item">
                                    <div class="col-xs-12 col-sm-2">
                                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['full_name']; ?>" class="img-responsive img-circle" />
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <a href="profile.php?id=<?php echo $row['id']; ?>" ><span class="name"><?php echo $row['full_name']; ?></span><br/><br/></a>
                                        <span class="infos"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo  $row['curriculum']; ?></span><br/>
                                        <span class="infos"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo $row['email']; ?></span><br/>
                                        <span class="infos"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; <?php echo  $row['phone']; ?></span><br/>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <br/><br/>
                                        <a href="delete_friend.php?friend=<?php echo $row['id']; ?>" class="btn btn-lg btn-danger">REMOVE</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <?php
            		                        }

            		                        ?>
                            </ul>
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
		</body>
