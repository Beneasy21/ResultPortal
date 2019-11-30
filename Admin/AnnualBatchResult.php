<html>
<head>
<title>My School::Result checker</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body background = 'Page-BgTexture.jpg'>
<table size="700" border = 5 align = center>
<tr>
<td> <img width ="700" height = "150" src="images/Header.png"></td>
</tr>
<tr>
<td><marquee behavior=alternate><font size=6 color=red>Welcome to the result checking portal</font></marquee>	</td>
</tr>
<tr>
<td>


<body>

<div id="containt" align="center">
<form action="printAnnualBatchResult.php" method="post">
<table border=1 bgcolor=cream>
<tr>
	<td>
<div id="header"><h2 class="sansserif" align="center">Enter your Details</h2></div>
	</td>
</tr>
 <tr>
	<td> 
		<table>
			<tr>
				<td>Class:</td><td> <?php include 'includes/studClass.php';?></td>
			</tr>
			<tr>
			<td>Arm:</td><td><?php include 'includes/schArms.php';?></td>
			</tr>
				
			<tr>
				<td>Academic Year:</td><td> <?php include 'includes/acadYear.php';?></td>
			</tr>
				 
			<tr>
				 <td ><input type="submit" value="Continue"></td>
				 <td align="center"><input type="reset" value="Reset"></td>
			</tr>
			
			</form>
			
		</table>
	</td>
	</tr>
 </table>
 </td>
 </tr>
 
 </table>
</div>
</body>
</html>
