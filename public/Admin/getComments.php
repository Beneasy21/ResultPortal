<?php 

require_once('../../private/initialize.php');

$result_set = find_all_comments();

while($comment = mysqli_fetch_assoc($result_set))
{	
	?>
	<table border="1" width = "800px">
	<tr>
		<td width="8%"><?= $comment['commId'];?></td>
		
		<td width = "8%"><?= $comment['studId'];?></td>
		<td width = "8%"><?= $comment['acadYr'];?></td>
		<td width = "8%"><?= $comment['term'];?></td>
		<td width = "20%"><?= $comment['classTeacher'];?></td>
		<td width = "20%"><?= $comment['houseParent'];?></td>
		<td width = "20%"><?= $comment['commandant'];?></td>
		<td width = "20%"><a href=<?php echo url_for('/Admin/show.php?id=' .h(u($comment['commId'])));?>>View</a></td>
		<td width = "20%"><a href="">Edit</a></td>



	</tr>
	</table>
<?php } ?>
