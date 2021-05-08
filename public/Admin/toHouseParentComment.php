<!DOCTYPE html>
<html lang = "en" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Edit Student</title>
<style type="text/css">
<!--
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; color: #FFFFFF; }
.style8 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; font-weight: bold; }
-->
</style>

<style type="text/css">
<!--
.style11 {color: #000000}
-->
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
	
	<div id="content">
		<div id="left">
			<table width="50%" height="209" cellpadding="0" cellspacing="0" align="center" align="center">
              
              <tr>
                <td><?php
				$Id=$_GET['studId'];
?>
                  <form method="post" action="HouseParentComment.php?studId=<?php echo $Id;?>">
		
                    <table width="30%"  align="center">
                      <tr>
						  <td colspan="2" align = "center" height = "120">
								<h3>Enter Comments</h3>
						  </td>
                      </tr>
					  <?php include 'acadYear.php';?> 					  
                      <?php include 'term.php';?> 					  
                      <tr>
                        <td colspan="2"><input type="submit" name="submit" value="Enter Comment" /><input type = "hidden" name="studId" id="studId" value ="<?php echo $Id;?>"" </td>
                        
                      </tr>
</table>
                  </form>
                    </td>
              </tr>
		  </table>
			<h1>&nbsp;</h1>
			
	        <p>&nbsp;</p>
	
	<h1>&nbsp;</h1>
	  </div>
		
		<div id="footerline"></div>
	</div>
	
	
</div>


</body>
</html>