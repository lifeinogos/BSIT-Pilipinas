	 
	
	 <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						 <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas"></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li  ><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; echo '&viewtype=0';?>">Explore</a></li>
							<li ><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
							<li class="active"><a href="">History Details			</a></li>	
			    </ul> 
						  
				 <ul class = "nav navbar-nav pull-right " style = "margin-top: -10px;">
						  <li  id="search-bar"> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search" target = "_blank">	
									<input type="text" name="search" class="search" value = "" placeholder = "Search places" style ="color: black"/> 
									<button type="submit" class="search" ><span class="glyphicon glyphicon-search"></span></button>
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background')">	

</br>
</br>
</br>
<div class ="row">
	
<div class = "col-md-6">
<div style="margin-left: 10%; margin-right: 10%;">
<div><h2 style="color:#C92E2E;"><?php echo $details_page[0]['name'];?></h2></div>
		<div><h4 style="color:#b9b5b5;"><?php echo $details_page[0]['location'];?></h4></div>
		<center><hr width="100%" style=" border: 0.9px solid gray; opacity: 0.3"></center>
		<p><?php echo $details_page[0]['description'];?></p>
		<center><hr width="100%" style=" border: 0.9px solid gray; opacity: 0.3"></center>
</div>					
</div>

<div class = "col-md-6">

		</br>
		<center><hr width="40%" style=" border: 0.9px solid gray; opacity: 0.3"></center>	
		<img class="rig-img" src="<?php echo base_url('img/'.$details_page[0]['image']);?>">
		<center><hr width="40%" style=" border: 0.9px solid gray; opacity: 0.3"></center>	

		</br></div>
</div>



	
	
	<!-- footer -->
	<div class = "row" id = "footer">
	
		<div class = "col-md-5 text-left">
			<h6>DISCOVER MORE</h6>
			<div id="p">Pili-Pinas serves as an online tourist hub that showcase detailed information about the country’s heritage, 
			culture, and natural landmarks. It also provides advertising of local products, reviews and suggestions from users,
			as well as listed places to visit.
			<br />
			</div>
			<h3>All Right Reserved 2017</h3>
			
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>GET CONNECTED</h6>
			<center><div id="juan"><a href =""><img src = "<?php echo base_url('img/facebook.png') ?>" alt="Facebook">&nbsp;Like us on Facebook</a></div>
			<div id="juan"><a href =""><img src = "<?php echo base_url('img/twitter.png') ?>" alt="Twitter">&nbsp;Follow us on Twitter</a></div>
			</center>
		</div>
		<div class = "col-md-3 text-center">
			<h6>CONTACT INFORMATION</h6>
			<center><div id="juan"><img src = "<?php echo base_url('img/locate.png') ?>" alt="Address" width = "12%" height="12%"> &nbsp; Pili-Pinas <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ayala Boulevard, <br /> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Ermita Manila</div>
			<div id="juan"><img src = "<?php echo base_url('img/mobile.png') ?>" alt="Phone" width = "12%" height="12%">(+63) 9152987364</div>
			<div id="juan"><img src = "<?php echo base_url('img/mail.png') ?>" alt="Mail" width = "12%" height="12%">pili_pinas@gmail.com</div>
			</center>
		</div>
		
		<div class = "col-md-2 text-center">
			<h6>QUICK LINKS</h6>
			<center><div id="qlinks"><a href= "<?php echo base_url('Pilipinas');?>"><h4>Home</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/explore');?>"><h4>Explore</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/history');?>"><h4>History</h4></a></div>
			<div id="qlinks"><a href= "<?php echo base_url('Pilipinas/about');?>"><h4>About</h4></a></div>
			<center>
		</div>
		
	</div>
	
	

</div>

	
	