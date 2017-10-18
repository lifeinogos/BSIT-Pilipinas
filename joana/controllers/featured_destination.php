<?php
		$month = date("m");
		$getmonthfesti = $this->pilipinas->month($month);
		
		$placeid = null;
		
		foreach($getmonthfesti as $n){
			$id = array(
				'place_id' => $n['place_id']
			);
			$placeid[]=$id;
		}
		
		
		
		$featured_1 = $this->pilipinas->details($placeid[0]['place_id']);
		$featured_2 = $this->pilipinas->details($placeid[1]['place_id']);
		
		$placeid1 = null;
		
		foreach($featured_1 as $n){
			$id = array(
				'place_id' => $n['place_id'],
				'name' => $n['name'],
				'description' => $n['description'],
				'image' => $n['image'],
				'thumbs' => $n['thumbs']
				
			);
			$placeid1[]=$id;
		}
		
		$data['featured_1'] = $placeid1;
		
		$placeid2 = null;
		foreach($featured_2 as $n){
			$id = array(
				'place_id' => $n['place_id'],
				'name' => $n['name'],
				'description' => $n['description'],
				'image' => $n['image'],
				'thumbs' => $n['thumbs']
			);
			$placeid2[]=$id;
		}
		$data['featured_2'] = $placeid2;
?>	