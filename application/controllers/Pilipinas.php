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
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		$this->load->view('include/header', $data);
		// $this->load->view('students/list_students', $data);
		$this->load->view('webview/homepage', $data);
		//$this->load->view('students/travel_pg1', $data);
		$this->load->view('include/footer', $data);
		// redirect(base_url('Pilipinas/travel/'))
	}
	
		public function home(){
			
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/homepage');
	}
	
		public function travel(){
		  
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/travel');
		// $this->load->view('include/footer');
	}
		
		public function history(){
			
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/history');
		// $this->load->view('include/footer');
	}
	
		public function about(){
		
		$data['title'] = "Pili-pinas";
		$data['contents'] = "Display bootstrap contents";
		
		$this->load->view('include/header', $data);
		$this->load->view('webview/about');
		// $this->load->view('include/footer');
		}
}
