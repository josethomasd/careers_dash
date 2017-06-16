<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
	parent::__construct();
	$this->load->helper('form');
	$this->load->helper('url');
	}
	// Show form in view page i.e view_page.php

	public function index(){
		$this->load->database();
		$this->load->model('select');
		$data['count'] = $this->select->get_count();

		$this->load->view('index',$data);

	}
	
	public function form_show() {
		$this->load->view('insert_view');

	}
	public function jobs_admin(){

		$this->load->database();  
		//load the model  
		$this->load->model('select');  
		//load the method of model  
		$data['h']=$this->select->select();

		$data['title'] = "Careers";
		$this->load->view('jobs_view',$data);
	}

	// When user submit data on view page, Then this function store data in array.
	public function data_submitted() {

		$this->load->database();
		$this->load->model('insert');
		$data['title'] = "Career data";
		$this->load->view('insert_view');

		$data = array(
		'title' => $this->input->post('title'),
		'experience' => $this->input->post('experience'),
		'location' => $this->input->post('location'),
		'url' => $this->input->post('url')
		);
		//Transfering data to Model
		$this->insert->insert($data);
		$data['message'] = 'Data Inserted Successfully';
		//Loading View
		//$this->load->view('jobs_view');
		header("Location: form_show");
	
	}
	public function delete_job($user_id){
		$this->load->model("admin_delete");
		$this->admin_delete->delete_row($user_id);
		
		header("Location: ../jobs_admin");
	}		
}
?>
	