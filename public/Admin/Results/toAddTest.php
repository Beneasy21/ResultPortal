<?php
require_once('../../../private/initialize.php');
?>

<?php
/* Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/

if(is_post_request()){
	echo $_POST['subjects'];
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body>
</html>

<div id="left">
			<h1>Welcome </h1>
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	         
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" action="addTest.php">
	                <table width="50%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
                    <tr>
                        <?php include(SHARED_PATH . '/getsubjects.php');?>
					</tr>
					<tr>
                        <?php include(SHARED_PATH . '/studClass.php');?>
					</tr>

							
						  <tr>
                        <td>Class Highest Mark:<input type="text" name="Chm" id="Chm" /></td>
						<td>Class Lowest Mark:<input type ="text" name="Clm" id="Clm"/></td>
						<td>Class Average Mark:<input type ="text" name="Cam" id="Cam"/></td>
						
						<td>Combination:
						<select name="suBcomb" id="suBcomb" required = "required">
                        	<option value=''> </option>
							<option value="Junior">Junior</option>
							<option value="Science-Maths">Science-Maths</option>
							<option value="Science-Technology">Science-Technology</option>
							<option value="Humanities">Humanities</option>
							<option value="Business Studies">Business Studies</option>
			  			</select></td>
					</tr>
                    <tr>
						<?php include(SHARED_PATH . '/schArms.php');?>
					</tr>
                    <tr>
					  	<?php include(SHARED_PATH . '/term.php');?>
                    </tr>
					<tr>
					  	<?php include(SHARED_PATH . '/acadYear.php');?>
                    </tr>
					<tr>
						<td><label>
                          <input type="submit" name="button" id="button" value="Proceed" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>