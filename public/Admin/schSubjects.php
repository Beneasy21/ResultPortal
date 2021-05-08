						<tr>
					   <td> Subject</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblSubjects")
						?>
						<select name="Subject" id="Subject" required="required">
						<option value=''></option>
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$SubId = $rows['subId'];
								$SubName = $rows['subName'];
								echo"<option value='$SubId'>$SubName</option>";
							}
						?>
						</select>
						</td>
						</tr>