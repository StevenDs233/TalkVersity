<?php
session_start();

if(!isset($_SESSION['user_id']))
{
	header("location:login.php");
}
include('database_connection.php');

?>
<html>  
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
    	<title>TALKVERSITY PUBLIC CHAT ROOM</title>  
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
			<br />
			<h3 align="center">ADD FRIENDS TO PRIVATE CHAT</h3>
			<br />
			<br />
			<br />
			<br />
			    
            <div class="col-xs-12">
                <form action="submit.php" method="POST">
                    <input class="form-control input-lg center-block" name="cname"  id="inputlg" type="text" placeholder="Type In Your Friends Name">
                    <br />
		            <br />
                    <button type="submit" class="btn btn-lg btn-success center-block" name="submits">NEXT</button>
                </form>
            </div>
                  
			<br />
			<br />
			<br />
			<br />
		</div>
    </body>  
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
        $(function() {
            function split( val ) {
                return val.split( /,\s*/ );
            }
            function extractLast( term ) {
                return split( term ).pop();
            }
            
            $( "#inputlg" ).bind( "keydown", function( event ) {
                if ( event.keyCode === $.ui.keyCode.TAB &&
                    $( this ).autocomplete( "instance" ).menu.active ) {
                    event.preventDefault();
                }
            })
            .autocomplete({
                minLength: 1,
                source: function( request, response ) {
                    // delegate back to autocomplete, but extract the last term
                    $.getJSON("search.php", { term : extractLast( request.term )},response);
                },
                focus: function() {
                    // prevent value inserted on focus
                    return false;
                },
                select: function( event, ui ) {
                    var terms = split( this.value );
                    // remove the current input
                    terms.pop();
                    // add the selected item
                    terms.push( ui.item.value );
                    // add placeholder to get the comma-and-space at the end
                    terms.push( "" );
                    this.value = terms.join( ", " );
                    return false;
                }
            });
        });
    </script>
</html>

