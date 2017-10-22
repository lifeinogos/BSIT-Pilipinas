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
							<li ><a href="<?php echo base_url('Pilipinas/home_admin');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/reviews/');?>"> Reviews	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"> Contributions	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/settings/');?>"> Settings	</a></li>										
							<li  class = "active" ><a href="<?php echo base_url('Pilipinas/admin_add/');?>"> Add Client Account	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 		  		 
			</div>
	</nav>
</br>
</br>
</br>
</br>
<div class = "container-fluid" style = "background-image: url('img/background');">	
<div class = "row text-center">
<h3 style="color:#C92E2E; text-align: center;">CREATE ADMIN </h3>
<center><hr width="40%" style=" border: 0.1px solid gray; opacity: 0.3"></center>
<form action="<?php echo base_url('Pilipinas/adminadd/');?>" method="post" id="search">	
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="aname"> </input>
</br>
</br>
Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="user"> </input >
</br>
</br>
Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="password" name="pass"> </input >
</br>
</br>
Confirm Password: <input  type="password" name="pass2"> </input >
</br>
</br>

<button type="submit" > SIGN UP </button>

</form>
<center><hr width="60%" style=" border: 0.1px solid gray; opacity: 0.3"></center>
</div>




	
</div>