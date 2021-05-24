<?php
include_once('../../../private/initialize.php');
require_login();

$id = h($_GET['id']);

$AcadYr = getAcadYrById($id);

$pageHeading = $AcadYr['acadYrName'];
include_once(SHARED_PATH .'/resultHeader.php');

?>

<div class="container">
<div class="row">
        <div class="col-xs-12 mx-auto">
        <h1><?php echo $pageHeading;?></h1>
        </div>
    </div>
    <nav class="nav navbar-inline">
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/acadyr/new.php');?>"> Create New</a></li>
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/acadyr/index.php');?>"> Back to List</a></li>
        <li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/dashboard.php');?>"> Back to Admin Dashboard</a></li>
   </nav>
   
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <div>
            <p>Acad Year Name  = <?php echo $AcadYr['acadYrName'];?></p>
            <p>Acad Year Abbreviation  = <?php echo $AcadYr['acadYrDesc'];?></p>
            </div>
        </div>
    </div>

</div>
</div>

    