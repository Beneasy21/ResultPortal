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
<form action="annualResult.php" method="post">
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
				<td>Reg No:</td>
				<td> <input type="text" name="RegNo" id="RegNo" size="20"></td>
			</tr>
			<tr>
				<td>Session:</td><td><select name="AcadYr" id="AcadYr">
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
				</td>
			</tr>
			
			<tr>
				<td>Class:</td><td><select name="Class" id="Class">
                           <option></option>
                          <option value = "JSS 1">JSS 1</option>
                          <option value = "JSS 2">JSS 2</option>
                          <option value = "JSS 3">JSS 3</option>
						  <option value = "SSS 1">SSS 1</option>
                          <option value = "SSS 2">SSS 2</option>
                          <option value = "JSS 3">SSS 3</option>
                          </select>
				</td>
				
				</tr>
			
				 
			<tr>
				 <td ><input type="submit" value="Continue"></td>
				 <td align="center"><input type="reset" value="Reset"></td>
			</tr>
			
			</form>';
			
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
