<?php  
	require_once('../../../private/initialize.php');

	$page_title = 'Command: Print Result';
	include(SHARED_PATH . '/resultHeader.php');
?>

<div class="container">
	<div class="row">
	<div class="col-md-8 mx-auto shadow p-5 mt-3">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<img  src="<?php echo url_for('images/Logo.png');?>">	
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="row">
				<div class="col-md-6 pb-3">
					Welcome! <?php $userName ?? '';?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h5 class="text-danger">You are about to print Results.</h5>
					<h6 class="text-warning">Select to Continue</h6>
				</div>
			</div>
			<div class="row pt-2">
				<div class="col-md-6 pb-2">
					<a class="btn btn-primary form-control" href="<?php echo url_for('Admin/Results/printResult.php');?>">Print Termly Results</a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-primary form-control" href="<?php echo url_for('Admin/Results/printAnnualResult.php');?>">Print Annual Summary</a>
				</div>
			</div>
			</div>
			</div>
			
		</div>
	</div>
</body>
</html>
