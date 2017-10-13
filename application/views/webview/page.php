<!-- Homepage -->
	  	
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
							<li><a href="<?php echo base_url('Pilipinas');?>">Home</a></li>
							<li><a href="<?php echo base_url('Pilipinas/travel/');?>">Travel</a></li>
							<li><a href="<?php echo base_url('Pilipinas/history/');?>">History</a></li>
							<li><a href="<?php echo base_url('Pilipinas/about/');?>">About	</a></li>		
							<li  style = "border-radius: 0px 30px 0px 30px; background-color: gray;"><a href="<?php echo base_url('Pilipinas/details/');?>">Details	</a></li>		
			    </ul> 		  
				 <ul class = "nav navbar-nav " style = "margin-top: -10px;">
						  <li> 
								<form action="<?php echo base_url('Pilipinas/search/');?>" method="get" id="search">	
									<input type="text" name="search" class="search" value = "Search places" style ="color: black"/> 
									<input  style = "border-radius: 30px 0px 30px 0px; background-color: #fc9292;" type="submit" value=" Search " />
								</form> 
						  </li>
				 </ul>		 		 
			</div>
	</nav>
	
	<div class = "container-fluid" style = "background-image: url('img/background'); background-color: null;">	


		<div class = "row" style = " padding-top: 90px; padding-bottom: 90px; ">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5">
				<img  style = "border-radius: 0px 60px 0px 60px;" class = "img-responsive" src="<?php echo base_url($details_page[0]['image']) ?> " >
			</div>
			<div class = "col-md-4 text-left">
				<div class = "row">
				<h1> <?php echo $details_page[0]['name'];?> </h1>
				<h1> <?php echo 'Rating: '.round($details_page[0]['rating']);?></h1>
				</div>
				<div class = "row" style = "border-radius: 60px 0px 60px 0px; background-color: #d6d8db; padding: 20px;">
				<h3> <?php echo $details_page[0]['locality'].','.$details_page[0]['province'].' Region: '.$details_page[0]['region'];?></h3>
				<p> <?php echo $details_page[0]['description'];?></p>
				</div>
			</div>
			<div class = "col-md-1">
			</div>
		</div>
		
		<div class = "row" style = "padding-bottom: 35px;">
			<div  style="  height: 20%;" align="center">
					<div class = "col-md-2">
					</div>
					<div class = "col-md-8" style = "color: #686666; background-color: #dbd9d9; border-radius: 70px 0px 97px 10px; padding-bottom: 15px;">
					<h2>    if you've been here, rate your experience to help locals   </h2>
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
						<input id="f" name="rating"></input>
							<button class = "btn btn-danger" type="submit" value="<?php echo $details_page[0]['place_id'];?>" name="place_id" id="finalrate"> RATE THIS! </button>
						</form>
						
						
					</div>
					<div class = "col-md-2">
					</div>
			</div>        <!-- end ng star div -->
		
		</div>	<!-- end ng rate -->
	</div>	<!-- end ng row na itu-->
	
	
	
	
	
	
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
