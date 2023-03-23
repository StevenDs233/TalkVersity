<?php
session_start();
include("config.php");
$error_message='';
$error_message1='';
$error_message2='';

if(isset($_POST['form1'])) {
        
    if(empty($_POST['email']) || empty($_POST['password'])) {
        $error_message = ' (Email and/or Password can not be empty)<br>';
    } else {
		
		$email = strip_tags($_POST['email']);
		$password = strip_tags($_POST['password']);

    	$statement = $pdo->prepare("SELECT * FROM tbl_user WHERE email=?");
    	$statement->execute(array($email));
    	$total = $statement->rowCount();    
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);    
        if($total==0) {
            $error_message1 = ' (Email Address does not match)<br>';
        } else {       
            foreach($result as $row) { 
                $row_password = $row['password'];
            }
        
            if( $row_password != md5($password) ) {
                $error_message2 = ' (Password does not match)<br>';
            } else {       
            
			    $_SESSION['user_id'] = $row['id'];
				$_SESSION['username'] = $row['full_name'];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row['id']."')
				";
				$statement = $pdo->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $pdo->lastInsertId();
				header('location:index.php');
            }
        }
    }

    
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
	   <img alt="Brand" src="logo.jpg" style="max-width:50px; margin-top: -14px;">
    </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME&nbsp;&nbsp; <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">PUBLIC CHAT&nbsp;&nbsp;</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">LOGIN&nbsp;&nbsp;</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">REGISTER&nbsp;&nbsp;</a>
      </li>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">CONTACT US&nbsp;&nbsp;</a>
      </li>
    </ul>
  </div>
</nav>



<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">USER LOGIN</h3>
</div>
<br>
</article>
<div class="container">


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<a href="register.php" class="float-right btn btn-outline-info mt-1">Register</a>
	<h4 class="card-title mt-2">LOGIN<?php echo $error_message; ?></h4>
</header>
<article class="card-body">
<form action="" method="post">
	<div class="form-group">
		<label>Email address<?php echo $error_message1; ?></label>
		<input type="email" class="form-control" name="email" type="email" placeholder="" autocomplete="off">
	</div> 
	<!-- form-group end.// -->
	<!-- form-row.// -->
	<div class="form-group">
		<label>Password<?php echo $error_message2; ?></label>
	    <input class="form-control" type="password" name="password" autocomplete="off">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block" name="form1" value="Log In"> Login  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">Forgot Password?<a href=""> Click Here</a></small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Don't have an account? <a href="register.php">Register Now</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->