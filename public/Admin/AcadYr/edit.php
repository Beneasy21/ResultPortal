<?php
include_once('../../../private/initialize.php');
require_login();

if(!isset($_GET['id'])){
    redirect_to(url_for('/Admin/acadyr/index.php'));
}
$id = h($_GET['id']);

if(is_post_request()){

    $AcadYr[] = array();
    $AcadYr['acadYrId'] = $id;
    $AcadYr['longName'] = h($_POST['longName']);
    $AcadYr['shortName'] = h($_POST['shortName']);

    $result = updateAcadYr($AcadYr);
    if($result === true){
        redirect_to(url_for('/admin/AcadYr/show.php?id='.$id));
   }else{
       $errors = $result;
   }
}else{
    $AcadYr = getAcadYrById($id);
}
?>
<?php 


$pageHeading = "Add Academic Year";
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
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/acadYr/index.php');?>"> Back to List</a></li>
        <li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo url_for('/admin/dashboard.php');?>"> Back to Admin Dashboard</a></li>
   </nav>
    <div class="row text-center ">

        <div class="col-xs-12 col-sm-6 mx-auto shadow">
        <form action="<?php echo url_for('Admin/AcadYr/edit.php?id='.$id);?>" name="editAcadYrForm" id="editAcadYrForm" method="post">
            <div class="form-group ">
                <input class="form-control m-2" type="text" name="longName" id="longName" value="<?php echo $AcadYr['acadYrName'];?>">
            </div>
            <div class="form-group ">
                <input class="form-control m-2" type="text" name="shortName" id="shortName" value="<?php echo $AcadYr['acadYrDesc'];?>">
            </div>
            <div class="form-group p-2">
                <input class="btn btn-primary form-control" type="submit" value="Update Academic Year">
            </div>

        </form>
        </div>
    </div>

    </div>
</div>
    