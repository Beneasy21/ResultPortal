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
			<td>Naked PIN</td>
		</thead>

	<?php
	$cards = read_cards();

	foreach ($cards as $card) {  

    $dec_pin = decrypt_it($card['hashed_pin']);
    	$n++;	?>

	
		<table border="1">
			<tbody>
				<td><?php  echo $n;?></td>
				<td><?php  echo $card['serial'];?></td>
				<td><?php  echo $card['hashed_pin'];?></td>
				<td><?php  echo $dec_pin;?></td>
			</tbody>
		</table>
	<?php

	}
	
?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			div.			
		</div>
	</div>	
</div>