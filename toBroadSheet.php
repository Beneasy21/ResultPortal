<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
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
	              <form id="form1" name="form1" method="post" action="broadsheet.php">
	                <table width="50%"  border="1" cellpadding="0" cellspacing="0" align=center>
                      
                      <tr>
                        
							<td>Class:</td><td><select name="Class" id="Class">
                          <option></option>
                          <option value = "JSS 1">JSS 1</option>
                          <option value = "JSS 2">JSS 2</option>
                          <option value = "JSS 3">JSS 3</option>
						  <option value = "SSS 1">SSS 1</option>
                          <option value = "SSS 2">SSS 2</option>
                          <option value = "JSS 3">SSS 3</option>
                          </select></td>
						  <td>Combination:</td><td><select name="combination" id="combination">
                          <option > </option>
                          <option value = "Junior"> Junior </option>
                          <option value = "Science-Maths">Science-Maths</option>
                          <option value = "Science-Technology">Science-Technology</option>
                          <option value = "Humanities">Humanities</option>
						  <option value = "Business Studies">Business Studies</option>
                      </tr>
                      <tr>
                        <td>Arm:</td><td>
						
						<select name="Arm" id="Arm">
						<option value=''> </option>
			  <option value="Gold">Gold</option>
			  <option value="Silver">Silver</option>
			  <option value="Diamond">Diamond</option>
			  <option value="Ruby">Ruby</option>
			  <option value="Opal">Opal</option>
			  <option value="Emerald">Emerald</option>
			  <option value="Topaz">Topaz</option>
			  <option value="Pearl">Pearl</option>
			  <option value="Coral">Coral</option>
			  <option value="Beryl">Beryl</option>
			  <option value="Tasper">Tasper</option>
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
                          <option value = "2016/2017">2016/2017</option>
                          <option value = "2016/2017">2017/2018</option>
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
				</td>
						
						<td><label>
                          <input type="submit" name="button" id="button" value="Proceed" />
                        </label></td>
                      </tr>
                    </table>
                  </form>
                </div>
</body>
</html>
				