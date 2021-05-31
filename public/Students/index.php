<?php
    require_once('../../private/initialize.php');

    require_student_login();

    //$studId = h(u($_SESSION['stud_id'])) ?? '1000000';
    $studId = h($_SESSION['studId']) ?? '';

    $student = fetch_student_by_id($studId);
    $studClass = find_className($student['currentClass']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/bootstrap.min.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/myStyles.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('stylesheets/custom.css'); ?>" />

    <title>Document</title>
</head>
<body>
	<div class="container tea">
		<header class="text-center header rounded">
			<div class="p-2">
				<img src="<?php echo url_for('images/Header.png');?>" alt="header pix" >	
			</div>
		</header>
		<div class="row p-2">
			<div class="col-md-3 ash rounded">
				<div class="text-center p-3">
					<img class="img rounded-circle" src="<?php echo url_for('images/Logo.png');?>" alt="Logo pix" style="height: 120px; width:120px;">		
				</div>
				<p>Welcome, <?= $student['studName'] ?? '';?></p>			
				<ul>
					<li><a href="<?php echo url_for('students/myResults.php?studId='.$studId.'&arm='.$student['arm']); ?>">Results</a></li>
					
					<li><a href="">Payments</a></li>
					<li><a href="">Profile</a></li>
					<li><a href="">Assignments</a></li>
					<li><a href="<?php echo url_for('students/logout.php');?>">Logout</a></li>
				</ul>
			</div>
			<div class="col-md-9 blue rounded">
				<!-- This is the first row on the right-->
				<div class="row">
					<div class="col-9" class="text-right">
						<!-- Here could be left empty. just fill it in	 -->
					</div>
					<div class="col-3" class="text-right">
						<img class="img rounded p-2" src="<?php echo url_for('images/Logo.png');?>" alt="Logo pix" style="height: 160px; width:160px;">			
					</div>
				</div>	
				<div class="row">
					<div class="col">
						Students' Name: <?= $student['studName'] ?? '';?>
					</div>
					<div class="col">
						Sex: <?php echo $student['sex'] ?? '';?>
					</div>
					<div class="col">
						Class: <?php echo $studClass['classsName'] ?? '';?>
					</div>
				</div>
			</div>
		</div>
		<footer class="text-center header rounded">
			<div class="p-2">
				&copy; <?php echo date("Y"). " ";?>   All rights reserved
			</div>
		</footer>
	</div>
	
	    
</body>
</html>