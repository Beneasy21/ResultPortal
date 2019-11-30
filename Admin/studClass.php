						<tr>
					   <td> Class</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblClass")
						?>
						<select name="studClass" id="studClass" required="required">
						<option value=''></option>
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$ClasssId = $rows['classsId'];
								$ClasssName = $rows['classsName'];
								
								echo"<option value='$ClasssId'>$ClasssName</option>";
							}
						?>
						</select>
						</td>
						</tr>