<?php

include('../../../private/initialize.php');
include(SHARED_PATH . '/resultHeader.php');
	
	if(is_post_request()){
		echo "its a post request";
	}



	
?>
<div class= "container ">
	<div class="row text-center">
		<div class="col mx-auto">

		<!-- *********************  Start editing here  ****************** -->
		  <div class="row pt-4 mt-4">
		 	<div class="col-md-6 mx-auto">
			  	<img style="width:100px; height:80" src="<?php  echo url_for('/images/logo.png');?>">
			</div>				
		  </div>
		  <div class="row">
		 	<div class="col-md-6 mx-auto">
			  	<h4>COMMAND SECONDARY SCHOOL - LAGOS</h4>
			</div>				
		  </div>
		  <div class="row">
		 	<div class="col-md-6 mx-auto">
			  	<h3> Verify a card</h3>		
			</div>				
		  </div>
		  <div class="row">
		 	<div class="col-md-6 mx-auto">
			  	<form>
				  <div class="form-group m-3">
					<input class="form-control" type="text" name="serial" placeholder="serial Number"></input>
				  </div>	
				  <div class="form-group m-3">
					<input class="form-control" type="password" name="pin" placeholder="Card Pin"></input>
				  </div>
				  <div class="form-group m-3">
					<button class="btn btn-primary form-control">Verify</button>
				  </div>

				</form>				
			</div>				
		  </div>
		<!-- ******************** End Edit here ***************************** -->	
		</div>
	</div>
</div>
	