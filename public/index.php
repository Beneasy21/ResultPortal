<?php 

include('../private/initialize.php');
include(SHARED_PATH . '/resultHeader.PHP')

?>

<div class="container-fluid tea">
  <div class="container pt-4">
  	
  	  	<div class="row bg-light rounded py-2">
  	  	  <div class="col-xs-2">
  	  	  	<a class="navbar-brand" href="">
  	  	  	  <img src="<?php echo url_for('/images/logo.png');?>" 
			          width="100" height="80" class="d-inline-block align-top rounded " alt="">
		  </div>
  	  	  <div class="col-xs-3 py-4">
  	  		<span style="font-size: 20px">COMMAND SECONDARY SCHOOL - LAGOS</span>
			</a>
  	  	  </div>
  	  	  <div class="col-xs-7 py-4 text-right">
  	  	  	<ul class="nav nav-tabs m-2 align-bottom">
			        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
			        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
			        <li class="nav-item"><a class="nav-link" href="#">Messages</a></li>
              <li class="nav-item"><a class="nav-link" href="">Students login</a></li>
              <li class="nav-item"><a class="nav-link" href="">Staff Login</a></li>
            </ul>
  	  	  </div>
  	    </div>

  	    <div class="row bg-white">
  	  	  <div class="col-md-3 ash rounded p-4">
            <h3 class="text-center"> Check Result.</h3>
              <div class="row bg-secondary rounded m-2">
                <div class="col-md-12">
                  <h5>Termly</h5>
                    <form role="form">
                      <div class="form-group">
                      <input type="text" class="form-control" id="regNo" placeholder="Reg Number"/>
                      </div>
                      <div class="form-group"> <?php  include(SHARED_PATH. '/acadYear.php');?></div>
                      <div class="form-group"><?php  include(SHARED_PATH. '/term.php');?></div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="cardSerial" placeholder="Card Serial Number"/>
                      </div>
                      <div class="form-group">
                       <input type="password" class="form-control" id="cardPin" placeholder="Card Pin" />
                      </div>
                     <button type="submit" class="btn btn-primary">Submit       </button>
                    </form>
                </div>
              </div>
              <div class="row bg-secondary rounded m-2">
                <div class="col-md-12">
                  <h5>Annual</h5>
                   <form role="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="regNo" placeholder="Reg Number"/>
                    </div>
                    <div class="form-group"><?php  include(SHARED_PATH. '/acadYear.php');?></div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="cardSerial" placeholder="Card Serial Number"/>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="cardPin" placeholder="Card Pin" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit </button>
                   </form>
                </div>
              </div>
  	       </div>

           <div class="col-md-9 blue rounded">
            <div class="carousel slide" id="carousel-857752">
              <ol class="carousel-indicators">
                <li data-slide-to="0" data-target="#carousel-857752"></li>
                <li data-slide-to="1" data-target="#carousel-857752" class="active"></li>
                <li data-slide-to="2" data-target="#carousel-857752"></li>
              </ol>
            <div class="carousel-inner">
              <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap First" src="https://www.layoutit.com/img/sports-q-c-1600-500-1.jpg" />
                <div class="carousel-caption">
                  <h4>
                    First Thumbnail label
                  </h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
              <div class="carousel-item active">
                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                <div class="carousel-caption">
                  <h4>
                    Second Thumbnail label
                  </h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                <div class="carousel-caption">
                  <h4>
                    Third Thumbnail label
                  </h4>
                  <p>
                    Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  </p>
                </div>
              </div>
            </div> 
            <a class="carousel-control-prev" href="#carousel-857752" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-857752" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
          </div>
          <div class="row">
            <div class="col-md-12">
              AKPAN  was HERE
            </div>
          </div>
        </div>
        <!-- Footer section-->
        <div class="row p-4 mb-3 mx-auto">
          <div class="col-md-12 text-center">
            &copy; <?php echo date('Y') . ' ';?> All Rights reserved. Command Secondary School. <br / >
            Designed By BeneasyInitiatives
          </div>
      </div>
      </div>

    </div>

    
  </div>
  	  
  <!-- *************** End of Container ********************** -- >	
  </div> 
  <!-- *************** End of Container Fluid ********************** -- >
</div>


  	