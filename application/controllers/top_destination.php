<?php
//Top Destination
		$top = $this->pinasmodel->topdestination();
		
		
		foreach($top as $n){
			$id = array(
					'place_id'    => $n['place_id'],
					'name'        => $n['name'],
					'description' => $n['description'],
					'category'    => $n['category'],
					'locality'	  => $n['locality'],
					'province'	  => $n['province'],
					'region'      => $n['region'],
					'rating'      => $n['rating'],
					'rating_total' => $n['rating_total'],
					'vote'        => $n['vote'],
					'image'       => $n['image'],
					'thumbs'       => $n['thumbs'],
					'image2'       => $n['image2'],
					'image3'       => $n['image3'],
					'map'          => $n['map'],
			);
			$placeid1[]=$id;
		
		}
		$data['topdesti'] = $placeid1; 
		
?>