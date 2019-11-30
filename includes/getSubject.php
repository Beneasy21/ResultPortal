						
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblsubjects WHERE subId = '$Subject'");
						
							while($rows = $res -> fetch_assoc())
							{
								$SubjectName = $rows['subName'];
								
							}
						?>
						</select>
						</td>
						</tr>