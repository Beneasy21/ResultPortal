<?php

require_once('../../private/initialize.php');

include(SHARED_PATH . '/resultHeader.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/admins/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  $admin = [];
  $admin['id'] = $id;
  $admin['first_name'] = $_POST['first_name'] ?? '';
  $admin['last_name'] = $_POST['last_name'] ?? '';
  $admin['email'] = $_POST['email'] ?? '';
  $admin['username'] = $_POST['username'] ?? '';
  $admin['password'] = $_POST['password'] ?? '';
  $admin['confirm_password'] = $_POST['confirm_password'] ?? '';

  $result = update_admin($admin);
  if($result === true) {
    $_SESSION['message'] = 'Admin updated.';
    redirect_to(url_for('/admin/dashboard.php'));
  } else {
    $errors = $result;
  }
} else {
  $admin = find_admin_by_id($id);
}

?>

<?php $page_title = 'Edit Admin'; ?>
<?php //include(SHARED_PATH . '/staff_header.php'); ?>

<div class="container shadow">
  
  <div class="row text-center">
	<div class="col-6-md mx-auto">
	  <img  src="<?php echo url_for('images/Logo.png');?>">	
	</div>
  </div>
  <div class="row text-center">
	<div class="col-6-md mx-auto">
	  <h1>COMMAND SECONDARY SCHOOL - LAGOS	</h1>
	</div>
  </div>
  <div class="row p-2">
	  <div class="col-8-md mx-auto shadow">
        <a class="btn btn-primary py-2" href="">Back To Results</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-primary py-2" href="<?php echo url_for('/admin/new.php');?>">Add New Admin</a>  
        <a class="btn btn-danger py-2" href="<?php echo url_for('/admin/logout.php');?>">Logout</a>  

    </div>
  </div>
  <div class="row">
    <?php include(SHARED_PATH . '/leftSideBar.php');?>

    <!-- //Begin of Right Content area -->
    <div class="col-md-8 mx-auto shadow">
      <div class="row">
        <div class="col-8-md">
          <h1>Edit Admin</h1>

          <?php echo display_errors($errors); ?>
        </div>
      </div>
      <form action="<?php echo url_for('/admin/editMyProfile.php?id=' . h(u($id))); ?>" method="post">
      <div class="row">
        <div class="col-6-md p-2 m-2">
          <div class="form-gorup">
            First name: 
            <input class="form-control" type="text" name="first_name" value="<?php echo h($admin['first_name']); ?>" />
          </div>
          <div class="form-gorup">
            Username: 
            <input class = "form-control" type="text" name="username" value="<?php echo h($admin['username']); ?>" />
          </div>
          <div class="form-gorup">
            Password: 
            <input class="form-control" type="password" name="password" value="" />
          </div>
        </div>    

        <div class="col-6-md p-2 m-2">
          <div class="form-gorup">
            Last name: 
            <input class="form-control" type="text" name="last_name" value="<?php echo h($admin['last_name']); ?>" />
          </div>
          <div class="form-gorup">
            Email: 
            <input class="form-control" type="text" name="email" value="<?php echo h($admin['email']); ?>" />
          </div>
          <div class="form-gorup">
            Confirm Password: 
            <input class="form-control" type="password" name="confirm_password" value="" />
          </div>
        </div>    
      </div>
      <div class="row">
        <div class="col-8-md text-center">
            <p class= "px-4 text-danger">
            Passwords should be at least 12 characters and include 
            at least one uppercase letter, lowercase letter, 
            number, and symbol.
            </p>
            <input class="form-control btn btn-primary" type="submit" value="Edit Admin" />
        </div>    
      </div>  
    </form>
    </div>
  </div>
<div class="row bg-secondary">
<?php include(SHARED_PATH . '/adminFooter.php'); ?>
</div>

