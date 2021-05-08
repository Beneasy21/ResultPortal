<?php
	require_once('../../private/initialize.php');

	$page_title = 'Command:: Home';
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
				<marquee><h4>W e l c o m e Admin!</h4></marquee>		
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
			<div class="col-4">
				<a href="<?php	echo url_for('Admin/Results/toAddTest.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Enter a Score</a>
			</div>
			<div class="col-4">
				<a href="<?php	echo url_for('Admin/Results/secondPage.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Results</a>
			</div>
			<div class="col-4">
				<a href="<?php	echo url_for('Admin/Students/AddStudent.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Add a Student</a>
			</div>
					
		</div>
		<div class="row pb-2">
			
				<div class="col-4">
				<a href="<?php	echo url_for('Admin/Comments/toAddComments.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Enter Comments</a>
			</div>


			<div class="col-4">
				<a href="viewIRS.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Edit IRS/CRS</a>
			</div>
			<div class="col-4">
				<a href="viewNL.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Edit Nig Language</a>
			</div>
		</div>
		<div class="row pb-2">
			<div class="col-4">
				<a href="viewStudent.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">View All Students </a>
			</div>
			<div class="col-4">
				<a href="viewcomment.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">View Comments</a>
			</div>
			<div class="col-4">
				<a href="viewResult.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">View Results</a>
			</div>
		</div>
		<div class="row pb-2">
			<div class="col-4">
				<a href="<?php echo url_for('admin/results/tobroadsheet.php') ;?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Termly Broadsheet</a>
			</div>
			<div class="col-4">
				<a href="<?php echo url_for('Admin/results/toannualBroadsheetReal.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Annual Broadsheet</a>
			</div>			
			<div class="col-4">
				<a href="viewResAbove.php" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Upload results</a>
			</div>
		</div>
		<hr>

		<!-- Teachers Section-->
		Teachers
		<div class="row pb-2">
			<div class="col-4">
				<a href="" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">View All teacher</a>
			</div>
			<div class="col-4">
				<a href="" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Allocate subject</a>
			</div>			
			<div class="col-4">
				<a href="" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Select FormMaster</a>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p  class="mx-auto">Return to <a href="index.php">login page</a>   <a href="includes/logout.php">Log out</a>
			</div>
		</div>

		</div>
		
	</div>
	</main>

</body>
</html>