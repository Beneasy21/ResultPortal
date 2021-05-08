<?php
require_once('../../private/initialize.php');
 
//sec_session_start();
 

?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/signin.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body >
	<div class="container">
		
		<div class="row p-2">
			 <?php
				if (isset($_GET['error'])) {
					echo '<p class="error">Error Logging In!</p>';
				}
			?> 
		</div>
		
		<div >
			<form class = "form-signin" action="includes/process_login.php" method="post" name="login_form">
				<div class="row pt-10">
					<div class="mx-auto">
						<img class="mb-4 rounded"  src="images/logo.png" alt="" width="150" height="120" >
					</div>	
				</div>
			<div class="row p-2">
				<Marquee>Welcome to Command Secondary School - Ipaja, Result Portal. Kindly Login if you are an authorized user</marquee>
			</div>
			
				<div class = "form-group" >
					<label> Email</label>
					<input class="form-control" type= "text" name="email" >
				</div>
				<div class = "form-group" >
					<label> Password</label>
					<input class="form-control" type= "password" name="password" >
				</div>
				<div class="checkbox mb-3">
					<label>
					  <input type="checkbox" value="remember-me"> Remember me
					</label>
			    </div>
				<div class = "form-group" >
					<input class=" form-control btn btn-primary" type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
				</div>
			</form>
		</div>
		
	
    </body>
</html>