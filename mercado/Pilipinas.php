<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilipinas extends CI_Controller {

	
		public function __construct(){
		
		parent::__construct();
		$this->load->helper('url');
		//model name & nickname
		$this->load->model('students_model','pinasmodel');
		}
		
		
		public function index(){		
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
				
			
			require 'featured_destination.php';
			require 'top_destination.php';
			
			//count visitors
			$countv = $this->pinasmodel-> countvisitors();
			
			//update count of visitors
			$newcountv = $this->pinasmodel-> updatecountvisitors($countv);
			

			//Load the views
			$this->load->view('include/header', $data);
			$this->load->view('webview/homepage', $data);
		}	
		
		//load explore tab
		public function travel(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$categ = $_GET['category'];
			$viewt = $_GET['viewtype'];
			
			
			if($categ==0){$data['label'] = ""; 
						$date['categ'] = 0;}
			elseif ($categ==1){$data['label'] = "New World"; 
								$date['categ'] = 1;}
			elseif ($categ==2){$data['label'] = "Beaches"; 
								$date['categ'] = 2;}
			elseif ($categ==3){$data['label'] = "Mountain/land"; 
								$date['categ'] = 3;}
			elseif ($categ==4){$data['label'] = "Heritage/Monuments"; 
								$date['categ'] = 4;}
			
			if($viewt=='0'){
				$data['view'] = "grid";}
			else{$data['view'] = "list";}
			
			
			$top = $this->pinasmodel->travelsort($categ);
			
			
	
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
					'map'       => $n['map'],
				);
				$places[]=$id;
			
			}
			$data['places'] = $places; 
			
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/travel', $data);
			// $this->load->view('include/footer');
		}
		
		
		public function search(){  
			$data['title'] = "Bootstrap Intro";
			$data['contents'] = "Display bootstrap contents";
			
			$value = $_GET['search'];
			$result_search = $this ->pinasmodel->search($value);
			
			$details_search = null;
			if($result_search != 'none'){
				foreach ($result_search as $n){
					$list = array(
						'placeid' => $n['place_id'],
						'name' => $n['name'],
						'image' => $n['image'],
						'locality' => $n['locality'],
						'province' => $n['province'],
						'region' => $n['region'],
						'rating' => $n['rating']
					);
					$details_search[] = $list;
				
				}
				
				$data['search'] = $details_search;
			}
			else {
				$data['search'] = 'No result found, try another one';
			}
			$data['value'] = $value;
			$this->load->view('include/header', $data);
			$this->load->view('webview/search');
			// $this->load->view('include/footer');
		}
		
		//open details page
		public function details(){
			$placeid = $_GET['place_id'];
			$data['title'] = "Pili-pinas";
			$details_page= $this->pinasmodel->place_page($placeid);
			
			$review_list = $this->pinasmodel->review_getlist($placeid);
			$details_review = null;
			$list = null;
			if($review_list != 'false'){
				foreach ($review_list as $n){
					$list = array(
						'review_id' => $n['review_id'],
						'rating' => $n['rating'],
						'reviewer' => $n['reviewer'],
						'review' => $n['review']
					);
					$details_review[] = $list;
				
				}
				
				$data['reviews'] = $details_review;
			}
			else {
				$data['reviews'] = 'none';
			}
			
			
			
			
			// print_r ($place_id);
			$details_complete = null;
		
			foreach($details_page as $n){
				$id = array(
					'place_id' => $n['place_id'],
					'name' => $n['name'],
					'description' => $n['description'],
					'locality' => $n['locality'],
					'province' => $n['province'],
					'region' => $n['region'],
					'image' => $n['image'],
					'image2' => $n['image2'],
					'image3' => $n['image3'],
					'thumbs' => $n['thumbs'],
					'rating' => $n['rating'],
					'map' => $n['map'],
					'vote' => $n['vote']	
				);
				$details_complete[]=$id;	
			}
		
			
			$data['details_page'] = $details_complete;
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/page', $data);
			// $this->load->view('include/footer');
		}	
		
		//update ng rating
		public function rating(){
				
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			$rate = $_POST['rating'];
			$reviewer = $_POST['reviewname'];
			$review = $_POST['reviewmismo'];
			
			$placeid = $_POST['place_id'];	
			
			
			$new_reviewid = $this->pinasmodel->latest_pendingreviewid();
			
			$new_reviewid = $new_reviewid+1;
			
			$new_review = array (
				
				
				
				
				'treview_id' => $new_reviewid,
				'place_id' => $placeid,
				'reviewer' => $reviewer,
				'review' => $review,
				'rating' => $rate
				
			); //i array ang ipapasa
			
			
			$reviewtablename = "pending_review";      // name of table
			$new_review = $this->pinasmodel->review_insert($reviewtablename, $new_review); // send to model to insrt
			
			
			//get list of reviews
			
			$review_list = $this->pinasmodel->review_getlist($placeid);
			$details_review = null;
			
			if($review_list != 'false'){
				foreach ($review_list as $n){
					$list = array(
						'rating' => $n['rating'],
						'reviewer' => $n['reviewer'],
						'review' => $n['review'],
						'reports' => $n['reports']
					);
					$details_review[] = $list;
				
				}
				
				$data['reviews'] = $details_review;
			}
			else {
				$data['reviews'] = 'none';
			}
			
			
			
			
			// rating
			 $new_rating = $this->pinasmodel->place_page($placeid);
			 $details_complete = null;
		
			//KUNIN ULIT LAMAN NUNG PAGE
			$id = array(
				'place_id' => $new_rating[0]['place_id'],
				'name' => $new_rating[0]['name'],
				'description' => $new_rating[0]['description'],
				'locality' => $new_rating[0]['locality'],
				'province' => $new_rating[0]['province'],
				'region' => $new_rating[0]['region'],
				'rating' => $new_rating[0]['rating'],
				'vote' =>  $new_rating[0]['vote'],
				'image' => $new_rating[0]['image'],		
				'thumbs' => $new_rating[0]['thumbs'],		
				'image2' => $new_rating[0]['image2'],		
				'image3' => $new_rating[0]['image3'],		
				'map' => $new_rating[0]['map'],		
			);
			
			
			
			$details_complete[]=$id;

			$data['details_page'] = $details_complete;
			$this->details2($placeid);
		}
		
		//details after review
		public function details2($id){
			$placeid = $id;
			$data['title'] = "Pili-pinas";
			$details_page= $this->pinasmodel->place_page($placeid);
			
			$review_list = $this->pinasmodel->review_getlist($placeid);
			$details_review = null;
			$list = null;
			if($review_list != 'false'){
				foreach ($review_list as $n){
					$list = array(
						'rating' => $n['rating'],
						'reviewer' => $n['reviewer'],
						'review' => $n['review']
					);
					$details_review[] = $list;
				
				}
				
				$data['reviews'] = $details_review;
			}
			else {
				$data['reviews'] = 'none';
			}
			
			
			
			
			// print_r ($place_id);
			$details_complete = null;
		
			foreach($details_page as $n){
				$id = array(
					'place_id' => $n['place_id'],
					'name' => $n['name'],
					'description' => $n['description'],
					'locality' => $n['locality'],
					'province' => $n['province'],
					'region' => $n['region'],
					'image' => $n['image'],
					'image2' => $n['image2'],
					'image3' => $n['image3'],
					'thumbs' => $n['thumbs'],
					'rating' => $n['rating'],
					'map' => $n['map'],
					'vote' => $n['vote']	
				);
				$details_complete[]=$id;	
			}
		
			
			$data['details_page'] = $details_complete;
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/page', $data);
			// $this->load->view('include/footer');
		}	
		
		
		//display history page
		public function history(){			
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/history', $data);
			// $this->load->view('include/footer');
		}
		
		//display about
		public function about(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/about', $data);
			// $this->load->view('include/footer');
		}
		
		//ADMIN FUNCTIONS
		public function request(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_request', $data);
		}
		public function clients(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_clients', $data);
			
		}
		public function places(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$categ = 0;
			$top = $this->pinasmodel->travelsort($categ);
			
			
	
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
					'map'       => $n['map'],
				);
				$places[]=$id;
			
			}
			$data['places'] = $places; 
		
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_places', $data);
				
		}
		public function advertising(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_advertising', $data);
					
		}
		public function logout(){
		
		}
		
		//the admin
		public function home_admin(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			$countv = $this->pinasmodel-> countvisitors();
			$numberofplaces = $this->pinasmodel -> countplaces();
			$mostpopular = $this->pinasmodel -> mostpopular();
			
			$data['visits']= $countv;
			$data['places']= $numberofplaces;
			$data['popular']= $mostpopular;
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_home', $data);
		}
		
		//addplace
		public function addplace(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$config['upload_path'] = './img/1place/1200x800/'; //The path where the image will be save
			$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
			
			
			if (!$this->upload->do_upload('image')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				//$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			}
			$file_info = $this->upload->data('');
			$upload_image1 = $file_info['file_name'];
			
			
			
			if (!$this->upload->do_upload('image2')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				//$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			}
			$file_info = $this->upload->data('');
			$upload_image2 = $file_info['file_name'];
			
			
			
			if (!$this->upload->do_upload('image3')){
				$uploadError = array('upload_error' => $this->upload->display_errors()); 
				//$this->set_flashdata('uploadError', $uploadError, 'hiremetro/home.php'); //If for some reason the upload could not be done, returns the error in a flashdata and redirect to the page you specify in $urlYouWantToReturn
				exit;
			}
						
			$file_info = $this->upload->data('');
			$upload_image3 = $file_info['file_name'];
			
			$place_id = $this ->pinasmodel -> latestid();
			
			//get the latest values
			$pass = array(
				'place_id' => $place_id + 1,
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'category' => $_POST['category'],
				'locality' => $_POST['locality'],
				'province' => $_POST['province'],
				'region' => $_POST['region'],
				'rating' => 0,
				'rating_total' => 0,
				'vote' => 0,
				'image' => $upload_image1,
				'thumbs' => $upload_image1,
				'image2' => $upload_image2,
				'image3' => $upload_image3,
				'map' => $_POST['map']
			);
			$table = 'place';
				
			$this ->pinasmodel -> upload_place($table,$pass);
			$categ = 0;
			$top = $this->pinasmodel->travelsort($categ);
			
			
	
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
					'map'       => $n['map'],
				);
				$places[]=$id;
			
			}
			$data['places'] = $places; 
		
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_places', $data);
			
		}
		
		public function editplace(){
			$placeid = $_GET['place_id'];
			$data['title'] = "Pili-pinas";
			
			$details_page= $this->pinasmodel->place_page($placeid);	
			$review_list = $this->pinasmodel->review_getlist($placeid);
				
			// print_r ($place_id);
			$details_complete = null;
				$id = array(
					'place_id' => $details_page[0]['place_id'],
					'name' => $details_page[0]['name'],
					'description' => $details_page[0]['description'],
					'category' => $details_page[0]['category'],
					'locality' => $details_page[0]['locality'],
					'province' => $details_page[0]['province'],
					'region' => $details_page[0]['region'],
					'image' => $details_page[0]['image'],
					'image2' => $details_page[0]['image2'],
					'image3' => $details_page[0]['image3'],
					'thumbs' => $details_page[0]['thumbs'],
					'rating_total' => $details_page[0]['rating_total'],
					'rating' => $details_page[0]['rating'],
					'map' => $details_page[0]['map'],
					'vote' => $details_page[0]['vote']	
				);
			
			
		
			
			$data['value'] = $id;		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_editplace', $data);
			
			
			
			// $this->load->view('include/footer');
			
			
			
			
			
			
		}
		
		public function editplace2(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$config['upload_path'] = './img/1place/1200x800/'; //The path where the image will be save
			$config['allowed_types'] = 'jpeg|jpg|png'; //Images extensions accepted
			$config['overwrite'] = TRUE; //If exists an image with the same name it will overwrite. Set to  false if don't want to overwrite
			$this->load->library('upload', $config); //Load the upload CI library
			
			$old = 2;
			$old2 = 2;
			$old3 = 2;
			
			if (!$this->upload->do_upload('image')){
				
			}
			else {
				$old = 1;	
				$file_info = $this->upload->data('');
				$upload_image1 = $file_info['file_name'];
			}
			
			
			
			if (!$this->upload->do_upload('image2')){
				
			}
			else {
				$old2 = 1;
				$file_info = $this->upload->data('');
				$upload_image2 = $file_info['file_name'];
			}
			
			
			if (!$this->upload->do_upload('image3')){
				
			}			
			else {
				$old3 = 1;
				$file_info = $this->upload->data('');
				$upload_image3 = $file_info['file_name'];
			}
			
			$place_id = $_POST['place_id'];
			
			//get the latest values
			
			echo 
			'haha';
			
				if($old == 2){$image = $_POST['image_old'];}
					else{ $image = $upload_image1;};
				if($old2 == 2){ $image2 = $_POST['image2_old']; }
					else{ $image2 = $upload_image2;};
				if($old3 == 2){ $image3 = $_POST['image3_old']; }
					else{ $image3 = $upload_image3;};
			
			
			$pass = array(
				'place_id' => $_POST['place_id'],
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'category' => $_POST['category'],
				'locality' => $_POST['locality'],
				'province' => $_POST['province'],
				'region' => $_POST['region'],
				
				'thumbs' => $image,
				'image' => $image,
				'image2' => $image2,
				'image3' => $image3,
				'rating_total' =>  $_POST['rating_total'],
				'rating' => $_POST['rating'],
				'vote' =>  $_POST['vote'],
				'map' => $_POST['map']
			);
			$table = 'place';
				
			$this ->pinasmodel -> edit_place($table,$pass,$place_id);
			$categ = 0;
			$top = $this->pinasmodel->travelsort($categ);
			
			
			
	
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
					'map'       => $n['map'],
				);
				$places[]=$id;
			
			}
			$data['places'] = $places; 
			
			
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_places', $data);
		}
		
		//adminlogin
		public function admin_login(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_login', $data);
					
		}
		
		
		public function login(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$user = $_GET['user'];
			$pass = $_GET['pass'];

			$acc = $this->pinasmodel-> account($user, $pass);
			if($acc==NULL){
				echo '<h5 style="color:red;">You have entered a wrong username or password</h5>';
			}else {
			foreach($acc as $n){
				$id = array(
					'Username'    => $n['Username'],
					'Password'    => $n['Password'],
				);
				$adminn[]=$id;
			
			}
			$data['adminn'] = $adminn; 
			echo $adminn[0]['Username'];
			echo $adminn[0]['Password'];
			}
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_login', $data);
		}

		
		
		
		
		//-----------------------------REVIEWS --------------------------
		//manage pending reviews
		public function reviews(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$reviews = $this->pinasmodel->pendingreviews();
			
			//pag may laman
			if($reviews != 'false')	{
				foreach($reviews as $n){
					$id = array(
						'rating'   		 => $n['rating'],
						'reviewer'        => $n['reviewer'],
						'review'		 => $n['review'],
						'place_id'   	 => $n['place_id'],
						'treview_id'		  => $n['treview_id']
						
					);
					$review[]=$id;
			
				}
			
			
				$data['review'] = $review; 
				
				$count = $this->pinasmodel->count_pending();
				$data['count'] = $count;	
			}
			//pag walang laman
			else {
				$data['review'] = 'No pending reviews';
				$data['count'] = '0';
				
			}
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_reviews', $data);
			
		}
		
		//delete pending review 
		public function delete_pending(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$treview_id = $_POST['treview_id'];
			$table = "pending_review";
			$this->pinasmodel->delete_pending($table, $treview_id);
			
			//kunin ulit bagong list ng pending
			$reviews = $this->pinasmodel->pendingreviews();
			if($reviews != 'false')	{
				foreach($reviews as $n){
					$id = array(
					'rating'   		 => $n['rating'],
					'reviewer'        => $n['reviewer'],
					'review'		 => $n['review'],
					'place_id'   	 => $n['place_id'],
					'treview_id'		  => $n['treview_id']
					
					);
					$review[]=$id;
			
				}
			
			
				$data['review'] = $review; 
				
				$count = $this->pinasmodel->count_pending();
				$data['count'] = $count;	
			}
			//pag walang laman
			else {
				$data['review'] = 'No pending reviews';
				$data['count'] = '0';
			}
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_reviews', $data);
		}
		
		
		//add pending review to approved
		public function add_pending(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			$treview_id = $_POST['treview_id'];
			$table_treview = 'pending_review';
			
			//kunin ang laman ni pending revew row
			$treview_row = $this->pinasmodel->getpendingreviewrow($table_treview, $treview_id);
			$row = array(
					'rating'   	  => $treview_row[0]['rating'],
					'reviewer'    => $treview_row[0]['reviewer'],
					'review'	  => $treview_row[0]['review'],
					'place_id'    => $treview_row[0]['place_id'],
					'treview_id'	  => $treview_row[0]['treview_id'],
				);
				$place_id = $row['place_id'];
				$rating = $row['rating'];
				
				$details_page= $this->pinasmodel->place_page($place_id);	
				$table = 'review';
				
				
				$id = array(
					'place_id' => $details_page[0]['place_id'],
					'name' => $details_page[0]['name'],
					'description' => $details_page[0]['description'],
					'category' => $details_page[0]['category'],
					'locality' => $details_page[0]['locality'],
					'province' => $details_page[0]['province'],
					'region' => $details_page[0]['region'],
					'image' => $details_page[0]['image'],
					'image2' => $details_page[0]['image2'],
					'image3' => $details_page[0]['image3'],
					'thumbs' => $details_page[0]['thumbs'],
					'rating_total' => $details_page[0]['rating_total'],
					'rating' => $details_page[0]['rating'],
					'map' => $details_page[0]['map'],
					'vote' => $details_page[0]['vote']	
				);
				
				$newrating = 0;
				$newvote = 0;
				$newratingtotal = 0;
				
				$newratingtotal = $id['rating_total'] + $rating;
				$newvote = $id['vote'] + 1;
				$newrating = $newratingtotal / $newvote;
				
				
				$pass = array(
				'place_id' => $id['place_id'],
				'name' => $id['name'],
				'description' => $id['description'],
				'category' => $id['category'],
				'locality' => $id['locality'],
				'province' => $id['province'],
				'region' => $id['region'],
				
				'thumbs' => $id['thumbs'],
				'image' => $id['image'],
				'image2' => $id['image2'],
				'image3' => $id['image3'],
				'rating_total' =>  $newratingtotal,
				'rating' => $newrating,
				'vote' => $newvote,
				'map' => $id['map']
			);
			$table2 = 'place';
			//update place 
			$this ->pinasmodel -> edit_place($table2,$pass,$place_id);
			
			//update review.tbl
			//hanapin sa review.tbl ang latest review id
			$review_id = 0;
			$review_id = $this ->pinasmodel -> latest_reviewid();
			$haha = array(
				'id' => $review_id['review_id']
			);
			
			$new_reviewid = $haha['id']+ 1;
			
			$new_review = array (
				'rating' => $treview_row[0]['rating'],
				'reviewer' => $treview_row[0]['reviewer'],
				'review' => $treview_row[0]['review'],
				'review_id' => $new_reviewid,
				'place_id' => $place_id,
				'reports' => 0
			); //i array ang ipapasa
			
			
			$reviewtablename = "review"; 
			$this->pinasmodel->moveto_approved($reviewtablename, $new_review);
				
				
			//i-delete na sa pending_review
			
			$this->pinasmodel->delete_pending($table, $treview_id);
			
			//kunin ulit bagong list ng pending
			$reviews = $this->pinasmodel->pendingreviews();
			if($reviews != 'false')	{
				foreach($reviews as $n){
					$id = array(
					'rating'   		 => $n['rating'],
					'reviewer'        => $n['reviewer'],
					'review'		 => $n['review'],
					'place_id'   	 => $n['place_id'],
					'treview_id'		  => $n['treview_id']
					
					);
					$review[]=$id;
			
				}
			
			
				$data['review'] = $review; 
				
				$count = $this->pinasmodel->count_pending();
				$data['count'] = $count;	
			}
			//pag walang laman
			else {
				$data['review'] = 'No pending reviews';
				$data['count'] = '0';
			}
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_reviews', $data);
			
			
			
		}
		
		//manage approved reviews
		public function reviews_2(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$reviews = $this->pinasmodel->approvedreviews();	
			
			if($reviews != 'false')	{
				foreach($reviews as $n){
					$id = array(
					'rating'   		 => $n['rating'],
					'reviewer'        => $n['reviewer'],
					'review'		 => $n['review'],
					'place_id'   	 => $n['place_id'],
					'review_id'		  => $n['review_id'],
					
					'reports'	  => $n['reports']
					);
					$review[]=$id;
			
				}
			
			
				$data['review'] = $review; 
				
				$count = $this->pinasmodel->count_pending();
				$data['count'] = $count;	
			}
			//pag walang laman
			else {
				$data['review'] = 'No pending reviews';
				$data['count'] = '0';
			}
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_reviews_2', $data);
			
		}
		
		//delete an approved review
		public function delete_approved(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
				$vm = $this;
				$review_id = $_GET['review_id'];
				$table = "review";
				$place_id = $_GET['place_id'];
				$rating = $_GET['rating'];
			
			//delete review from database
			$this->pinasmodel->delete_approved($table, $review_id);
			
			
			
			//kunin ang updated na list ng reviews
			$reviews = $this->pinasmodel->approvedreviews();
			//bilangin ulit kung ilang reviews
			$count = $this->pinasmodel->count_approved();
			foreach($reviews as $n){
				$id = array(
					'rating'   		 => $n['rating'],
					'reviewer'        => $n['reviewer'],
					'review'		 => $n['review'],
					'place_id'   	 => $n['place_id'],
					'review_id'		  => $n['review_id'],
					'likes'	  		=> $n['likes'],
					'reports'	  => $n['reports']
				);
				$review[]=$id;
			
			}
			$data['review'] = $review; 
			$data['count'] = $count;	
			
			//update the place record to delete number of reviews and minus it to the rating
			$details_page= $this->pinasmodel->place_page($place_id);	
			
				$id = array(
					'place_id' => $details_page[0]['place_id'],
					'name' => $details_page[0]['name'],
					'description' => $details_page[0]['description'],
					'category' => $details_page[0]['category'],
					'locality' => $details_page[0]['locality'],
					'province' => $details_page[0]['province'],
					'region' => $details_page[0]['region'],
					'image' => $details_page[0]['image'],
					'image2' => $details_page[0]['image2'],
					'image3' => $details_page[0]['image3'],
					'thumbs' => $details_page[0]['thumbs'],
					'rating_total' => $details_page[0]['rating_total'],
					'rating' => $details_page[0]['rating'],
					'map' => $details_page[0]['map'],
					'vote' => $details_page[0]['vote']	
				);
				
				$newrating = 0;
				$newvote = 0;
				$newratingtotal = 0;
				
				$newratingtotal = $id['rating_total'] - $rating;
				$newvote = $id['vote'] - 1;
				$newrating = $newratingtotal / $newvote;
				
			$pass = array(
				'place_id' => $id['place_id'],
				'name' => $id['name'],
				'description' => $id['description'],
				'category' => $id['category'],
				'locality' => $id['locality'],
				'province' => $id['province'],
				'region' => $id['region'],
				
				'thumbs' => $id['thumbs'],
				'image' => $id['image'],
				'image2' => $id['image2'],
				'image3' => $id['image3'],
				'rating_total' =>  $newratingtotal,
				'rating' => $newrating,
				'vote' => $newvote,
				'map' => $id['map']
			);
			$table2 = 'place';
			$this ->pinasmodel -> edit_place($table2,$pass,$place_id);
	
			
			
		}
		// delete via form post
		public function delete_approved2(){
			$review_id = $_POST['review_id'];
			$table_review = 'review';
			
			
			$review_row = $this->pinasmodel->getreviewrow($table_review, $review_id);
				
				$row = array(
					'rating'   	  => $review_row[0]['rating'],
					'reviewer'    => $review_row[0]['reviewer'],
					'review'	  => $review_row[0]['review'],
					'place_id'    => $review_row[0]['place_id'],
					'review_id'	  => $review_row[0]['review_id'],
					'reports'	  	  => $review_row[0]['reports']
					
				);
				
				$place_id = $row['place_id'];
				$rating = $row['rating'];
				
				$details_page= $this->pinasmodel->place_page($place_id);	
				$table = 'review';
				
				
				$id = array(
					'place_id' => $details_page[0]['place_id'],
					'name' => $details_page[0]['name'],
					'description' => $details_page[0]['description'],
					'category' => $details_page[0]['category'],
					'locality' => $details_page[0]['locality'],
					'province' => $details_page[0]['province'],
					'region' => $details_page[0]['region'],
					'image' => $details_page[0]['image'],
					'image2' => $details_page[0]['image2'],
					'image3' => $details_page[0]['image3'],
					'thumbs' => $details_page[0]['thumbs'],
					'rating_total' => $details_page[0]['rating_total'],
					'rating' => $details_page[0]['rating'],
					'map' => $details_page[0]['map'],
					'vote' => $details_page[0]['vote']	
				);
				
				$newrating = 0;
				$newvote = 0;
				$newratingtotal = 0;
				
				$newratingtotal = $id['rating_total'] - $rating;
				$newvote = $id['vote'] - 1;
				$newrating = $newratingtotal / $newvote;
				
				
				$pass = array(
				'place_id' => $id['place_id'],
				'name' => $id['name'],
				'description' => $id['description'],
				'category' => $id['category'],
				'locality' => $id['locality'],
				'province' => $id['province'],
				'region' => $id['region'],
				
				'thumbs' => $id['thumbs'],
				'image' => $id['image'],
				'image2' => $id['image2'],
				'image3' => $id['image3'],
				'rating_total' =>  $newratingtotal,
				'rating' => $newrating,
				'vote' => $newvote,
				'map' => $id['map']
			);
			$table2 = 'place';
			$this ->pinasmodel -> edit_place($table2,$pass,$place_id);
			$this->pinasmodel->delete_approved($table, $review_id);
			
			
			//bilangin ulit kung ilang reviews
			$count = $this->pinasmodel->count_approved();
			
			//kunin ang updated na list ng reviews
			$reviews = $this->pinasmodel->approvedreviews();
			foreach($reviews as $n){
				$id = array(
					'rating'   		 => $n['rating'],
					'reviewer'        => $n['reviewer'],
					'review'		 => $n['review'],
					'place_id'   	 => $n['place_id'],
					'review_id'		  => $n['review_id'],
					'reports'	  => $n['reports']
				);
				$review[]=$id;
			
			}
			$data['review'] = $review; 
			$data['count'] = $count;	
			
			
			
			
			
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_reviews_2', $data);
					
		}
		
		
		
		
		//---------------------------ADMIN ADD ---------------------------------
		
		//admin add
		public function admin_add(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_add', $data);
		}
		
		//addadmin
		public function adminadd(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$name = $_POST['aname'];
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			$pass2 = $_POST['pass2'];
			
			if ($name==NULL||$user==NULL||$pass==NULL||$pass2==NULL) {
				echo 'Please complete all fields';
			} else if ($pass!==$pass2){
				echo 'Password does not match the confirm password';
			} else {
			$id = $this ->pinasmodel -> latestadminid();
			
			$pass = array(
				'admin_id' => $id + 1,
				'Name' => $_POST['aname'],
				'Username' => $_POST['user'],
				'Password' => $_POST['pass'],
			);
			$table = 'admin_accounts';
			$new=$this ->pinasmodel -> newacc($table,$pass);	
					
			}
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_add', $data);
		}
		
		//admin_settings
		public function settings(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
			
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_settings', $data);
		
		}
		
}
