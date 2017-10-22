<!-- Homepage -->
	  
<?php
	if(isset($_GET['edit'])){
		
			echo "<script> 
				$(window).on('load',function(){
				$('#editplace').modal('show');
				});
			</script>";
	};
?>

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
							<li class = "active"><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/reviews/');?>"> Reviews	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"> Contributions	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/settings/');?>"> Settings	</a></li>							
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 		  		 
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	
	
	<div class = "row text-left" id = "admin_place">
		<div class = "col-md-1"> </div>
		<div class = "col-md-10"> 
			<h1> List of all Places in Database</h1>
			<div class = "row" >	
					<a class="btn btn-default" data-toggle="modal" data-target="#addnewplace" style="cursor: pointer;"><span class="glyphicon glyphicon-plus"></span> Add a place</a>
			
					<a class="btn btn-default"  href="<?php echo base_url('Pilipinas/places');?>"  style="cursor: pointer;"><span class="glyphicon glyphicon-repeat"></span>  Refresh list</a>
			</div>
		
		</div>
		<div class = "col-md-1"> </div>								  
	</div>
	<div class = "row text-left" id = "admin_place2">
		<div class = "col-md-1"> </div>
		<div class = "col-md-10"> 
			<table id="admin_tbl">
						<thead class = "text-center">
							<th  id = "tbl_id">Id</th>
							<th  id = "tbl_picture"> Picture</th>
							<th  id = "tbl_name"> Name</th>
							<th  id = "tbl_location"> Location</th>
							<th  id = "tbl_id"> Rating</th>
							<th  id = "tbl_id"> Votes</th>
							<th  id = "tbl_actions"> Actions</th>
						</thead>
						<tbody>
							<?php
									foreach($places as $n){
										echo '
										<tr>	
											<td id = "tbl_id">'; echo $n['place_id']; echo '</td>
											<td id = "tbl_img"><img class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$n['image']);echo'"></td>
											<td id = "tbl_name"> <p>'; echo $n['name']; echo '</p></td>
											<td id = "tbl_location"> <p>'; echo $n['locality']; echo $n['province']; echo $n['region']; echo'</p></td>
											<td id = "tbl_id"> '; echo $n['rating']; echo ' </td> 
											<td id = "tbl_id"> '; echo $n['vote']; echo ' </td> 
											<td id = "tbl_actions">
												
												<a class="btn btn-danger"  style="cursor: pointer;" href="';  echo base_url('Pilipinas/deleteplace'); echo '?place_id='.$n['place_id']; echo '"><span class="glyphicon glyphicon-trash"></span></a>
												
												<a class="btn btn-default" style="cursor: pointer;" href="';  echo base_url('Pilipinas/editplace'); echo '?place_id='.$n['place_id']; echo '"><span class="glyphicon glyphicon-edit"></span></a>
												
											</td>
										</tr>
										';
									}
								
								
								
							?>
							
						</tbody>	
			</table>
		</div>
		<div class = "col-md-1"> </div>								  
	</div>
	
	
	


	
	




	
</div> <!-- end of container-fluid -->



<!--Modal for add new-->
		
		<div class="modal fade" id="addnewplace" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" id="placemodalheader">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>Add a new Place</h4>
					</div>
					
					
					<div class=" row modal-body text-center">
						<div class="col-md-6">
						<?php echo form_open_multipart('pilipinas/addplace');?>
							<h3>Name</h3>
								<input type="text" name="name" placeholder = ""></input>
							<h3>Description</h3>
								<input type="text" name="description" placeholder = ""></input>
							<h3>Locality</h3>
								<input type="text" name="locality" placeholder = ""></input> 
						</div>
							<div class="col-md-6">
								<h3>Category</h3>
								<select name="category">
								  <option value="1"> New world/ City</option>
								  <option value="2"> Beach/ Island</option>
								  <option value="3"> Mountain/ Mainland</option>
								  <option value="4"> Heritage/ Park/ Monument</option>
								</select>
								<h3>Province</h3>
									<input type="text" name="province" placeholder = ""></input> 
								<h3>Region</h3>
								<select name="region">
								  <option value="1">Region 1 Ilocos</option>
								  <option value="2">Region 2 Cagayan</option>
								  <option value="3">Region 3 Central Luzon</option>
								  <option value="4A">Region 4A CALABARZON</option>
								  <option value="4B">Region 4B MIMAROPA</option>
								  <option value="5">Region 5 Western Visayas</option>
								  <option value="7">Region 7 Central Visayas</option>
								  <option value="8">Region 8 Eastern Visayas</option>
								  <option value="9">Region 9 ZAmboanga Peninsula</option>
								  <option value="10">Region 10 Northern Mindanao</option>
								  <option value="11">Region 11 Davao</option>
								  <option value="12">Region 12 SOCCSKSARGEN</option>
								  <option value="NCR">Region 13 Nationa Capital</option>
								  <option value="CAR">Region 14 Cordillera Administrative </option>
								  <option value="ARMM">Region 15 ARMM</option>
								  <option value="16">Region 16 CARAGA</option>
								</select>
							</div>
						</div>
						<div class = "row" style = "margin-left: 30px;" >
							<h3> Upload 3 different Pictures</h3>
							<input type="file" name="image" size="20" />
							<input type="file" name="image2" size="20" />
							<input type="file" name="image3" size="20" />
							<h3>Map</h3>
								<input type="text" name="map" placeholder = "embed link here"></input> 
						</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-default" > <span class="glyphicon glyphicon-plus"></span>Sumbit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		

		
<!-- modal for confirm delete -->
<div class="modal fade" id="deleteplace" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header text-center" style = "background-color: yellow; color: black;">
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
						<h4>WARNING!</h4>
					</div>
					
					
					<div class=" row modal-body text-center">
						<h2> Are you sure you want to delete this place from database?</h2>
						<h2> It cannot be undo</h2>
					</div>
					<div class="modal-footer text-center">
						<button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-trash"></span>DELETE</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		