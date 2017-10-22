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
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Places	</a></li>										
							<li  class = "active"><a href="<?php echo base_url('Pilipinas/places/');?>"> Edit a Place	</a></li>	
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Reviews	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/contributions_1_views/');?>"> Contributions	</a></li>
							<li><a href="<?php echo base_url('Pilipinas/places/');?>"> Settings	</a></li>										
							<li><a href="<?php echo base_url('Pilipinas');?>"> Logout	</a></li>			
			    </ul> 
				
			</div>
	</nav>
	
<div class = "container-fluid" style = "background-image: url('img/background');">	
	
		
				
		<!--Modal for edit place-->
		

					<div class = "row">
						<?php echo form_open_multipart('pilipinas/editplace2');?>
						<div class = "col-md-1"></div>
						<div class = "col-md-5">
							<br />
							<br />
							<br />
							<h2>Edit <?php echo $value['name'];?> </h2>
						</div>
						<div class = "col-md-5"></div>
						<div class = "col-md-1"></div>
					</div>
					<div class = "row">
						
						<div class = "col-md-1"></div>
						<div class = "col-md-3">
								<h3>Id</h3><input  type="text" value = "<?php echo $value['place_id'];?>" name="place_id" placeholder = ""></input>
								<h3>Name</h3>
								<input type="text" value = "<?php echo $value['name'];?>" name="name" placeholder = ""></input>
								<h3>Description</h3>
								<input type="text" value = "<?php echo $value['description'];?>" name="description" placeholder = ""></input>
								<h3>rating</h3>
								<input  type="text" value = "<?php echo $value['rating'];?>" name="rating" placeholder = ""></input>
								<h3>rating_total</h3>
								<input type="text" value = "<?php echo $value['rating_total'];?>" name="rating_total" placeholder = ""></input>
								<h3>vote</h3>
								<input  type="text" value = "<?php echo $value['vote'];?>" name="vote" placeholder = ""></input>
						</div>
						<div class = "col-md-3">
								<h3>Map</h3>
								<input type="text" value = "<?php echo $value['map'];?>" name="map" placeholder = "embed link here"></input> 
								<h3>Locality</h3>
								<input type="text" value = "<?php echo $value['locality'];?>" name="locality" placeholder = ""></input>
								<h3>Category</h3>
								<select name="category">
								  <option value="1" <?php if($value['category']=='1'){ echo 'selected';} ?> > New world/ City</option>
								  <option value="2" <?php if($value['category']=='2'){ echo 'selected';} ?>> Beach/ Island</option>
								  <option value="3" <?php if($value['category']=='3'){ echo 'selected';} ?>> Mountain/ Mainland</option>
								  <option value="4" <?php if($value['category']=='4'){ echo 'selected';} ?>> Heritage/ Park/ Monument</option>
								</select>
								<h3>Province</h3>
									<input type="text"value = "<?php echo $value['province'];?>" name="province" placeholder = ""></input> 
								<h3>Region</h3>
								<select name="region">
								  <option value="1" <?php if($value['region']=='1'){ echo 'selected';} ?>>Region 1 Ilocos</option>
								  <option value="2" <?php if($value['region']=='2'){ echo 'selected';} ?>>Region 2 Cagayan</option>
								  <option value="3" <?php if($value['region']=='3'){ echo 'selected';} ?>>Region 3 Central Luzon</option>
								  <option value="4A" <?php if($value['region']=='4A'){ echo 'selected';} ?>>Region 4A CALABARZON</option>
								  <option value="4B" <?php if($value['region']=='4B'){ echo 'selected';} ?>>Region 4B MIMAROPA</option>
								  <option value="5"<?php if($value['region']=='5'){ echo 'selected';} ?>>Region 5 Bicol</option>
								  <option value="5"<?php if($value['region']=='6'){ echo 'selected';} ?>>Region 6 Western Visayas</option>
								  <option value="7" <?php if($value['region']=='7'){ echo 'selected';} ?>>Region 7 Central Visayas</option>
								  <option value="8" <?php if($value['region']=='8'){ echo 'selected';} ?>>Region 8 Eastern Visayas</option>
								  <option value="9" <?php if($value['region']=='9'){ echo 'selected';} ?>>Region 9 ZAmboanga Peninsula</option>
								  <option value="10" <?php if($value['region']=='10'){ echo 'selected';} ?>>Region 10 Northern Mindanao</option>
								  <option value="11" <?php if($value['region']=='11'){ echo 'selected';} ?>>Region 11 Davao</option>
								  <option value="12" <?php if($value['region']=='12'){ echo 'selected';} ?>>Region 12 SOCCSKSARGEN</option>
								  <option value="NCR" <?php if($value['region']== 'NCR'){ echo 'selected';} ?>>Region 13 Nationa Capital</option>
								  <option value="CAR" <?php if($value['region']== 'CAR'){ echo 'selected';} ?>>Region 14 Cordillera Administrative </option>
								  <option value="ARMM" <?php if($value['region']== 'ARMM' ){ echo 'selected';} ?>>Region 15 ARMM</option>
								  <option value="16" <?php if($value['region']== '16'){ echo 'selected';} ?>>Region 16 CARAGA</option>
								</select>
							
						</div>
						<div class = "col-md-3">
								
							<h3> Upload 3 different Pictures</h3>
							<div style="width:200; height:100;overflow-y: hiddden;">
								<img id="blah" alt="new image" width="30%"  />
							</div>
							<input type="file" name="image" size = "20" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
							<input type="text" value = "<?php echo $value['image'];?>" name="image_old" placeholder = "<?php echo $value['image'];?>"></input>
							<?php echo' <div><img style="width: 800;" class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$value['image']);echo'"> </div> '; ?> 
							
							
							<div style="width:200; height:100;overflow-y: hiddden;">
								<img id="blah2" alt="new image" width="30%"  />
							</div>
							<input type="file" name="image2" size = "20" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
							<input type="text" value = "<?php echo $value['image2'];?>" name="image2_old" placeholder = "<?php echo $value['image2'];?>"></input>
							<?php echo' <div><img style="width: 800;" class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$value['image2']);echo'"> </div> '; ?>  
							
							
							<div style="width:200; height:100;overflow-y: hiddden;">
								<img id="blah3" alt="new image" width="30%"  />
							</div>
							<input type="file" name="image3" size = "20" onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])">		
							<input type="text" value = "<?php echo $value['image3'];?>" name="image3_old" placeholder = "<?php echo $value['image3'];?>"></input>
							<?php echo' <div><img style="width: 800;" class="rig-img" src="'; echo base_url('img/1place/1200x800/'.$value['image3']);echo'"> </div> '; ?>  
								
						
						
						</div>
						<div class = "col-md-1">
						<button type="submit" class="btn btn-default"  > <span class="glyphicon glyphicon-plus"></span>Sumbit</button>
						</form></div>
					</div>
					<div class = "row">
						
							
							
							
							 
		
							
								
					
					
			
					</div>

	
</div> <!-- end of container-fluid -->