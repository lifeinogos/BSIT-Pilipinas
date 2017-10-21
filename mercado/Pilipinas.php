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
			$rate = $_GET['rating'];
			$reviewer = $_GET['reviewname'];
			$review = $_GET['reviewmismo'];
			
			$placeid = $_GET['place_id'];	
			
			
			$new_reviewid = $this->pinasmodel-> reviewid();
			
			$new_reviewid = $new_reviewid+1;
			
			$new_review = array (
				'rating' => $rate,
				'reviewer' => $reviewer,
				'review' => $review,
				'place_id' => $placeid,
				'review_id' => $new_reviewid
			); //i array ang ipapasa
			
			
			$reviewtablename = "review";      // name of table
			$new_review = $this->pinasmodel->review_insert($reviewtablename, $new_review); // send to model to insrt
			
			
			//get list of reviews
			
			$review_list = $this->pinasmodel->review_getlist($placeid);
			$details_review = null;
			
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
			
			
			
			
			//rating
			$new_rating = $this->pinasmodel->rating($rate, $placeid);
			$details_complete = null;
		
			//KUNIN ULIT LAMAN NUNG PAGE
			$id = array(
				'place_id' => $new_rating['place_id'],
				'name' => $new_rating['name'],
				'description' => $new_rating['description'],
				'locality' => $new_rating['locality'],
				'province' => $new_rating['province'],
				'region' => $new_rating['region'],
				'rating' => $new_rating['rating'],
				'vote' =>  $new_rating['vote'],
				'image' => $new_rating['image'],		
				'thumbs' => $new_rating['thumbs'],		
				'image2' => $new_rating['image2'],		
				'image3' => $new_rating['image3'],		
				'map' => $new_rating['map'],		
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
}
