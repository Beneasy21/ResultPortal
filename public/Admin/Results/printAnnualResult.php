<?php  
	require_once('../../../private/initialize.php');
	require_login();

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
					<h4>You are printing Annual Summary</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 pb-2">
					<a class="btn btn-primary form-control" href="<?php echo url_for('Admin/Results/annualBatchResult.php');?>">Print Results In batches</a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-primary form-control" href="<?php echo url_for('Admin/Results/getAnnualResult.php');?>">Print Result Individually</a>
				</div>
			</div>
			</div>
			</div>
			
		</div>
	</div>
</body>
</html>
