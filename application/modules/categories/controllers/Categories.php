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

	public function add() {
		$i=json_decode(file_get_contents("php://input"));
		if($i->id=='-1') {
			$data=array(
				'category_name'=>$i->name,
				'category_status'=>$i->status
				);
			$this->base_model->add('categories',$data);
		}else {
			$data=array(
				'category_name'=>$i->name,
				'category_status'=>$i->status
				);
			$this->base_model->update('categories','category_id',$i->id,$data);
		}
	}

	public function lists() {
		$data=array();
		foreach ($this->base_model->get_all('categories')->result() as $row) {
			$data[]=array('id'=>$row->category_id,'name'=>$row->category_name, 'status'=>$row->category_status);
		}

		echo json_encode($data);
	}

	public function edit() {
		$i=json_decode(file_get_contents("php://input"));
		// echo $i->name;
		$data=array();
		foreach ($this->base_model->edit('categories','category_id',$i->id)->result() as $row) {
			$data['id']=$row->category_id;
			$data['name']=$row->category_name;
			$data['status']=$row->category_status;
		}
		echo json_encode($data);
	}

	public function delete() {
		$i=json_decode(file_get_contents("php://input"));
		if($this->base_model->delete('categories','category_id',$i->id))
		{
			echo json_encode(array('suc'=>'Successfully Deleted!'));
		}
	}

	public function create_code() {

	}
}