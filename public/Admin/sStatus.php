						<tr>
					   <td> Status</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblsStatus")
						?>
						<select name="sStatus" id="sStatus" required="required">
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$SStatusId = $rows['sStatusId'];
								$SStatusName = $rows['sName'];
								echo"<option value=''></option>";
								echo"<option value='$SStatusId'>$SStatusName</option>";
							}
						?>
						</select>
						</td>
						</tr>