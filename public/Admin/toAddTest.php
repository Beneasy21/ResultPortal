<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
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
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
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
                        
							<td>Subject:</td><td><select name="Subject" id="Subject" required="required">
							  <option></option>
							  <option value ="Animal Husbandary">Animal Husbandary</option>
							  <option value = "Agricutural Science">Agricutural Science</option>
							  <option value = "Arabic">Arabic</option>
							  <option value = "Biology">Biology</option>
							  <option value = "B. Elect">B. Elect</option>
							  <option value = "B. Electronics">B. Electronics</option>
							  <option value = "Basic Science and Technology">Basic Science and Technology</option>
							  <option value = "Business Studies">Business Studies</option>
							  <option value = "C C A">C C A</option>
							  <option value = "C R S">C R S</option>
							  <option value = "Catering and Craft Practice">Catering and Craft Practice</option>
							  <option value = "Chemistry">Chemistry</option>
							  <option value = "Civic Education">Civic Education</option>
							  <option value = "Commerce">Commerce</option>
							  <option value = "Computer">Computer</option>
							  <option value = "Data Processing">Data Processing</option>
							  <option value = "Dyeing and Bleaching">Dyeing and Bleaching</option>
							  <option value = "Economics">Economics</option>
							  <option value = "English Language">English Language</option>
							  <option value = "Financial Accounting">Financial Accounting</option>
							  <option value = "Food and Nutrition">Foods and Nutrition</option>
							  <option value = "French">French</option>
							  <option value = "Further Mathematics">Further Mathematics</option>
							  <option value = "Geography">Geography</option>
							  <option value = "Government">Government</option>
							  <option value = "Guidance and Counselling">Guidance and Counselling</option>
							  <option value = "History">History</option>
							  <option value = "Health Education">Health Education</option>
							  <option value = "I R S">I R S</option>
							  <option value = "Insurance">Insurance</option>
							  <option value = "Literature In English">Literature In English</option>
							  <option value = "Mathematics">Mathematics</option>
							  <option value = "Marketing">Marketing</option>
							  <option value = "Music">Music</option>
							  <option value = "National Value Education">National Values Education</option>
							  <option value = "Nigerian Languages">Nigerian Languages</option>
							  <option value = "Office Practice">Office Practice</option>
							  <option value = "Physics">Physics</option>
							  <option value = "Physical Education">Physical Education</option>
							  <option value = "Prevocational Studies">Prevocational Studies</option>
							  <option value = "Religious Studies">Religious Studies</option>
							  <option value = "Religious Studies-CRS">Religious Studies-CRS</option>
							  <option value = "Religious Studies-IRS">Religious Studies-IRS</option>
							  <option value = "Store Keeping">Store Keeping</option>
							  <option value = "Store Management">Store Management</option>
							  <option value = "Technical Drawing">Technical Drawing</option>
							  <option value = "Visual arts">Visual arts</option>
							  </select></td>
							
							<td>Class:</td><td><select name="Class" id="Class" required="required">
                           <option > </option>
			  <option value='JSS 1'>JSS 1</option>
			  <option value='JSS 2'>JSS 2</option>
			  <option value='JSS 3'>JSS 3</option>
			  <option value='SSS 1'>SSS 1</option>
			  <option value='SSS 2'>SSS 2</option>
			  <option value='SSS 3'>SSS 3</option>
                          </select></td> </tr>
						  <tr>
                        <td>Class Highest Mark:<input type="text" name="Chm" id="Chm" /></td>
						<td>Class Lowest Mark:<input type ="text" name="Clm" id="Clm"/></td>
						<td>Class Average Mark:<input type ="text" name="Cam" id="Cam"/></td>
						
						<td>Combination:<select name="suBcomb" id="suBcomb" required = "required">
                          <option value=''> </option>
			  <option value="Junior">Junior</option>
			  <option value="Science-Maths">Science-Maths</option>
			  <option value="Science-Technology">Science-Technology</option>
			  <option value="Humanities">Humanities</option>
			  <option value="Business Studies">Business Studies</option>
			  
			  
                          </select></td>
						
												
						
                      </tr>
                                           <tr>
                        <td>Arm:</td><td><select name="Arm" id="Arm" required="required">
               <option value=''> </option>
						  <option value='Gold'>Gold</option>
						  <option value='Silver'>Silver</option>
						  <option value='Diamond'>Diamond</option>
						  <option value='Ruby'>Ruby</option>
						  <option value='Opal'>Opal</option>
						  <option value='Emerald'>Emerald</option>
						  <option value='Topaz'>Topaz</option>
						  <option value='Pearl'>Pearl</option>
						  <option value='Coral'>Coral</option>
						  <option value='Beryl'>Beryl</option>
						  <option value='Gold Ext'>Gold Ext</option>
						  <option value='Silver Ext'>Silver Ext</option>
						  <option value='Diamond Ext'>Diamond Ext</option>
						  <option value='Ruby Ext'>Ruby Ext</option>
						  <option value='Opal Ext'>Opal Ext</option>
						  <option value='Emerald Ext'>Emerald Ext</option>
						  <option value='Topaz Ext'>Topaz Ext</option>
						  <option value='Pearl Ext'>Pearl Ext</option>
						  <option value='Coral Ext'>Coral Ext</option>
						  <option value='Beryl Ext'>Beryl Ext</option>
			  
                          </select></td>
						  <!-- For Term-->
						  <td>Term:</td><td><select name="Term" id="Term">
                          <option></option>
                          <option value="First">First</option>
                          <option value="Second">Second</option>
                          <option value = "Third">Third</option>
                          </select></td>
                      </tr>
                      				
                      <tr>
                        <td>Academic Year:</td><td><select name="academicYear" id="academicYear">
                          <option></option>
                          <option value = "2018/2019">2018/2019</option>
                          <option value = "2019/2020">2019/2020</option>
                          <option value = "2020/2021">2020/2021</option>
						  <option value = "2021/2022">2021/2022</option>
                          <option value = "2022/2023">2022/2023</option>
                          <option value = "2023/2024">2023/2024</option>
                          <option value = "2024/2025">2024/2025</option>
                          <option value = "2025/2026">2025/2026</option>
                          <option value = "2026/2027">2026/2027</option>
                          <option value = "2027/2028">2027/2028</option>
                          <option value = "2028/2029">2028/2029</option>
                          <option value = "2029/2030">2029/2030</option>
                          </select>

						<td><label>
                          <input type="submit" name="button" id="button" value="Proceed" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>