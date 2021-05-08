						<tr>
					   <td> House</td> <td>
						<?php
						$c = New MySQLi('localhost','root','','comschoolmand');
						
						$res = $c->query("SELECT * FROM tblHouse")
						?>
						<select name="studHouse" id="studHouse" required="required">
						<?php 
							while($rows = $res -> fetch_assoc())
							{
								$HouseId = $rows['houseId'];
								$HouseName = $rows['houseName'];
								echo"<option value=''></option>";
								echo"<option value='$HouseId'>$HouseName</option>";
							}
						?>
						</select>
						</td>
						</tr>