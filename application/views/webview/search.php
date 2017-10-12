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
							<li ><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel </a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History </a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About	</a></li>			
							<li style = "border-radius: 0px 30px 0px 30px; background-color: gray;" ><a href=""> Search	</a></li>			
			    </ul> 		  
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places"style ="color: black"/> 
									<input  style = "border-radius: 30px 0px 30px 0px; background-color: #fc9292;" type="submit" value=" Search " />
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
<div class = "container-fluid" style = "background-image: url('img/background');">
	<!-- TABLE OF RESERVATION -->
	
	<div class = "row" style="margin-top: 100px;">
		<div class="col-xs-2"></div>
		<div class="col-xs-8"> <h1> Search Result for </h1></div>
		<div class="col-xs-2"></div>
		
	</div>
	<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-md-2"></div>
		<div class = "col-md-2" style = "border-radius: 0px 30px 0px 30px; background-color: #c2c3c4; margin-right: 15px;"> <h3> Image </h3>  </div>
		<div class = "col-md-2" style = "border-radius: 0px 30px 0px 30px; background-color: #c2c3c4; margin-right: 15px;"> <h3> nameof place </h3></div> 
		<div class = "col-md-2"style = "border-radius: 30px 0px 30px 0px; background-color: #c2c3c4; margin-right: 15px;"> <h3> nameof province </h3></div> 
		<div class = "col-md-2"style = "border-radius: 30px 0px 30px 0px; background-color: #c2c3c4; margin-right: 15px;"> <h3> nameof region </h3></div> 
		<div class = "col-md-2"></div>
	</div>
	<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-md-2"></div>
		<div class = "col-md-2"> <img  style = "border-radius: 0px 50px 0px 50px;" class = "img-responsive" src="<?php echo base_url('img/desti1.png') ?> " > </div>
		<div class = "col-md-2"> <h3> nameof place </h3></div> 
		<div class = "col-md-2"> <h3> nameof province </h3></div> 
		<div class = "col-md-2"> <h3> nameof region </h3></div> 
		<div class = "col-md-2"></div>
	</div>
	<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-xs-2"></div>
		<div class = "col-xs-2"> <a><img  style = "border-radius: 0px 50px 0px 50px;" class = "img-responsive" src="<?php echo base_url('img/desti2.png') ?> " ></a> </div>
		<div class = "col-xs-2"> <h3> nameof place </h3></div> 
		<div class = "col-xs-2"> <h3> nameof province </h3></div> 
		<div class = "col-xs-2"> <h3> nameof region </h3></div> 
		<div class = "col-xs-2"></div>
	</div>
	<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-xs-2"></div>
		<div class = "col-xs-2"> <img  style = "border-radius: 0px 50px 0px 50px;" class = "img-responsive" src="<?php echo base_url('img/desti3.png') ?> " > </div>
		<div class = "col-xs-2"> <h3> nameof place </h3></div> 
		<div class = "col-xs-2"> <h3> nameof province </h3></div> 
		<div class = "col-xs-2"> <h3> nameof region </h3></div> 
		<div class = "col-xs-2"></div>
	</div>
<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-xs-2"></div>
		<div class = "col-xs-2"> <img  style = "border-radius: 0px 50px 0px 50px;" class = "img-responsive" src="<?php echo base_url('img/desti4.png') ?> " > </div>
		<div class = "col-xs-2"> <h3> nameof place </h3></div> 
		<div class = "col-xs-2"> <h3> nameof province </h3></div> 
		<div class = "col-xs-2"> <h3> nameof region </h3></div> 
		<div class = "col-xs-2"></div>
	</div>
<div class = "row text-center" style = "margin-bottom: 20px;">
		<div class = "col-xs-2"></div>
		<div class = "col-xs-2"> <img  style = "border-radius: 0px 50px 0px 50px;" class = "img-responsive" src="<?php echo base_url('img/desti5.png') ?> " > </div>
		<div class = "col-xs-2"> <h3> nameof place </h3></div> 
		<div class = "col-xs-2"> <h3> nameof province </h3></div> 
		<div class = "col-xs-2"> <h3> nameof region </h3></div> 
		<div class = "col-xs-2"></div>
	</div>




<!-- footer -->
	<div class = "row text-center" id = "footer">
		<div class = "col-md-4">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "100%" class="img-responsive" alt="Los Angeles">
		</div>
		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
			<a href = ""> Twitter</a>
			<a href = ""> Facebook  </a>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> ABOUT US</h3>
			<h4> Sitemap</h4>
			<h4> Privacy Policy</h4>
			<h4> Terms and Conditions</h4>
		</div>
		<div class = "col-md-2">
		</div>
	</div>
	
	<div class = "row text-center" id ="ARR">
		<h3> All Rights Reserved 2017<h3>
	</div>
	
	
</div> <!-- end ng container -->

