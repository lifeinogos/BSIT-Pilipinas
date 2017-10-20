<?php

class Students_model extends CI_Model{
	
	private $table = "students";
	
	//Constructor
	
	public function __construct()
	{
		parent::__construct();
	}
	
	//CREATE
	
	public function create(){
	}
	
	//READ
	
	public function read(){
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select('*')
		// ->from($this->table)
		// ->join ('','','')
		// ->group_by('','')
		// ->order_by('','')
		
		if (isset($where) )
			$this->db->where($where);
		
		$query=$this->db->get();
		
		return $query->result_array();
	}	
	//UPDATE
	
	
	//find the latest place id
	public function latestid(){
		$this->db->select('place_id');
		$this->db->from('place');
		$this->db->order_by('place_id',"desc");
		$query = $this->db->get();
		$result = $query->result_array();
		
		
		return $result[0]['place_id'];
	}
	
	//cadd aother place
	public function upload_place($table, $pass){
		
		$this->db->insert($table, $pass);
		
	}
	
	
	public function edit_place($table, $pass, $place_id){
		$this->db->where('place_id', $place_id);
		$this->db->update($table, $pass);
	}
	
	//count visitors
	public function countvisitors(){
		$this->db->select('*');
		$this->db->from('admin');
		$query = $this->db->get();
		$result = $query->result_array();
		
		
		if($query->num_rows() < 1){
			
			
			$addthis = array(
			'visitors'    => 1,
			);

			$this->db->insert('admin', $addthis);
			return 1;
		}
		else{
			$data = $query->result_array();
			return $data[0]['visitors'];
		}
		
	}
	//update count visitors
	public function updatecountvisitors($count){
		$account = array(
			'visitors' => $count + 1
		);
		
		$this->db->update('admin', $account);
		return $count;
		
	}
	
	//count places
	public function countplaces (){
		$this->db->select('*');
		$this->db->from('place');
		$query = $this->db->get();
		
		return $norows = $query->num_rows();
		
		
	}
	
	//popular place
	public function mostpopular (){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->order_by('vote',"desc");
		$query = $this->db->get();
		$result = $query->result_array();
		
		
		
		$mostarray = array(
			'place_id' => $result[0]['place_id'],
			'name' => $result[0]['name'],
			'image' => $result[0]['image']
		);
		
		return $mostarray;
	}
	
	//HOMEPAGE -> FEATURED
	public function month($month){
		//festuval by month
		
		$this->db->select('place_id');
		$this->db->from('festival');
		$this->db->where('month', $month);
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
	
	
	public function details($placeid){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->where('place_id', $placeid );
		
		$query = $this->db->get();
		$result_1 = $query->result_array();
		return $result_1;
	}
	
	public function topdestination(){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->order_by('rating',"desc");
		
		$query = $this->db->get();
		$result = $query->result_array();
		
		return $result;
	}
	
	//details sa page
	public function place_page ($placeid){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->where('place_id', $placeid );
		
		
		$query = $this->db->get();
		$result_1 = $query->result_array();
		return $result_1;
	}
	
	//get the latest review ID
	public function reviewid(){
		$this->db->select('review_id');
		$this->db->from('review');
		$this->db->order_by('review_id', 'desc');
		
		$query = $this->db->get();
		if($query->num_rows() < 1){
			return 0;
		}
		else{
			$data = $query->result_array();
			return $data[0]['review_id'];
		}
		
	}
	//review insert
	public function review_insert ($table, $review){
		$this->db->insert($table, $review);
	}
	
	
	//review get list
	public function review_getlist ($placeid){
		$this->db->select('*');
		$this->db->from('review');
		$this->db->where('place_id', $placeid);
		$query = $this->db->get();
		
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
		
	}
	
	
	//rating
	public function rating($rate_total, $placeid){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->where('place_id', $placeid);
		
		$query = $this->db->get();
		$result_1 = $query->result_array();
		
		$rate_old = array(
			'rating_total' => $result_1[0]['rating_total']
		);
		
		
		$rate_total = $rate_total + $rate_old['rating_total'];
		
		
		$vote_old = array(
			'vote' => $result_1[0]['vote']
		);
		
		$vote = $vote_old['vote'] + 1;
		$rating_new = $rate_total / $vote;
		
		$placeinfo = array(
			'place_id'    => $placeid,
			'name'        => $result_1[0]['name'],
			'description' => $result_1[0]['description'],
			'category'    => $result_1[0]['category'],
			'locality'	  => $result_1[0]['locality'],
			'province'	  => $result_1[0]['province'],
			'region'      => $result_1[0]['region'],
			'rating'      => $rating_new,
			'rating_total' => $rate_total,
			'vote'        => $vote,
			'image'       => $result_1[0]['image'],
			'thumbs'       => $result_1[0]['thumbs'],
			'image2'       => $result_1[0]['image2'],
			'image3'       => $result_1[0]['image3'],
			'map'       => $result_1[0]['map'],
		);
		
		$this->db->where('place_id', $placeid);
		$this->db->update('place', $placeinfo);
		
		return $placeinfo;
		
	}
	
	
	//search
	public function search($variable){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->like('name', $variable, 'both');
		$this->db->or_like('province', $variable, 'both');
		$query = $this->db->get();
		
		
		if($query->num_rows() < 1){
			return 'none';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
	}
	
	
	
	
	//soring
	public function travelsort($categ){
		$this->db->select('*');
		$this->db->from('place');
		if($categ != 0){
		$this->db->where('category', $categ);
		}
		
		
		$query = $this->db->get();
		$result_1 = $query->result_array();
		return $result_1;
	}
	
	
}

?>