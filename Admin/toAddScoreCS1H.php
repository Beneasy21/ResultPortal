
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginn.php');
  }
  if ($_SESSION['username'] != 'Commandsss1Hum')
   {
  	$_SESSION['msg'] = "You are not autorised to view this page";
  	header('location: loginn.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginn.php");
  }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"href="css/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
     <div class="page-header">
    	<img src="images/header.png" />
        <h3>Welcome, <b></b>. Kindly Select the Subject, Arm etc to iput scores.</h3>
        
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logoutt.php" class="btn btn-danger">Sign Out of Your Account</a>
    
    </div>
    <div id="left">

			
	        <div id="TabbedPanels1" class="TabbedPanels">
	         
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" action="addTest.php">
						Subject:<?php include "HumCoreSubs.php"; ?><br />
							
							Class:<select name="Class" id="Class">
                           <option > </option>
							  <option value="SSS 1">SSS 1</option>
							  			  
							</select><br />
							Class Highest Mark:<input type="text" name="Chm" id="Chm" /><br />
							Class Lowest Mark:<input type ="text" name="Clm" id="Clm"/><br />
							Class Average Mark:<input type ="text" name="Cam" id="Cam"/><br />
							<label>Combination:</label><select name="suBcomb" id="suBcomb">
		                          <option value=''> </option>
								  <option value="Humanities">Humanities</option>
								  </select>
							Arm:<select name="Arm" id="Arm" required="required">
							  <option value=""> </option>
							  <option value="Emerald">Emerald</option>
							  <option value="Gold">Gold</option>
							  <option value="Pearl">Pearl</option>
							  </select><br />
						  <!-- For Term-->
							Term:
							<?php include "schTerms.php";?><br />
							Academic Year: <?php include "acadYear.php"; ?>
							<br />
						  <label>
								<input type="submit" name="button" id="button" value="Proceed" />
                          </label><br />
                  </form>
                </div>
</body>
</html> 

