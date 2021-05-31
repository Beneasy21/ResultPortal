<?php
  require_once('../../private/initialize.php');
  require_login();

  $page_title = 'Command:: Result Home';
  include(SHARED_PATH . '/general_header.php');
  include(SHARED_PATH . '/resultHeader.php');
?> 
<body>
  <main class = "container-fluid p-3" style ="background-image:url(<?php echo url_for('images/background.png')?>);">
    <div class="row container mx-auto m-2">
      <div class="col text-center">
        <div class="row pt-10 rounded teal">
          <div class="col mx-auto">
            <img src="<?php echo url_for('/images/logo.png');?>" 
                width="100" height="80" class="text-center rounded-circle" alt="">
                <h3>COMMAND SECONDARY SCHOOL - LAGOS</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 tea pt-4 rounded">
            <div class="row ">
              <div class="col teal rounded m-1">
                <marquee><h4>W e l c o m e </h4></marquee>   <?php 
                $admin = find_admin_by_id($_SESSION['admin_id']);
                echo $admin['first_name'] . ' '. $admin['last_name'];?>    
                <hr>
                <ul class="text-decoration-none">
                  <li><a href="">Staff</a></li>                  
                  <li><a href="">Student</a></li>                  
                  <li><a href="">Result</a></li>                  
                  <li><a href="">Staff</a></li>                  

                </ul>
              </div>
            </div>
            <div class="row text-center">
              <div class="col teal rounded m-1">
                
              
              </div>
            </div>
            
          </div>
          <div class="col-md-9 team pt-4 rounded">
            <div class="row pb-2">
      <div class="col-6">
        <a href="<?php  echo url_for('Admin/Results/toAddTest.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Enter a Score</a>
      </div>
      <div class="col-6">
        <a href="<?php  echo url_for('Admin/Results/secondPage.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Results</a>
      </div>
      
    </div>

    <div class="row pb-2">
      <div class="col-6">
        <a href="<?php echo url_for('Admin/Results/tobroadsheet.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Termly Broadsheet</a>
      </div>
      <div class="col-6">
        <a href="<?php echo url_for('Admin/Results/toannualBroadsheetReal.php');?>" class="btn btn-dark btn-sm mr-2 btn-block option-button" style="white-space:normal !important; word-wrap:break-word; word-break:normal" role="button">Print Annual Broadsheet</a>
      </div>      
    </div>      
        

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
    
      </div>
    </div>
    
  </main>

</body>
</html>