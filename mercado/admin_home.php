<!-- Homepage -->
	  
	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
							<img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Los Angeles">
						
						</div>
						
			<div  class="collapse navbar-collapse" id="myNavbar">		
				<ul class="nav navbar-nav">
							<li class = "active"><a href="<?php echo base_url('Pilipinas/home_admin');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Settings	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 
				
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	
	
		
		<div class = "row" id = "home_1">
			<div class ="col-md-12">
					<h1 style="color:#C92E2E; text-align: center;"> WELCOME TO PILIPINAS DASHBOARD! </h1>
			</div>
		</div>


		<div class = "row">
			<div class="col-md-4">	 
					<div class="thumbnail">
					<h3 style="color:#C92E2E; text-align: center;"> NUMBER OF VIEWS</h3>
						</br>
						<h3> <?php echo $visits; ?> </h3>		
					</div>					
			</div>
			<div class="col-md-4">	 
					<div class="thumbnail">
					<h3 style="color:#C92E2E; text-align: center;"> NUMBER OF PLACES</h3>
						<h3> <?php echo $places; ?> </h3>		
					</div>					
			</div>
			<div class="col-md-4">	 
					<div class="thumbnail">
					<h3 style="color:#C92E2E; text-align: center;"> MOST POPULAR PLACE</h3>
						<h3> <?php echo $popular['name']; ?></h3>		
					</div>					
			</div>
		</div>

	
	




	
</div> <!-- end of container-fluid -->