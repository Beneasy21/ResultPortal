<!-- Begin of left Side bar -->
<div class="col-md-3 mx-auto shadow bg-light">
          <div class="row">
            <div class="col">
                <h4>Welcome </h4>
                <?php 
                    $admin = find_admin_by_id($_SESSION['admin_id']);
                    echo $admin['first_name'] ."  " .$admin['last_name'];
                ?>    
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div><a href="<?php echo url_for('/admin/editMyProfile.php?id='.h(u($_SESSION['admin_id'])));?>">Edit My Profile</a>  </div>
              <div><a href="<?php echo url_for('/admin/logout.php');?>">Logout</a>  </div>
              <div><a href="<?php echo url_for('/admin/logout.php');?>">Logout</a>  </div>
            </div>
          </div>

        </div>
<!-- //End of left Side bar -->