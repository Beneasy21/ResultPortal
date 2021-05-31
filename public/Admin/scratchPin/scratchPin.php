<?php

include('../../../private/initialize.php');


	$pinCharacters = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$sNoCharacters = "123456789";

	$n = 1; ?>
	<table border="1">
		<thead>
			<td>S/No</td>
			<td>PIN</td>
			<td>hashed_PIN</td>
		</thead>

	<?php
	while($n <= 50){
		$i = substr(str_shuffle($pinCharacters), 0, 15);
		$p = substr(str_shuffle($sNoCharacters), 0, 9);
		$sNo = "CSSL".$p;

		$card = [];
		$card['pin'] = $i;
		$card['sNo'] = $sNo;
		//$hashedPins = password_hash($i,PASSWORD_DEFAULT);

		insert_cards($card);
		$n++;
		?>

	
		<table border="1">
			<tbody>
				<td><?php  echo $n;?></td>
				<td><?php  echo $card['pin'];?></td>
				<td><?php  echo $card['sNo'];?></td>
			</tbody>
		</table>
	<?php

	}
	
?>