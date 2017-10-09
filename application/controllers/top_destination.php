<?php
//Top Destination
		$top = $this->pilipinas->topdestination();
		
		
		foreach($top as $n){
			$id = array(
				'place_id' => $n['place_id'],
				'name' => $n['name'],
				'image' => $n['image']
			);
			$placeid1[]=$id;
		
		}
		$data['topdesti'] = $placeid1; 
		
?>