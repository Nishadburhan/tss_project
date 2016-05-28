<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories extends TSS_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->data['title']='Welcome';
		$this->data['description']='Welcome';
		$this->data['keywords']='Welcome';
		$this->data['copyright']='Welcome';
		$this->data['revisit-after']='7 days';
		$this->data['robots']='index, follow';
	
		//Bredcrum
		$this->data['breadcrumb']="";
		$this->data['header']=$this->load->view('templates/header','',TRUE);
		$this->data['footer']=$this->load->view('templates/footer','',TRUE);
		$this->template->view('list',$this->data);
	}

	public function create() {

	}

	public function lists() {

	}

	public function delete() {

	}

	public function create_code() {

	}
}