<?php
include_once('../../../private/initialize.php');
require_login();

$pageHeading = "Academic Year";
include_once(SHARED_PATH .'/resultHeader.php');

?>
<div class="container">
<div class="row">
    <div class="col-xs-12 mx-auto">
        <h1><?php echo $pageHeading;?></h1>
    </div>
</div>
<nav class="nav navbar-inline">
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/AcadYr/new.php');?>"> Create New</a></li>
		<!--<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php //echo url_for('/admin/AcadYr/index.php');?>"> Back to List</a></li>-->
        <li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/dashboard.php');?>"> Back to Admin Dashboard</a></li>
   </nav>

<div class="row">
    <div class="col-xs-12 table-responsive">
        <table class="table ">
            <tr>
                <th>Long Name</th>
                <th>Short Name</th>
                <th>View</a></th>
                <th>Edit</a></th>
                <th><i class="fas fa-trash"></i>Delete</a></th>
            </tr>
            <?php 
                $acadYrs = getAcadYr();
                foreach($acadYrs as $acadYr){
            ?>
            <tr>
                <td><?php echo $acadYr['acadYrName'];?></td>
                <td><?php echo $acadYr['acadYrDesc'];?></td>
                <td><a href="<?php echo url_for('/admin/acadyr/show.php?id='.$acadYr['AcadYrId']);?>">View</a></td>
                <td><a href="<?php echo url_for('/admin/acadyr/edit.php?id='.$acadYr['AcadYrId']);?>">Edit</a></td>
                <td><a href="<?php echo url_for('/admin/acadyr/delete.php?id='.$acadYr['AcadYrId']);?>"><i class="fas fa-trash"></i>Delete</a></td>
            </tr>
            <?php     
               }?>
        </table>
    </div>
    </div>

</div>    
</div>
