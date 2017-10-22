<!-- Homepage -->
<!-- Homepage -->

<?php 
//if($status==1){
	//echo "<script>
      //   $(window).load(function(){
        //     $('#hhh').modal('show');
   //      });
   // </script>";
//	}
//else{ echo "<script> alert('SHEEEEEEEEEEET');</script>";}

?>

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
							<li class="active"><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
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

	<!-- main pic for travel -->
	<div class = "row" style = "margin-top: 20px; ">
		  <div class="item"> <img src="http://localhost/Pilipinas_v2/img/slider_3_travel.jpg" alt="" style="width:100%;">  </div>  
	</div>


<div class ="row">
	<br />
<div class = "col-md-6">
<br />
	<div class="row text-center" style="padding: 5%;" >
	<h1 style="color:#C92E2E;">CLICK AND LEARN!</h1>
	<h4 style="color:#b9b5b5;">The Philippines consists of 3 different islands (luzviminda): Luzon, Visayas and Mindanao. <br />Find out the Historical Landmarks located on each island.</h4>
	<br /><br />
	<input type="button" class="btn btn-danger" id="bt" value="Luzon" onclick="showLuz()" />
	<input type="button" class="btn btn-danger" id="bt" value="Visayas" onclick="showVi()" />
	<input type="button" class="btn btn-danger" id="bt" value="Mindanao" onclick="showMin()" />

	<br/>
		<br /><br />
		<div>
				<div id="phh" class="answer_list" style="">
						<h1 style="color:#C92E2E;">Philippines</h1>
						<h4 style="color:#b9b5b5;">Located in Southeast Asia, known as Pearl of the Orient Sea. Philippines has the world largerst diversity in Asia.</h4>
				</div>
				<div id="Luzonn"  style="display:none; " class="answer_list" >
						<h1 style="color:#C92E2E;">Luzon</h1>
						<h4 style="color:#b9b5b5;">Located in the northern region of the archipelago, it is the economic and political center of the nation, being home to the country's capital city, Manila. </h4>
				</div>
				<div id="Visayass"  style="display:none; " class="answer_list" >
						<h1 style="color:#C92E2E;">Visayas</h1>
						<h4 style="color:#b9b5b5;">Located in the middle part of the country. It consists of several islands, primarily surrounding the Visayan Sea.</h4>
				</div>
				<div id="Mindanaoo"  style="display:none; " class="answer_list" >
						<h1 style="color:#C92E2E;">Mindanao</h1>
						<h4 style="color:#b9b5b5;">Located in the lower part of the country. It is the second largest island in the Philippines. </h4>
				</div>
		</div>

		</div>
	
</div>

	<div class = "col-md-6">
	<div class="row text-center" >
	<div id="ph" class="answer_list" >
	<img id="fade" src="http://localhost/Pilipinas_v2/img/phhh.png " style="width:60%;">
	
	</div>
	
	<div id="Luzon"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="luz" id="fade">
		<img src="http://localhost/Pilipinas_v2/img/luzonh.png" style="width:60%">
	  </div>
	  <div class="luz" id="fade">
		<img src="http://localhost/Pilipinas_v2/img/luzonhh.png" style="width:60%">
	  </div>
	  <div id="l"  style="display:none;">
		<img id="fade" src="http://localhost/Pilipinas_v2/img/luzonhhh.png" style="width:60%">
	  </div>
	  
	
		
	  <div id="lu" style="display:none; position: absolute; top: 0; right: 0;  height: 100%;">
		<!-- rizals-->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=1';?>" class="btn " target = "_blank" style="cursor: pointer; width:10%; top: 42%; left: 13%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none;"><img id="fade"  src="http://localhost/Pilipinas_v2/img/mark.png" style="width: 120%;"></a>
		<!-- PLAZA CUARTEL // PALAWAn -->
		<a href ="  <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=2';?>" class="btn" target = "_blank" style="cursor: pointer; width:10%; top: 76.5%; right: 14%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none;"> <img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		<!-- Corregidor Island, -->
		<a href ="<?php echo base_url('Pilipinas/historyselect'); echo '?history_id=3';?>" class="btn " target = "_blank" style="cursor: pointer; width:10%; top: 42.8%; right: 11.5%; position: relative;background-color: Transparent; background-repeat:no-repeat; border: none;"><img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		
	  </div>
	  </div>
	  </div>

	
	<div id="Visayas"  style="display:none; position: relative;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="vis" id="fade">
		<img src= "http://localhost/Pilipinas_v2/img/visayash.png" style="width:60%">
	  </div>
	  <div class="vis" id="fade">
		<img src="http://localhost/Pilipinas_v2/img/visayashh.png" style="width:60%">
	  </div>
	  <div id="v" style="display:none; ">
		<img id="fade" src="http://localhost/Pilipinas_v2/img/visayashhh.png" style="width:60%;">
	</div>
	
	
	<div id="vi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<!--  Fort San Pedro//Plaza Independencia, Cebu City -->
		<a href ="<?php echo base_url('Pilipinas/historyselect'); echo '?history_id=4';?>" class="btn " target = "_blank" style="cursor: pointer; width:10%; top: 49%; left: 11.8%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"><img id="fade"  src="http://localhost/Pilipinas_v2/img/mark.png" style="width: 120%;"></a>
		<!--  Leyte Landing Memorial National Park// PALO, LEYTE -->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=5';?>" class="btn" target = "_blank"   style="cursor: pointer; width:10%; top: 40%; left: 13%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"> <img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		<!--  LIMASAWA (FIRST CATHOLIC MASS IN PH)// LIMASAWA, SOUTHERN LEYTE -->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=6';?>" class="btn "  target = "_blank"  style="cursor: pointer; width:10%; top: 52%; left: 5%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"><img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		
	</div>
	</div>
	</div>
	
	<div id="Mindanao"  style="display:none;" class="answer_list" >
	<div class="slideshow-container">
	  <div class="min" id="fade">
		<img src="http://localhost/Pilipinas_v2/img/mindanaoh.png" style="width:60%">
	  </div>
	  <div class="min" id="fade">
		<img src="http://localhost/Pilipinas_v2/img/mindanaohh.png" style="width:60%">
	  </div>
	  <div id="m" style="display:none;">
		<img id="fade" src="http://localhost/Pilipinas_v2/img/mindanaohhh.png" style="width:60%">
	  </div>
	  
	 <div id="mi" style="display:none; position: absolute; top: 0; right: 0; height: 100%;">
		<!--  Cape San Agustin//Mati, Davao Oriental -->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=7';?>" class="btn " target = "_blank"   style="cursor: pointer; width:10%; top: 50.9%; left: 36.8%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"><img id="fade"  src="http://localhost/Pilipinas_v2/img/mark.png" style="width: 120%;"></a>
		<!--  Rizal Shrine// Dapitan -->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=8';?>" class="btn" target = "_blank"  style="cursor: pointer; width:10%; top: 39%; right: -5%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"> <img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		<!--  Fort Pikit// Dapitan -->
		<a href =" <?php echo base_url('Pilipinas/historyselect'); echo '?history_id=9';?>" class="btn " target = "_blank"  style="cursor: pointer; width:10%; top: 49%; left: 2%; position: relative; background-color: Transparent; background-repeat: no-repeat; border: none;"><img id="fade" src="http://localhost/Pilipinas_v2/img/mark.png" style="width:120%;"></a>
		
	  </div>
	</div>
	</div>
	
	</div>
	</div>
	<br />
	<br />
	<br />
</div> <!-- end ng content-->





	
	
	
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

	
<!-- modal for comment -->
<div class="modal fade" id="hhh" role="dialog">
			<div class="modal-dialog" width="80%" >
				<div class="modal-content" >
					<div class="modal-header text-center" style = " width: 100%; background-color: white; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<center><hr width="40%" style=" border: 0.8px solid gray; opacity: 0.3"></center>
						<?php
						echo '<div><h2 style="color:#C92E2E;">'.$h[0]['name'];echo '</h2></div>';
						echo '<div><h3 style="color:#b9b5b5;">'.$h[0]['location'];echo '</h3></div>';?>
						<center><hr width="80%" style=" border: 0.9px solid gray; opacity: 0.3"></center>
						<?php
						echo '<p>'.$h[0]['description'].'</p>';?>
						<center><hr width="80%" style=" border: 0.8px solid gray; opacity: 0.3"></center>
						<?php
						echo '</br><img class="rig-img" src="'; echo base_url('img/'.$h[0]['image']);echo'">';?>
						<center><hr width="40%" style=" border: 0.9px solid gray; opacity: 0.3"></center>						
										
						</div>
					
					
					
				</div>
			</div>
		</div>
	