<?php
    require_once('../../../private/initialize.php');

    $admins = find_all_admins();
?>

<?php 
    $pageTitle = 'Admins';
    include(SHARED_PATH . '/resultHeader.php');
?>

<div class="container">
  <div class="row">
	<div class="col-md-6 mx-auto shadow">
        <a href="">Back To Results</a>  
        <a href="">Add New Admin</a>  
        <a href="">Add New Admin</a>  
    </div>
  </div>
  <div class="row">
	<div class="col-md-6 mx-auto shadow">
	  <div class="row text-center">
		<div class="col-6-md mx-auto">
	  	  <table class="table table-border">
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Username</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>
            <?php while($admin = mysqli_fetch_assoc($admins)) { ?>
            <tr>
              <td><?php echo h($admin['id']);?></td>
              <td><?php echo h($admin['firstName']);?></td>
              <td><?php echo h($admin['lasstName']);?></td>
              <td><?php echo h($admin['email']);?></td>
              <td><?php echo h($admin['username']);?></td>
              <td><a href="<?php echo url_for('/admin/staff/show.php?id='. h(u($admin['id']))) ?>">View</a></td>
              <td><a href="<?php echo url_for('/admin/staff/edit.php?id='. h(u($admin['id']))) ?>">Edit</a></td>
              <td><a href="<?php echo url_for('/admin/staff/delete.php?id='. h(u($admin['id']))) ?>">Delete</a></td>
            </tr>
          </table>

          <?php } mysqli_free_result($admins); ?>
		</div>
	  </div>
    </div>
  </div>
</div>