
<?php
	require_once('../../../private/initialize.php');

	$page_title = 'Command:: Home';
	include(SHARED_PATH . '/general_header.php');

	if(is_post_request()){
		$AdmNo=$_POST['studId'];
		$Name=$_POST['studName'];
		$Sex=$_POST['sex'];
		$Class=$_POST['studClass'];
		$Arm=$_POST['Arm'];
		$House=$_POST['studHouse'];
		$AcadYear=$_POST['acadYr'];
		$StudentStatus=$_POST['sStatus'];
		$StudDOB=$_POST['DOB'];
	
	$Student = fetch_student_by_id($AdmNo);
	/* Establish Connection with MYSQL
	$conn = mysqli_connect("localhost","root","","comschoolmand");
					if ($conn->connect_error)
					{
						die("Could not connect to database: ".$conn->connect_error);
					}/*
	$sql1 = mysqli_query($conn,"select studId from students where studId='$AdmNo' ");
    $row=mysqli_fetch_array($sql1);*/
	
		if($Student['studId']!=$AdmNo)	
		{
			$esult = insert_student($AdmNo,$Name,$Class,$Sex,$Arm,$House,$AcadYear,$Studentstatus,$StudDOB);	

			if(!$result){
				echo "Could not add the student.";
			}

			echo '<script type="text/javascript">alert("New Student Inserted Succesfully");window.location=\'AddStudent.php\';</script>';

			//if(mysqli_query ($conn,"INSERT INTO students 	(studId,studName,sex,currentClass,arm,house,acadYr,studStatus,studDOB) 
			//	values('".$AdmNo."','".$Name."','".$Sex."','".$Class."','".$Arm."','".$House."','".$AcadYear."','".$StudentStatus."','".$StudDOB."')"))
			//	{
	      	//	echo '<script type="text/javascript">alert("New Student Inserted Succesfully");window.location=\'AddStudent.php\';</script>';
			//	}
		}
		else 
		{
			$error = "The  Admission number is already assigned to another student";

			//echo '<script type="text/javascript">alert("The Admission Number is already assigned to another student");window.location=\'AddStudent.PHP\';</script>';
		}

	}
?> 


<body>
<br><br><br>

<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" action="<?php url_for('admin/student/addStudent.php');?>">
<table width="600">
	<tr>
		<td align = "center"><img src = "<?php echo url_for('images/Headpix.png');?>" width="500"></td>
	</tr>
	<tr>
		<td><center><font color="#660066" size="+3">Add Student</font></center></td>
	</tr>
	<tr>
		<td><center><h4><?php echo $error ?? ''; ?></h4></center></td>
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
			<?php include(SHARED_PATH . '/studClass.php'); ?>
			<?php include(SHARED_PATH . '/schArms.php'); ?>
			<?php include(SHARED_PATH . '/studHouse.php'); ?>
			
			<!--Adding Academic Year -->
			<?php include(SHARED_PATH . '/acadYear.php'); ?>
			
			<!--Adding Student Status -->
			<?php include(SHARED_PATH . '/sStatus.php'); ?>
			
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
