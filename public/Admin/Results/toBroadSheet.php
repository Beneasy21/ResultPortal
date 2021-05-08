<?php  
	require_once('../../../private/initialize.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="" rel="stylesheet" type="text/css" />
<title>Upload Students Results</title>

</head>

<body>
<div id="container">
		<div id="content">
		<div id="left">
			<h1>Welcome </h1>
			
	        <div id="TabbedPanels1" class="TabbedPanels">
	         
	          <div class="TabbedPanelsContentGroup">
	            <div class="TabbedPanelsContent">
	              <form id="form1" name="form1" method="post" action="<?php echo url_for('Admin/results/broadsheet.php');?>">
	                <table width="50%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
                      <tr>

					  <?php 
						include(SHARED_PATH . '/acadYear.php');
						include(SHARED_PATH . '/term.php');
						include(SHARED_PATH . '/studClass.php');
						include(SHARED_PATH . '/schArms.php');
					  ?>
                        
					
						<td>Combination:</td><td><select name="combination" id="combination">
                          <option > </option>
                          <option value = "Junior"> Junior </option>
                          <option value = "Science-Maths">Science-Maths</option>
                          <option value = "Science-Technology">Science-Technology</option>
                          <option value = "Humanities">Humanities</option>
						  <option value = "Business Studies">Business Studies</option>
                      </tr>
                                            				
                      <tr>
							
						<td><label>
                          <input type="submit" name="button" id="button" value="Proceed" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
</body>
</html>
				