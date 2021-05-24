<?php
	require_once('../../private/initialize.php');
	require_login();

	$page_title = 'Command:: Result Home';
	include(SHARED_PATH . '/general_header.php');
?> 
<body>
	<main class = "container mt-5">
	<div class="w-50 p-3 mx-auto shadow-lg rounded">
		<div class="row pt-10">
			<div class="col mx-auto">
				<img class="w-100" src="<?php echo url_for('/images/Header.png');?>" width="600" height="100"><hr>
			</div>
		</div>
		<div class="row">
			<div class="col mx-auto">
				<marquee><h4>W e l c o m e <?php 
					$admin = find_admin_by_id($_SESSION['admin_id']);
					echo $admin['first_name'] . ' '. $admin['last_name'];
				?></h4></marquee>		
			</div>
		</div>
		<div class="row">
			<div >
				

			</div>
		</div> 
		<div class="row">
			<div class="mx-auto">
				What do you want to do?
			</div>
		</div>
		
		<div class="row pb-2">
			<div class="col-6">
				<a href="<?php	echo url_for('Admin/Results/toAddTest.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Enter a Score</a>
			</div>
			<div class="col-6">
				<a href="<?php	echo url_for('Admin/Results/secondPage.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Results</a>
			</div>
			
		</div>

		<div class="row pb-2">
			<div class="col-6">
				<a href="<?php echo url_for('Admin/Results/tobroadsheet.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Termly Broadsheet</a>
			</div>
			<div class="col-6">
				<a href="<?php echo url_for('Admin/Results/toannualBroadsheetReal.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Annual Broadsheet</a>
			</div>			
		</div>

		
	</div>
	</main>

</body>
</html>