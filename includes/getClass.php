						
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblclass WHERE classsId = '$CurrentClass'");
						
							while($rows = $res -> fetch_assoc())
							{
								$ClassName = $rows['classsName'];
								
							}
						?>
						</select>
						</td>
						</tr>