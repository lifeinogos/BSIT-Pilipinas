<?php
//Top Destination
		$top = $this->pinasmodel->topdestination();
		
		
		foreach($top as $n){
			$id = array(
				'place_id' => $n['place_id'],
				'name' => $n['name'],
				'image' => $n['image'],
				'thumbs' => $n['thumbs']
			);
			$placeid1[]=$id;
		
		}
		$data['topdesti'] = $placeid1; 
		
?>