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
<?php

echo '<body>

<div id="containt" align="center">
<form action="result.php" method="post">
<table border=1 bgcolor=cream>
<tr>
	<td>
<div id="header"><h2 class="sansserif" align="center">Enter your Reg No</h2></div>
	</td>
</tr>
 <tr>
	<td> 
		<table>
			<tr>
				<td>Reg No:</td>
				<td> <input type="text" name="RegNo" size="20"></td>
			</tr>';
			include 'acadYear.php';
			include 'term.php';
			include 'studClass.php';
			
			
			
			echo '	 
			<tr>
				 <td ><input type="submit" value="Continue"></td>
				 <td align="center"><input type="reset" value="Reset"></td>
			</tr>
			
			</form>';
			?>
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
