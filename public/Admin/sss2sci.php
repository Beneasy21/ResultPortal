<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginn.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <br />
    
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'] )) 
    {
        echo '<p>
                <a href="toaddscorecs2s.php" class="btn btn-warning">Core</a>
                <a href="toaddscorees2s.php" class="btn btn-warning">Elective</a>
            </p> ';
    } 
    ?>
    <br />
    <p> <a href="indexx.php?logout='1'" style="color: red;">logout</a> </p>      
    	
    <?php //endif ?>
</div>
		
</body>
</html>