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
							<li><a href="<?php echo base_url('Pilipinas/home_admin');?>">Home</a></li>
							<li  style = "border-radius: 0px 30px 0px 30px; background-color: gray;" ><a href="<?php echo base_url('Pilipinas/request/');?>"> Request </a></li>
							<li><a href="<?php echo base_url('Pilipinas/clients/');?>"> Clients </a></li>
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>			
							<li><a href="<?php echo base_url('Pilipinas/advertising/');?>"> Advertising	</a></li>			
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 		   
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	

	<div class = "row" style = "margin-top: 50px;">
		<div class = "col-md-2"></div>
		<div class = "col-md-8">
			<h1> Welcome Admin!!!!</h1></div>
		<div class = "col-md-2"></div>
	</div>
	<div class = "row" >
		<div class = "col-md-1"></div>
		<div class = "col-md-10">
			<table id="customers">
						<thead>
							<th> NO.</th>
							<th> CLIENT NAME</th>
							<th> BUSINESS NUMBER</th>
							<th> PRODUCT NAME</th>
							<th> ACTION</th>
						</thead>
						<tbody>
						<?php
						$counter = 0;
						foreach($reservations as $s){
							$counter+=1;
							echo '	<tr>	
										<td>'.$counter.' </td>
										<td>'.$s['booking_name'].'</td>
										<td>'.$s['date_month']."/".$s['date_day']."/".$s['date_year'].'</td>
										<td>'.$s['status'].'</td>
										<td> <a href= ""> Confirm </a></td>
									</tr>
									';
						}
						?>
						</tbody>
						
						
					</table>
		<div class = "col-md-1"></div>
	</div>
	<div class = "row" >
		
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
		<h3> All Rights Reserved 2017</h3>
	</div>

	

</div>