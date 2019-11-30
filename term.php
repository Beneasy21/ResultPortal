						<tr>
					   <td> Term</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblterm")
						?>
						<select name="Term" id="Term" required="required">
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$TId = $rows['termId'];
								$TName = $rows['termName'];
								echo"<option value=''></option>";
								echo"<option value='$TId'>$TName</option>";
							}
						?>
						</select>
						</td>
						</tr>