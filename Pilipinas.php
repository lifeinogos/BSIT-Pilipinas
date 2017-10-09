<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilipinas extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		$this->load->helper('url');
		//model name & nickname
		$this->load->model('students_model','Students');
	}
	public function index()
	{
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		$this->load->view('include/header', $data);
		// $this->load->view('students/list_students', $data);
		$this->load->view('students/homepage', $data);
		//$this->load->view('students/travel_pg1', $data);
		$this->load->view('include/footer', $data);
		// redirect(base_url('Pilipinas/travel/'))
	}
	
		public function home(){
			
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/homepage');
	}
	
	
		public function travelr1(){
		  
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/travelr1');
		// $this->load->view('include/footer');
	}
		
		public function travel(){
		  
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/travel');
		// $this->load->view('include/footer');
	}
		
		public function history(){
			
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/history');
		// $this->load->view('include/footer');
	}
	
		public function about(){
		
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/about');
		// $this->load->view('include/footer');
		}
}
