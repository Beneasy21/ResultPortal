<?php
    require_once('../../private/initialize.php');

    require_login();

    $admins = find_all_admins();
?>

<?php 
    $pageTitle = 'Admins';
    include(SHARED_PATH . '/resultHeader.php');
?>
<?php echo display_session_message(); ?>
<div class="container shadow">
  <div class="row">
    <div class="col-md-8 mx-auto shadow py-5">
    <div class="row text-center">
	<div class="col-8-md mx-auto">
	  <img  src="<?php echo url_for('images/Logo.png');?>">	
	</div>
  </div>
  <div class="row text-center">
	<div class="col-8-md mx-auto">
	  <h2>COMMAND SECONDARY SCHOOL - LAGOS	</h2>
	</div>
  </div>
  <div class="row p-2">
	  <div class="col-8-md mx-auto shadow">
        <a class="btn btn-primary py-2" href="">Back To Results</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-danger py-2" href="<?php echo url_for('/admin/logout.php');?>">Logout</a>  

    </div>
  </div>
  <div class="row">
    <?php include(SHARED_PATH . '/leftSideBar.php');?>

<!-- //Begin of Right Content area -->
        <div class="col-md-9 mx-auto shadow">
          <div class="row p-2 mx-auto">
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="<?php echo url_for('/admin/firstpage.php');?>" class="text-white text-center"><h4>Results</h4></a>
              <div><img src="<?php echo url_for('/images/PrintRes.jpg');?>" alt="" style ="width:80px; height:50px"></div>
            </div>
            <div class="col-md-3 bg-primary p-4 m-2">
              <a href="" class="text-white text-center"><h4>Students</h4></a>
            </div>
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="" class="text-white text-center"><h4>Staff</h4></a>
            </div>
          </div>

          <div class="row p-2 mx-auto">
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="<?php echo url_for('/admin/acadyr/index.
              php');?>" class="text-white text-center"><h4>Academic year</h4></a>
            </div>
            <div class="col-md-3 bg-primary p-4 m-2">
              <a href="" class="text-white text-center"><h4>Subject</h4></a>
            </div>
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="" class="text-white text-center"><h4>Class</h4></a>
            </div>
          </div>

          <div class="row p-2 mx-auto">
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="<?php echo url_for('/admin/firstpage.php');?>" class="text-white text-center"><h4>Arm</h4></a>
            </div>
            <div class="col-md-3 bg-primary p-4 m-2">
              <a href="" class="text-white text-center"><h4>House</h4></a>
            </div>
            <div class="col-md-3 bg-secondary p-4 m-2">
              <a href="" class="text-white text-center"><h4></h4></a>
            </div>
          </div>

        </div>
  </div>
  
  </div>
</div>  
    </div>
  </div>
  