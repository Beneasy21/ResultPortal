<?php
include_once('../../../private/initialize.php');

if(!isset($_GET['id'])){
    redirect_to(urlFor('/Admin/classs/index.php'));
}
$id = h($_GET['id']);

if(is_post_request()){

    $Classs[] = array();
    $Classs['classsId'] = $id;
    $Classs['longName'] = h($_POST['longName']);
    $Classs['shortName'] = h($_POST['shortName']);

    $result = updateClasss($Classs);
    if($result === true){
        redirect_to(urlfor('/admin/Classs/show.php?id='.$id));
   }else{
       $errors = $result;
   }
}else{
    $Classs = getClasssById($id);
}
?>
<?php 


$pageHeading = "Add Class";
include_once(SHARED_PATH .'/adminHeader.php');
?>
    <div class="row">
        <div class="col-xs-12 mx-auto">
        <h1><?php echo $pageHeading;?></h1>
        </div>
    </div>
    <nav class="nav navbar-inline">
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo urlFor('/admin/classs/new.php');?>"> Create New</a></li>
		<li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo urlFor('/admin/classs/index.php');?>"> Back to List</a></li>
        <li class="mr-4 p-2"><a class="btn btn-primary" href="<?php echo urlFor('/admin/index.php');?>"> Back to Admin Dashboard</a></li>
   </nav>
    <div class="row text-center ">

        <div class="col-xs-12 col-sm-6 mx-auto shadow">
        <form action="<?php echo urlFor('Admin/classs/edit.php?id='.$id);?>" name="editClasssForm" id="editClasssForm" method="post">
            <div class="form-group ">
                <input class="form-control m-2" type="text" name="longName" id="longName" value="<?php echo $Classs['classsLName'];?>">
            </div>
            <div class="form-group ">
                <input class="form-control m-2" type="text" name="shortName" id="shortName" value="<?php echo $Classs['classsSName'];?>">
            </div>
            <div class="form-group p-2">
                <input class="btn btn-primary form-control" type="submit" value="Update Class">
            </div>

        </form>
        </div>
    </div>

</div>