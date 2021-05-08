<?php
//session_start();
//$name=$_SESSION['eid'];
include("config.php");

$RegNo=$_REQUEST['regNo'];
$Name=$_REQUEST['Name'];
$Class=$_REQUEST['class'];
$Session=$_REQUEST['sess'];
$Term=$_REQUEST['term'];
$Amount=$_REQUEST['amount'];
$PaidInBy=$_REQUEST['paidInBy'];
$dat=date("Y-m-d h-i-s");
$RecievedBy=$_REQUEST['recievedBy'];


if($_REQUEST['sub'])
  {
    if(mysql_query("insert into fees  values('','$RegNo','$Name','$Class','$Session','$Term','$Amount','$PaidInBy','$dat','$RecievedBy') "))
	   {
	    echo "<font size='+2'>Student Record inserted successfully</font> </br>";
				
		}
	else
	 {
	   echo "Fees was not inserted";
	   }
	}   
		 
?><head>
<script>
</script>

</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<?PHP
echo $RegNo;echo $Name;echo $Session;echo $Term;echo $Amount;echo $PaidInBy;echo $dat;echo $RecievedBy;
?>
<center><font color="#660066" size="+3">Make a payment</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post">
<table align="center" border=1>
<tr>
	<td>Reg No:</td><td><input type="text" name="regNo"</td>
</tr>
<tr>
	<td>Name:</td><td><input type="text" name="Name"</td>
</tr>
<tr>
	<td>Class:</td><td><input type="text" name="class"</td>
</tr>
<tr>
	<td>Session:</td><td><input type="text" name="sess"</td>
</tr>
<tr><td width="111"><span class="style3">Term:</span></td>
<td width="264"><select name="term" >
  <option value=''> </option>
  <option value='first'>First</option>
  <option value='second'>Second</option>
  <option value='third'>Third</option>
 
</select></td>
</tr>
<tr>
	<td>Amount:</td><td><input type="text" name="amount"</td>
</tr>
<tr>
	<td>Paid In By:</td><td><input type="text" name="paidInBy"</td>
</tr>
<tr><td width="111"><span class="style3">Recieved By:</span></td>
<td width="264"><select name="recievedBy" >
  <option value=''> </option>
  <option value='John'>John</option>
  <option value='James'>James</option>
 
</select></td>
</tr>


<tr><td align="center"><input name="sub" type="submit" value="Pay Now"></td><td align="center"><input name="reset" type="reset" value="Reset"></td></tr>
</table>
</form>
</fieldset></center>
</body>
</html>