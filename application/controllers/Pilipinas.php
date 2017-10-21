<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilipinas extends CI_Controller {

	
		public function __construct(){
		
		parent::__construct();
		$this->load->helper('url');
		//model name & nickname
		$this->load->model('students_model','pilipinas');
	}
		public function index(){
			
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		require 'featured_destination.php';
		require 'top_destination.php';
		
		
		//Load the views
		$this->load->view('include/header', $data);
		$this->load->view('webview/homepage', $data);
	}	
		public function travel(){
		  
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/travel', $data);
		// $this->load->view('include/footer');
	}
		public function travelr1(){
		  
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/travelr1');
		// $this->load->view('include/footer');
	}
		public function search(){
		  
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/search');
		// $this->load->view('include/footer');
	}
		public function details(){
			$placeid = $_GET['place_id'];
		
		$data['title'] = "Pili-pinas";
		$details_page= $this->pilipinas->place_page($placeid);
		
		
		
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
				'thumbs' => $n['thumbs'],
				'rating' => $n['rating'],
				'vote' => $n['vote']
				
			);
			$details_complete[]=$id;
		
		}
		
		$data['details_page'] = $details_complete;
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/page', $data);
		// $this->load->view('include/footer');
		
		
	}	
		public function rating(){
				
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		$rate = $_GET['rating'];
		$placeid = $_GET['place_id'];
		
		$new_rating = $this->pilipinas->rating($rate, $placeid);
		
		
		$details_complete = null;
		
		
			$id = array(
				'place_id' => $new_rating['place_id'],
				'name' => $new_rating['name'],
				'description' => $new_rating['description'],
				'locality' => $new_rating['locality'],
				'province' => $new_rating['province'],
				'region' => $new_rating['region'],
				'rating' => $new_rating['rating'],
				'vote' =>  $new_rating['vote'],
				'image' => $new_rating['image']
				
			);
			$details_complete[]=$id;
		
		
		
		$data['details_page'] = $details_complete;
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/page', $data);
		}
		public function history(){
			
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/history', $data);
		// $this->load->view('include/footer');
	}
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
		public function home_admin(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_home', $data);
		}
	
		public function admin_login(){
			$data['title'] = "Pili-pinas";
			$data['contents'] = "Display bootstrap contents";
		
			$this->load->view('include/header', $data);
			$this->load->view('webview/admin_login', $data);
					
		}
		
		
}
