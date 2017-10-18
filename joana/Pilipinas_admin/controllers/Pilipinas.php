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
	
		public function homepage(){
			
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/homepage');
	}
	
		public function places(){
		  
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/places');
		// $this->load->view('include/footer');
	}
		
		public function advertisement(){
			
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/advertisement');
		// $this->load->view('include/footer');
	}
	
		public function settings(){
		
		$data['title'] = "Bootstrap Intro";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('students/settings');
		// $this->load->view('include/footer');
		}
}
