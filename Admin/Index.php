<?php
include_once 'includes/connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) 
{
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
	<table align="center" width="500" border=1>
		<tr>
		<td><img src="images/header.png" width = "480"></td>
		</tr>
		<tr>
		<td height="80"><Marquee>Welcome to Command Secondary School - Ipaja, Result Portal. Kindly Login if you are an authorized user</marquee></td>
		</tr>
		<tr>
			<td>
				<table border=1 align="center">
				<tr>
				
					 <?php
				if (isset($_GET['error'])) {
					echo '<p class="error">Error Logging In!</p>';
				}
				?> 
				<form action="includes/process_login.php" method="post" name="login_form">                      
				<td>	<b>Email:</b> <input type="text" name="email" /></td></tr>
					<tr><td><b>Password:</b> <input type="password" name="password" id="password"/></td></tr>
					<tr><td align = "Right"> <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> </td></tr>
				</form>
				</tr>
				</table>
		 
		   
		</td>
		</tr>
	</table>
    </body>
</html>