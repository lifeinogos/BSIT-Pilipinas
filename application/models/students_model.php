<?php

class Students_model extends CI_Model{
	
	private $table = "students";
	
	//Constructor
	
	public function __construct()
	{
		parent::__construct();
	}
	
	//CREATE
	
	
	
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
	
	//edit place
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
			'image' => $result[0]['image'],
			'rating' => $result[0]['rating'],
			'vote' => $result[0]['vote']
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
	
	
	
	
	//--------------------------------------------REVIEWS --------------------------
	//admin_ get approved reviews
	public function approvedreviews(){
		$this->db->select('*');
		$this->db->from('review');
		$this->db->order_by('review_id', 'desc');
		
		
		$query = $this->db->get();
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
	}
	
	//count how many approved reviews
	public function count_approved(){
		$this->db->select('*');
		$this->db->from('review');
		$query = $this->db->get();
		
		return $norows = $query->num_rows();
	}
	
	//select that row approved review
	public function getreviewrow($table, $review_id){
		$this->db->select('*');
		$this->db->from('review');
		$this->db->where('review_id', $review_id);
		$query = $this->db->get();
		$result_1 = $query->result_array();
			return $result_1;
	}
	
	//delete approved review
	public function delete_approved($table, $review_id){
		$this->db->where('review_id', $review_id);
		$this->db->delete($table);
	}
	
	//delete pending review
	public function delete_pending($table, $review_id){
		$this->db->where('treview_id', $review_id);
		$this->db->delete('pending_review');
	}
	//delete places
	public function deleteplace($table, $place_id){
		$this->db->where('place_id', $place_id);
		$this->db->delete($table);
	}
	// admin_ gget pending reviews
	public function pendingreviews(){
		$this->db->select('*');
		$this->db->from('pending_review');
		$this->db->order_by('treview_id', 'desc');
		
		$query = $this->db->get();
		
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
		
	}
	
	
	
	//count how many pending reviews
	public function count_pending(){
		$this->db->select('*');
		$this->db->from('pending_review');
		$query = $this->db->get();
		
		return $norows = $query->num_rows();
	}
	
	//add pending account to approve db
	public function add_pending(){
		
	}
	//find latest review id
	public function latest_reviewid(){
		$this->db->select('review_id');
		$this->db->from('review');
		$this->db->order_by('review_id',"desc");
		
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return '0';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1[0];
		}
		
	}
	//latest pending review id
	public function latest_pendingreviewid(){
		$this->db->select('treview_id');
		$this->db->from('pending_review');
		$this->db->order_by('treview_id',"desc");
		
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return '0';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1[0]['treview_id'];
		}
		
	}
	
	//get the row of pending to be save
	public function getpendingreviewrow($table_treview, $treview_id){
		$this->db->select('*');
		$this->db->from('pending_review');
		$this->db->where('treview_id', $treview_id);
		$query = $this->db->get();
			$result_1 = $query->result_array();
			return $result_1;
	}
	
	//move to approve
	public function moveto_approved($reviewtablename, $new_review){
		$this->db->insert($reviewtablename, $new_review);
	}
	
	//report spam ang review
	public function spam($review_id){
		$this->db->select('*');
		$this->db->from('review');
		$this->db->where('review_id', $review_id);
		$query = $this->db->get();
		$result_1 = $query->result_array();
			return $result_1;
	}
	//update row review
	public function update_reviewrow( $updated_row,$review_id){
		$this->db->where('review_id', $review_id);
		$this->db->update('review', $updated_row);
		
	}
	
	
	
	
	///-----------------------------------CONTRIBUTIONS-------------------------------
	public function pendingcontributions(){
		$this->db->select('*');
		$this->db->from('pending_contribution');
		$this->db->order_by('tcontribution_id', 'desc');
		$query = $this->db->get();
		
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
	}
	
	//approved getlist
	public function approvedcontributions(){
		$this->db->select('*');
		$this->db->from('contribution');
		$this->db->order_by('contribution_id', 'desc');
		$query = $this->db->get();
		
		
		if($query->num_rows() < 1){
			return 'false';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1;
		}
	}
	
	
	//count how many pending contributions
	public function count_pending_contribution(){
		$this->db->select('*');
		$this->db->from('pending_contribution');
		$query = $this->db->get();
		
		return $norows = $query->num_rows();
	}
	
	//count how may approved contributons
	public function count_approved_contribution(){
		$this->db->select('*');
		$this->db->from('contribution');
		$query = $this->db->get();
		
		return $norows = $query->num_rows();
	}
	
	//kunin ung name nung lugar
	public function placename($place_id){
		$this->db->select('*');
		$this->db->from('place');
		$this->db->where('place_id', $place_id);
		$query = $this->db->get();
		
		
		$result_1 = $query->result_array();
		return $result_1[0]['name'];
	}
	
	//delete pedning contribution
	public function delete_pending_contribution($table, $tcontribution_id){
		$this->db->where('tcontribution_id', $tcontribution_id);
		$this->db->delete('pending_contribution');
	}
	//delete approved contribution
	public function delete_approved_contribution_model($table, $contribution_id){
		$this->db->where('contribution_id', $contribution_id);
		$this->db->delete('contribution');
	}
	
	//latest pending id
	public function latest_pendingcontributionid(){
		$this->db->select('tcontribution_id');
		$this->db->from('pending_contribution');
		$this->db->order_by('tcontribution_id',"desc");
		
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return '0';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1[0]['tcontribution_id'];
		}
		
	}
	
	//latest approved id
	public function latest_approvedcontributionid(){
		$this->db->select('contribution_id');
		$this->db->from('contribution');
		$this->db->order_by('contribution_id',"desc");
		
		$query = $this->db->get();
		
		if($query->num_rows() < 1){
			return '0';
		}
		else{
			$result_1 = $query->result_array();
			return $result_1[0]['contribution_id'];
		}
		
	}
	
	//move to approved contribution 
	public function moveto_approved_contribution($tablename, $new_contribution){
		$this->db->insert($tablename, $new_contribution);
	}
	
	//get the row of pending to be save
	public function getpendingcontributionrow($table_contribution, $tcontribution_id){
		$this->db->select('*');
		$this->db->from('pending_contribution');
		$this->db->where('tcontribution_id', $tcontribution_id);
		$query = $this->db->get();
			$result_1 = $query->result_array();
			return $result_1;
	}
	
	
	//-----------------------------------------------contribute list page
	public function contribute_getlist ($placeid){
		$this->db->select('*');
		$this->db->from('contribution');
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// update place table for review deletion
	public function update_place(){
		
	}
	
	
	
	
	//new admin accunt
	public function newacc($table,$pass){
		$this->db->insert($table, $pass);
	}
	
	
	
	//find the latest admin id
	public function latestadminid(){
		$this->db->select('admin_id');
		$this->db->from('admin_accounts');
		$this->db->order_by('admin_id',"desc");
		$query = $this->db->get();
		$result = $query->result_array();
		
		
		return $result[0]['admin_id'];
	}
	
	//login admin
	public function account($pass, $user){
		$this->db->select('*');
		$this->db->from('admin_accounts');
		
		$var1 = $pass;
		$var2 = $user;
		$this->db->like('Username', $var2);
		$this->db->like('Password', $var1);
		$query = $this->db->get();
		
		$result_1 = $query->result_array();
		return $result_1;
	}
	
	
	//history details
	public function historydetails($history_id){
		$this->db->select('*');
		$this->db->from('history');
		$this->db->where('history_id', $history_id);
		$query = $this->db->get();
		
		$result_1 = $query->result_array();
		return $result_1;
	}
	
	
}

?>