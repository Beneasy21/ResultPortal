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

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'] )) 
    {
        //JSS 1 Data
        if($_SESSION['username'] == 'Commandjss1')
        {
          header('location:jss1.php');
        }
        //JSS 2 Data
        else if($_SESSION['username'] == 'Commandjss2')
        {
          header('location:jss2.php');
        }
        //JSS 3 Data
        else if($_SESSION['username'] == 'Commandjss3')
        {
          header('location:jss3.php');
        }

        //SSS One 
        //SSS 1 Business Data
        else if($_SESSION['username'] == 'Commandsss1Bus')
        {
          header('location:sss1Bus.php');
        }
        //SSS 1 Humanities Data
        else if($_SESSION['username'] == 'Commandsss1Hum')
        {
          header('location:sss1Hum.php');
        }
        //SSS 1 Science Data
        else if($_SESSION['username'] == 'Commandsss1Sci')
        {
          header('location:sss1Sci.php');
        }
        //SSS 1 Technology Data
        else if($_SESSION['username'] == 'Commandsss1Tec')
        {
          header('location:sss1Tec.php');
        }
        

        //SSS Two 
        //SSS 2 Business Data
        else if($_SESSION['username'] == 'Commandsss2Bus')
        {
          header('location:sss2Bus.php');
        }
        //SSS 1 Humanities Data
        else if($_SESSION['username'] == 'Commandsss2Hum')
        {
          header('location:sss2Hum.php');
        }
        //SSS 1 Science Data
        else if($_SESSION['username'] == 'Commandsss2Sci')
        {
          header('location:sss2Sci.php');
        }
        //SSS 1 Technology Data
        else if($_SESSION['username'] == 'Commandsss2Tec')
        {
          header('location:sss2Tec.php');
        }
        

        //SSS Three 
        //SSS 3 Business Data
        else if($_SESSION['username'] == 'Commandsss3Bus')
        {
          header('location:sss3Bus.php');
        }
        //SSS 1 Humanities Data
        else if($_SESSION['username'] == 'Commandsss3Hum')
        {
          header('location:sss3Hum.php');
        }
        //SSS 1 Science Data
        else if($_SESSION['username'] == 'Commandsss3Sci')
        {
          header('location:sss3Sci.php');
        }
        //SSS 1 Technology Data
        else if($_SESSION['username'] == 'Commandsss3Tec')
        {
          header('location:sss3Tec.php');
        }
          
    } 


      ?>
      
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="indexx.php?logout='1'" style="color: red;">logout</a> </p>
    <?php //endif ?>
</div>
		
</body>
</html>