<?php  
	require_once('../../../private/initialize.php');

	$page_title = 'Command: Broadsheet';
	include(SHARED_PATH . '/resultHeader.php');
?>
<div class="container pt-5"> 
	<div class="row">
		<div class="col-md-6 mx-auto shadow">
			<div class="row text-center">
				<div class="col-6-md mx-auto">
					<img  src="<?php echo url_for('images/Logo.png');?>">	
				</div>
			</div>
			
			<div class="row text-center">
				<div class="col-6-md mx-auto">
					
				</div>
			</div>
              <form id="form1" name="form1" method="post" action="<?php echo url_for('Admin/results/annualBroadsheetReal.php');?>">
			  <div class="row text-center">
				<div class="col-6-md mx-auto">
				<?php 
						include(SHARED_PATH . '/acadYear.php');
						include(SHARED_PATH . '/studClass.php');
						include(SHARED_PATH . '/schArms.php');
					  ?>
				</div>
			</div>
			<div class="row">
					<div class="col-md-6 mx-auto pb-2">
						<input type="submit" name="button" id="button" value="Proceed" class="btn btn-primary form-control">
					</div>
					<div class="col-md-6">
						<input type="reset" value="Reset" class="btn btn-warning form-control">
					</div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>