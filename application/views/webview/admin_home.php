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
							<li><a href="<?php echo base_url('Pilipinas/reviews/');?>"> Reviews	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"> Contributions	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/settings/');?>"> Settings	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
							<li><h3>Administrator Panel</h3></li>			
			    </ul> 
				
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');background-color: #e8ebef ">	
	
		
		<div class ="row">
			<div class ="col-md-1"></div>
			<div class ="col-md-10 text-left">
				<br/>
				<br/>
				<br/>
				<h1> &nbsp; Welcome to your Dashboard</h1>
			</div>
			<div class ="col-md-1"></div>
		</div>
		
		<div class ="row">
			<div class ="col-md-1"></div>
			<div class ="col-md-4">
				<div class = "row" style = "height: 90%; background-color: white; margin: 18px; border border-radius: 5px;">
					<div class = "col-xs-4 " style = "background-color: #00aef3; padding: 10px;">
						<img  src = "<?php echo base_url('img/visitor.png') ?>"  width = "60%" height = "auto">
					</div>
					<div class = "col-xs-5">
					<h3>Site   Visitors</h3>
					</div>
					<div class = "col-xs-2">
					<h3><?php echo $visits; ?> </h3>
					</div>
				</div>
				
				<div class = "row" style = "height: 90%; background-color: white; margin: 18px; border border-radius: 5px;">
					
						<div class = "col-xs-4 " style = "background-color: 	#2998d8; padding: 10px;">
							<img  src = "<?php echo base_url('img/review.png') ?>"  width = "65%" height = "auto">
						</div>
						<div class = "col-xs-5">
						<a href="<?php echo base_url('Pilipinas/reviews/');?>"><h3>Pending Reviews</h3></a>
						</div>
						<div class = "col-xs-2">
						<h3><?php echo $count; ?> </h3>
						</div>
					
				</div>
				
				<div class = "row" style = "height: 90%; background-color: white; margin: 18px; border border-radius: 5px;">
					<div class = "col-xs-4 " style = "background-color: #246b96; padding: 10px;">
						<img  src = "<?php echo base_url('img/photo.png') ?>"  width = "60%" height = "auto">
					</div>
					<div class = "col-xs-5">
					<a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"><h3>Pending Contributions</h3></a>
					</div>
					<div class = "col-xs-2">
					<h3><?php echo $count2; ?> </h3>
					</div>
				</div>
				<div class = "row" style = "height: 90%; background-color: white; margin: 18px; border border-radius: 5px;">
					<div class = "col-xs-4 " style = "background-color: 	#ff9900; padding: 10px;">
						<img  src = "<?php echo base_url('img/spam.png') ?>"  width = "55%" height = "auto">
					</div>
					<div class = "col-xs-7">
					<a   href="<?php echo base_url('Pilipinas/reviews_2/');?>" ><h3>Spam Reports </h3></a>
					</div>
				</div>
				
			</div>
			<div class ="col-md-6">
				<div class = "row" style = "height: 100%; background-color: white; margin: 18px; border border-radius: 5px; overflow: hidden;">
					<div class = "col-xs-4 " style = "background-color: #00aef3; ">
						<img  src = "<?php echo base_url('img/1place/1200x800/'.$popular['image']) ?>"  width = "120%" height = "auto">
					</div>
					<div class = "col-xs-8">
						
						
							<h3> 	&nbsp; Top Destination</h3>
						
							<h5> 	&nbsp; Name: <?php echo $popular['name']; ?></h5>
							<h5> &nbsp; Rating:  <?php echo $popular['rating']; ?>   Vote:  <?php echo $popular['vote']; ?>	</h5>
					</div>
				</div>
				
				<div class = "row" style = "height: 100%; background-color: white; margin: 18px; border border-radius: 5px; overflow: hidden;">
					<h2> &nbsp; Quick Links </h2>
					<ul>
						
						<li> <a href="<?php echo base_url('Pilipinas/reviews_2/');?>"><span class = "	glyphicon glyphicon-list-alt" ></span> Manage Approved Reviews</a> </li>
						<li> <a href="<?php echo base_url('Pilipinas/contributions_2_views/');?>"><span class = "	glyphicon glyphicon-picture" ></span> Manage Approved Contributions</a></li>
						<li> <a href="<?php echo base_url('Pilipinas/places/');?>"><span class = "	glyphicon glyphicon-pushpin" ></span>Manage Places</a> </li>
						<li> <a href="<?php echo base_url('Pilipinas/settings/');?>"><span class = "	glyphicon glyphicon-user" ></span>Change Account Settings</a> </li>
						<li> <a href="<?php echo base_url('Pilipinas/admin_add/');?>"><span class = "	glyphicon glyphicon-plus" ></span>Add another account</a> </li>
					</ul>
				</div>
			</div>
			<div class ="col-md-1"></div>
		</div>
		
		
		<br/>
		<br/>
		<br/>

	
	




	
</div> <!-- end of container-fluid -->