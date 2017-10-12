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
	
	public function update(){
	}	
	
	//DELETE
	
	public function delete_record(){
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
			'image'       => $result_1[0]['image']
		);
		
		$this->db->where('place_id', $placeid);
		$this->db->update('place', $placeinfo);
		
		return $placeinfo;
		
	}
	
	
}

?>