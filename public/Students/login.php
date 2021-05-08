
<?php
    require_once('../../private/initialize.php');
    session_start();

    	$errors = [];
    	$username = '';
    	$password = '';

    if(is_post_request()){
    	$username = h($_POST['username']);
    	$password = h($_POST['password']);

    	if(is_blank($username)){
    		//if username is empty
    		$errors[] = "Username cannot be blank";
    	}

    	if(is_blank($password)){
    		//if password is empty
    		$errors[] = "password cannot be blank";
    	}
    	//If no errors
    	if(empty($errors)){
    		//Error message variable
    		$loginFailed = "Login was unsuccessful";

    		$student = fetch_studentLogin_by_id($username);
    		if($student){

    			if(password_verify($password, $student['studPass'])){
    				//password matches
					log_in_student($student);
					redirect_to(url_for('students/index.php'));    				
    			} else {
    				//Username present, Password not matched
    				$errors[]= $loginFailed;
    			}
    		} else {
    			//No record was recovered
    			$errors[]= $loginFailed;
    			redirect_to(url_for('students/login.php'));
    		}


    	}

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/bootstrap.min.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/myStyles.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/custom.css'); ?>" />

    <title>Student Login</title>
</head>
<body class="">
    <div class="container mx-auto">
    	<div class="text">
    		
	    	<main class="text-center">
	    		<div class="row ">
	    			<div class="col-3"></div>
	    		<div class="col-6 text-center shadow py-5">
	    			<div class="text-center">
    		<img  src="<?php echo url_for('/images/logo.png') ; ?>" style="height:150px; width:220px">
	    	</div>
	    			<h2>Student's Login</h2>
	        		<p>Please fill in your credentials to login.</p>
	        		
	        		<form action="<?php echo url_for('students/login.php'); ?>" method="post">
	            		<div class="form-group ">
	                		<input type="text" name="username" class="form-control"  placeholder="Registration number">
	            		</div>    
	            		<div class="form-group">
	                		<input type="password" name="password" class="form-control" placeholder="Password">
	            		</div>
	            		<div class="form-group">
	                		<input type="submit" class="form-control btn btn-primary" value="Login">
	            		</div>
	                </form>		
	    		</div>
	    		<div class="col-23"></div>
	    		</div>		
	    	</main>		
    	</div>
    </div>  
</body>
</html>