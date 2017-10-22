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
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>
							<li  ><a href="<?php echo base_url('Pilipinas/reviews/');?>"> Reviews	</a></li>
							<li class = "active"><a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"> Contributions	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/settings/');?>"> Settings	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 		  		 
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	
	
	<div class = "row text-left" id = "admin_place">
		<div class = "col-md-1"> </div>
		<div class = "col-md-10"> 
			<span = "glyphicon glyphicon-picture"></span><h1> List of Pending Photo Contributions</h1>
			<?php
				if($contributions != 'No pending contributions' ){
					echo '<h4> Total pending contributions from visitors: '; echo $count; echo '  <h4>';
				}
			?>
			<div class = "row" >	
				<a class="btn btn-default"  href="<?php echo base_url('Pilipinas/contributions_2_views/');?>"  style="cursor: pointer;"><span class="glyphicon glyphicon-list-alt"></span>Click to Manage Approved Contributions</a>
				<a class="btn btn-default"  href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"  style="cursor: pointer;"><span class="glyphicon glyphicon-repeat"></span>  Refresh list</a>
			</div>
			
		</div>
		<div class = "col-md-1"> </div>								  
	</div>
	
	<!-- new reviews -->
	<div class = "row text-left" id = "admin_place2">
		<div class = "col-md-1"> </div>
		<div class = "col-md-10"> 
			
						
							<?php
									if($contributions!= 'No pending contributions'){
										echo '
										<table id="admin_tbl">
										<thead class = "text-center">
											<th  id = "tbl_id">TCont Id</th>
											<th  id = "tbl_img">Image</th>
											<th  id = "tbl_name">Name</th>
											<th  id = "tbl_name">Place</th>
											<th  id = "tbl_location">caption</th>
											<th  id = "tbl_actions">Actions</th>
										</thead>
										<tbody>
										';
										
										
										foreach($contributions as $n){
											echo '
											<tr>	
												<td id = "tbl_id">'; echo $n['tcontribution_id']; echo '</td>
												<td id = "tbl_img"><img class="contributions" src="'; echo base_url('img/uploaded/'.$n['image']);echo'"></td>
												<td id = "tbl_name"> <p>'; echo $n['name']; echo '</p></td>
												<td id = "tbl_name"> <p>'; echo $n['place_name']; echo '</p></td>
												<td id = "tbl_location"> <p>'; echo $n['caption']; echo'</p></td>
												<td id = "tbl_actions">
														<form action = "'; echo base_url('Pilipinas/delete_pending_contribution'); echo'" method = "POST">
														<button class = "btn btn-danger glyphicon glyphicon-trash" type = "submit" name = "tcontribution_id" value = "'; echo $n['tcontribution_id']; echo '><span  class=""></span></button>
														</form>
														<form action = "'; echo base_url('Pilipinas/add_pending_contribution'); echo'" method = "POST">
														<button class = "btn btn-success glyphicon glyphicon-ok" type = "submit"name = "tcontribution_id" value = "'; echo $n['tcontribution_id']; echo '><span  class=""></span></button>
										
													</form>
												</td>
											</tr>
											
											';
										}
										
										echo '</tbody>	
										</table>';
									}//end ng if merong pending
									else{
										echo '
										<h2> Refresh, there is no pending photo contributions right now</h2>
										';
									}
								
								
							?>
							
						
		</div>
		<div class = "col-md-1"> </div>								  
	</div>
	
	
	
	

	
</div> <!-- end of container-fluid -->


		
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
		