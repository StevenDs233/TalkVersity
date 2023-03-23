<?php
include("config.php");
$error_message='';
$error_message1='';
$error_message2='';

if(isset($_POST['form1'])) {
        
    $valid = 1;

// 	if(empty($_POST['faq_title'])) {
// 		$valid = 0;
// 		$error_message .= 'Title can not be empty<br>';
// 	}

// 	if(empty($_POST['faq_content'])) {
// 		$valid = 0;
// 		$error_message .= 'Content can not be empty<br>';
// 	}
    $password=md5($_POST['password']);

	if($valid == 1) {
	
		$statement = $pdo->prepare("INSERT INTO tbl_user (`full_name`, `email`, `phone`, `password`, `curriculum`) VALUES (?,?,?,?,?)");
		$statement->execute(array($_POST['name'],$_POST['email'],$_POST['phone'],$password,$_POST['curriculum']));
			
		header("location: login.php");
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
    <h3 class="text-white mt-3">USER REGISTRATION</h3>
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
	<a href="login.php" class="float-right btn btn-outline-info mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>Name </label>   
		  	<input type="text" class="form-control" name="name" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Phone Number</label>
		  	<input type="text" class="form-control" name="phone" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" name="email" >
		<small class="form-text text-muted">Please Enter Valid Email Address</small>
	</div> 
	<!-- form-group end.// -->
	<!-- form-row.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" name="password" >
	</div> <!-- form-group end.// -->  
	<div class="form-row">
		<div class="form-group col-md-12">
		  <label>Select Curriculum</label>
		  <select name="curriculum" id="inputState" class="form-control">
		    <option> Choose</option>
		      <option value"Bachelor of Science in Computer Science & Engineering">Bachelor of Science in Computer Science & Engineering</option>
		      <option value"Bachelor of Science in Electrical And Electronic Engineering">Bachelor of Science in Electrical And Electronic Engineering</option>
		      <option value"Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
		      <option value"Bachelor of Architecture">Bachelor of Architecture</option>
		      <option value"Bachelor of Social Science in Economics">Bachelor of Social Science in Economics</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> 
    <div class="form-group">
        <button type="submit" class="btn btn-info btn-block" name="form1"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Register' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->