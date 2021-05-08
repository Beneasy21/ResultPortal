<tr>
   <td> Status</td> <td>
	<?php
		$res = find_status();
	?>
	<select name="sStatus" id="sStatus" required="required">
	<option value=''></option>
	<?php
		while($rows = mysqli_fetch_assoc($res)){
			$SStatusId = $rows['sStatusId'];
			$SStatusName = $rows['sName'];
			echo"<option value='$SStatusId'>$SStatusName</option>";
		}
	?>
	</select>
	</td>
</tr>