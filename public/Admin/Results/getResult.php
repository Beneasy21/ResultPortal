<?php  
	require_once('../../../private/initialize.php');
	require_login();

	$page_title = 'Command: Result Checker';
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
			
			<div class="row">
				<marquee behavior=alternate><font size=6 color=red>Welcome to the result checking portal</font></marquee>
			</div>	
			<form action="<?php echo url_for('Admin/Results/result.php');?>" method="post">
				<div class="row">
					<div class="col-md-6 mx-auto">
						<h3>Enter your Details</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mx-auto">
						<div class="form-group">
							<div class="row pb-2">
								<input type="text" name="RegNo" size="20" placeholder="Enter Reg No" class="form-control">
							</div>
							<?php 
								include(SHARED_PATH . '/acadYear.php');
								include(SHARED_PATH . '/term.php');
								//include(SHARED_PATH . '/studClass.php');
								//include(SHARED_PATH . '/schArms.php'); 
							?>					
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mx-auto pb-2">
						<input type="submit" value="Continue" class="btn btn-primary form-control">
					</div>
					<div class="col-md-6">
						<input type="reset" value="Reset" class="btn btn-warning form-control">
					</div>
			</form>
			</div>
		
	</div>
</body>
</html>