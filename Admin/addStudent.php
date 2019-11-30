<!DOCTYPE html>
<html lang="en">
<head>
<script>
</script>

</head>


<style type="text/css">

</style>
<body>
<br><br><br>

<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" action="addStud.php">
<table width="600">
	<tr>
		<td align = "center"><img src = "images/header.png" width="500"></td>
	</tr>
	<tr>
		<td><center><font color="#660066" size="+3">Add Student</font></center></td>
	</tr>
	<tr>
		<td>
			<table align="center" border=1 width="450">
			<tr>
				<td>Adm No:</td><td><input type="text" name="studId"</td>
			</tr>
			<tr>
				<td>Student's Name:</td><td><input type="text" name="studName"></td>
			</tr>
			<tr><td width="111"><span class="style3">Sex:</span></td>
			<td width="264"><select name="sex" onChange="showUser(this.value)">
			  <option value=''> </option>
			  <option value="male">Male</option>
			  <option value="female">Female</option>
			 
			</select></td>
			</tr>
			<?php include 'studClass.php'; ?>
			<?php include 'schArms.php'; ?>
			<?php include 'studHouse.php'; ?>
			
			
			<!--Adding Academic Year -->
			<?php include 'acadYear.php'; ?>
			
			<!--Adding Student Status -->
			<?php include 'sStatus.php'; ?>
			
			<tr>
				<td>Date Of Birth:</td><td><input type="text" name="DOB" id="DOB" placeholder="YYYY-MM-DD"></td>
			</tr>
			
			<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Submit"></td></tr>
			</table>
		</td>
		</tr>
		</table>
</form>
</fieldset></center>
</body>
