<!-- Homepage 
	 <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://localhost/pilipinas_v2/pilipinas/details");
    }
	</script>	-->
<script>
function one() {
document.getElementById('isa').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById("f").value = "1";
}
function two() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById("f").value = "2";
}
function three() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById("f").value = "3";
}
function four() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('apat').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById("f").value = "4";
}
function five() {
document.getElementById('isa').style.display = "block";
document.getElementById('dalawa').style.display = "block";
document.getElementById('tatlo').style.display = "block";
document.getElementById('apat').style.display = "block";
document.getElementById('lima').style.display = "block";
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
document.getElementById("f").value = "5";
}
function uno() {
document.getElementById('a').style.display = "none";
document.getElementById('dalawa').style.display = "none";
document.getElementById('b').style.display = "block";
document.getElementById('tatlo').style.display = "none";
document.getElementById('c').style.display = "block";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "1";
}
function dos() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('tatlo').style.display = "none";
document.getElementById('c').style.display = "block";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "2";
}
function tres() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('apat').style.display = "none";
document.getElementById('d').style.display = "block";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "3";
}
function quatro() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('lima').style.display = "none";
document.getElementById('e').style.display = "block";
document.getElementById("f").value = "4";
}
function lima() {
document.getElementById('a').style.display = "none";
document.getElementById('b').style.display = "none";
document.getElementById('c').style.display = "none";
document.getElementById('d').style.display = "none";
document.getElementById('e').style.display = "none";
document.getElementById("f").value = "5";
}
</script>
<style>
.revsug{
	background-color: white;
	cursor: pointer;
	border: none;
}
.revsug:hover {
	background-color:  #e7e7e7;
}

select{
font-size: 20px;
width: 40%;
padding: 16px 20px;
background-color: #C92E2E;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
}
#bt { 
font-size: 15px;
width: 20%;
padding: 16px 20px;
background-color: #C92E2E;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
}
h1, h4 {
	font-family: abeatbykai;
}
}
.content {
padding: 16px 20px;
background-color: RED;
color: white;
box-shadow: 2px 2px 2px gray;
border-radius: 5px;
font-family: abeatbykai;
 opacity: 1; 
 width: 50%;
 border: 1px solid black;
 position: relative;
}
.slideshow-container {
  position: relative;
  margin: auto;
}
#fade{
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1 s;
  animation-name: fade;
  animation-duration: 1s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
</style>
	<style>
.mySlides2 {display:none}
.demo2 {cursor:pointer}
</style>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv2(n) {
  showDivs2(slideIndex = n);
}

function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName("mySlides2");
  var dots = document.getElementsByClassName("demo2");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}

function r() {
document.getElementById('reviewww').style.display = "block";
document.getElementById('suggesteddd').style.display = "none";}

function s() {
document.getElementById('reviewww').style.display = "none";
document.getElementById('suggesteddd').style.display = "block";}
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1940297882904613',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

	  <nav class="navbar navbar-custom navbar-fixed-top text-center">
					
						<div class="navbar-header" >
						  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar" style ="color: red;"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						  </button>
						  <a href="<?php echo base_url('Pilipinas');?>"><img src = "<?php echo base_url('img/logo.png') ?>" width = "100" class="img-responsive" alt="Pilipinas" /></a>
						</div>
				
				
				
			<div  class="collapse navbar-collapse" id="myNavbar">
						
				<ul class="nav navbar-nav">
							<li ><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0'; ?>">Explore</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About			</a></li>	
							<li class="active"><a href="<?php echo base_url('Pilipinas/about/');?>">Details			</a></li>	
			    </ul> 
						  
				 <ul class = "nav navbar-nav pull-right " style = "margin-top: -10px;">
						  <li  id="search-bar"> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "" placeholder = "Search places" style ="color: black"/> 
									<button type="submit" class="search" ><span class="glyphicon glyphicon-search"></span></button>
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
	<div class = "container-fluid" style = "background-image: url('img/background'); background-color: null;">	

		<div class = "row text-center" id = "details">
			
			<div class = "col-sm-5" style = "background-color: black; box-shadow: 24px -2px 23px -8px rgba(201,201,201,1);">		
				<div class="w3-content" style="max-width:1200px">
				  <img style="border-radius: 10px; " class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image']); ?> " style="width:100%">
				  <img style="border-radius: 10px; "class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image2']); ?> " style="width:100%">
				  <img style="border-radius: 10px; "class="mySlides2" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image3']); ?> " style="width:100%">

				  <div class="w3-row-padding w3-section">
					<div class="w3-col s4">
					  <img class=" demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image']); ?> " style="width:100%" onload ="currentDiv2(1)"onclick="currentDiv2(1)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image2']);?> " style="width:100%" onclick="currentDiv2(2)">
					</div>
					<div class="w3-col s4">
					  <img class="demo2 w3-opacity w3-hover-opacity-off" src="<?php echo base_url('img/1place/1200x800/'.$details_page[0]['image3']); ?> " style="width:100%" onclick="currentDiv2(3)">
					</div>
				  </div>
				</div>
			</div>
			<div class = "col-sm-6" style="padding-left: 50px; padding-top: 30px;box-shadow: 50px 10px 69px -44px rgba(176,176,176,1);">
				<div class = "row text-left">
				<ul class="breadcrumb">
				  <li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
				  <li><a href="<?php echo base_url('Pilipinas/travel/'); echo '?category=0';?>">Explore</a></li>
				  <li>Details</li>
				</ul>
				<h1> <?php echo $details_page[0]['name'];?> </h1>
			
				 <?php 
						
						if(round($details_page[0]['rating'])== 0){
							echo '  <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
						}
						if(round($details_page[0]['rating'])== 1){
							echo ' <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
						}
						if(round($details_page[0]['rating'])== 2){
							echo ' <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
						}
						if(round($details_page[0]['rating'])== 3){
							echo ' <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
						}
						if(round($details_page[0]['rating'])== 4){
							echo ' <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
						}
						if(round($details_page[0]['rating'])== 5){
							echo ' <h2> Visitor Rating </h2> <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
						}
						
						
				?>
				</div>
				<div class = "row text-left" style="padding-right: 20px;">
				<h3> <?php echo $details_page[0]['locality'].','.$details_page[0]['province'].' Region: '.$details_page[0]['region'];?></h3>
				<p align = "justify"> <?php echo $details_page[0]['description'];?></p>
				</div>
			</div>
			<div class = "col-sm-1" style = "background-color: white; padding-right: 20px;">
			</div>
		</div>
	
	<!-- review table -->
	<div class = "row" >
		<div class = "col-sm-5"  style = "background-color: #706f6f; ">
				<h3 style = "color: #e0e0e0;"> Know it on Google Maps! </h3>
				 <?php echo $details_page[0]['map'];?>
		</div>
		<div class = "col-sm-7" style="padding-top: 5px; padding-bottom: 10px; " > 
			<div style="float: left; border-right: 1px solid gray; margin-left: 1%"> <button class="revsug" onclick="r()"><h3> Reviews </h3></button>
			</div>
			<div style="margin-left: 13%;"> <button class="revsug"  onclick="s()"> <h3> Suggested places </h3> </button>
			</div>
			<div id = "reviewww" style="display: block;">
			<?php				
			if($reviews != 'none'){
				echo '
						<div class = "col-md-6" > <h3 style = "color:black; "> '; echo $details_page[0]['vote']; echo' &nbsp;Reviews</h3> </div>
						<div class = "col-md-6" ><span><a class="btn btn-warning" data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;"><span class="glyphicon glyphicon-pencil"></span> Add Your Experience</a></span></div>
						
				';
			}
			else{echo '
				<div class = "col-md-6" ><h3 style = "color:black; "> &nbsp;&nbsp;Reviews</h3> </div>
				<div class = "col-md-6" ><span><a class="btn btn-warning" data-toggle="modal" data-target="#reviewmodal" style="cursor: pointer;"><span class="glyphicon glyphicon-pencil"></span>Add Your Experience</a></span></div>
		
			';}
			?>
				<table id="customers"  style="height: 20%;">
							
							<tbody >
								<?php
								  $x = 1;
									if($reviews != 'none'){
										foreach($reviews as $n){
										
											if($x%2==0){
											echo '
											<tr>	
											<td id = "tblwidth"> 
												<div style="background-color: #a6bcbb;border-radius: 10px; padding: 10px; margin-left: 20px;"> ';
													if(round($n['rating'])== 0){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 1){
														echo ' <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 2){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 3){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 4){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 5){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
													}
													
													echo '
													<h4 style = "color: black;">'; echo $n['reviewer']; echo '</h4>
													<p>'; echo $n['review']; echo '</p>';
											echo '	<div>
											</td>
											</tr>
											';
											}
											else {
												
																		echo '
											<tr>	
											<td id = "tblwidth"> 
												<div style="background-color: #c3cddd;border-radius: 10px; padding: 10px; margin-right: 20px; "> ';
													if(round($n['rating'])== 0){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/0star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 1){
														echo ' <img style = "width: 180px;" src=" '; echo base_url("img/1star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 2){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/2star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 3){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/3star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 4){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/4star.png"); echo '" /> ';
													}
													if(round($n['rating'])== 5){
														echo '  <img style = "width: 180px;" src=" '; echo base_url("img/5star.png"); echo '" /> ';
													}
													
													echo '
													<h4 style = "color: black;">'; echo $n['reviewer']; echo '</h4>
													<p>'; echo $n['review']; echo '</p>';
											echo '	</div>
											</td>
											</tr>
											';	
												
											}
												$x = $x+1;
										}
									}
									else {
										echo '
										<tr>	
											<td id = "tblwidth">
												<div style="background-color: #a6bcbb;border-radius: 10px; padding: 10px; margin-left: 20px;">
												<h3> Help others know this place, share youre experience now!</h3>
												</div>
											</td>
										</tr>
										';
									}
									
								?>
								
							</tbody style = "box-shadow: inset 2px -15px 38px -15px rgba(0,0,0,0.75);	">
				</table>
			</div>
			
			<div id = "suggesteddd" style="display: none;">
			<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  data-show-faces="true">
			</div>
			</div>
		</div>

	</div>
	
	<!-- end ng review -->
	

		
		
	</div>	<!-- end ng row na itu-->
	
	
	
	

	<!-- footer -->
	<div class = "row text-center" id = "foooter" style="background-color:#bcbcbc; color: black;">
		<div class = "col-md-4" align="center">
			 <img src = "<?php echo base_url('img/logo.png') ?>" width = "60%" class="img-responsive" alt="Los Angeles" align="center">
		</div>
		<div class = "col-md-2">
		
		</div>

		<div class = "col-md-2 text-center">
			<h3> FOLLOW US ON</h3>
		<center> <img src = "<?php echo base_url('img/fbicon1.jpg') ?>" width = "20%" class="img-responsive" alt="Los Angeles"></center>
			
		</div>
		<div class = "col-md-2">
			<h3> CONTACT US </h3>
			<h4> 09152987364</h4>
			<h4> pili_pinas@gmail.com</h4>
			<h4> TUP Manila</h4>
		</div>
		<div class = "col-md-2">
			<h3> QUICK LINKS</h3>
			<h4> <a href=""> Travel</a><br /></h4>
			<h4><a href=""> History</a><br /><h4>
			<h4><a href=""> About</a><br /></h4>
		</div>
		</div>	
	
	<div class = "row text-center" class ="ARR" style="background-color:#000000;" >
		<h3> All Rights Reserved 2017<h3>
	</div>

	

</div>


<!-- modal for comment -->
<div class="modal fade" id="reviewmodal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" style = "background-color: yellow; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>Share your experience!</h4>
					</div>
					
					
					<div class=" row modal-body text-center">
						<form action="<?php echo base_url ('Pilipinas/rating')?>" method="get">
							<div id="first" style="display:inline-block; width:8%;" >
								<div id="a" style="display:block; position: relative;">
									<button onclick ="one()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="isa" style="display:none; position: relative;">
									<div >
									<button onclick ="uno()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>
								</div>
							</div>
						
							<div id="second" style="display:inline-block; width:8%;" >
								<div id="b" style="display:block; position: relative;">
									<button onclick ="two()" type="button"  style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button>
								</div>
								<div id="dalawa" style="display:none; position: relative; ">
									<div >
									<button onclick ="dos()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%;">
									</button>
									</div>	
								</div>
							</div>

							<div id="third" style="display:inline-block; width:8%;" >	
								<div id="c" style="display:block; position: relative;">
									<button onclick ="three()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="tatlo" style="display:none; position: relative;">
									<div >
									<button onclick ="tres()" type="button"  style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>	
								</div>
							</div>
							
							<div id="fourth" style="display:inline-block; width:8%;" >
								<div id="d" style="display:block; position: relative;">
									<button onclick ="four()" type="button" style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="apat" style="display:none; position: relative;">
									<div >
									<button onclick ="quatro()" type="button"  style="  border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>	
								</div>
							</div>
						
							<div id="fifth" style="display:inline-block;  width:8%;" >
								<div id="e" style="display:block; position: relative;">
									<button onclick ="five()" type="button" style="  border: none; cursor:pointer;position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">
											<img src="<?php echo base_url('img/star1.png') ?>" style="width:100%;">
									</button> 
								</div>
								<div id="lima" style="display:none; position: relative;">
									<div >
									<button onclick ="singko()" type="button"   style=" border: none; cursor:pointer; position: relative; width:100%; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer;">		
										<img src="<?php echo base_url('img/star.png') ?>" style="width:100%">
									</button>
									</div>
								</div>
							</div>
						<!-- comment box -->
						</br>
						</br>
						</br>
							<input type = "text" name ="reviewname" value = "" placeholder = "Your name" />
							<input type = "text-" name ="reviewmismo" value = "" placeholder = "Your review" />
					</div>
					<div class="modal-footer text-center">
						<input id="f" name="rating" style="display: none;"></input>
						<button class = "btn btn-danger" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> RATE THIS! </button>
					</form>
					</div>
				</div>
			</div>
		</div>
					
					
						
						
						