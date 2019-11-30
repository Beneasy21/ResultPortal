						<tr>
					   <td> Session</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblAcadYr")
						?>
						<select name="acadYr" id="acadYr" required="required">
						<option value=''></option>
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$AYId = $rows['AcadYrId'];
								$AYName = $rows['acadYrName'];
								echo"<option value='$AYId'>$AYName</option>";
							}
						?>
						</select>
						</td>
						</tr>