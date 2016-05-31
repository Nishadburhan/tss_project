<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends TSS_Controller {

	// public function

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
	
	public function save_customer()	 {
		$i=json_decode(file_get_contents("php://input"));
		if($i->id=='-1') {
			$data=array(
				'customer_type'=>$i->type,
				'customer_code'=>$i->code,
				'customer_full_name'=>$i->fname,
				'customer_phone'=>$i->phone,
				'customer_mobile'=>$i->mobile,
				'customer_fax'=>$i->fax,
				'customer_primary_mail'=>$i->pmail,
				'customer_secondary_mail'=>$i->smail,
				'customer_person'=>$i->cperson,
				'customer_website'=>$i->website,
				'customer_country'=>$i->country,
				'customer_province'=>$i->province,
				'customer_city'=>$i->city,
				'customer_location'=>$i->location,
				'customer_address'=>$i->address
			);
			$this->base_model->add('customers',$data);

		}else {
			$data=array(
			'customer_id'=>$i->id,
			'customer_type'=>$i->type,
			'customer_code'=>$i->code,
			'customer_full_name'=>$i->fname,
			'customer_phone'=>$i->phone,
			'customer_mobile'=>$i->mobile,
			'customer_fax'=>$i->fax,
			'customer_primary_mail'=>$i->pmail,
			'customer_secondary_mail'=>$i->smail,
			'customer_person'=>$i->cperson,
			'customer_website'=>$i->website,
			'customer_country'=>$i->country,
			'customer_province'=>$i->province,
			'customer_city'=>$i->city,
			'customer_location'=>$i->location,
			'customer_address'=>$i->address
			);
			$this->base_model->update('customers','customer_id',$i->id,$data);
		}
		
	}

	public function get_all() {
		$data=array();
		foreach ($this->base_model->get_all('customers')->result() as $row) {
			$data[]=array(
				'id'=>$row->customer_id,
				'fname'=>$row->customer_full_name,
				'code'=>$row->customer_code,
				'mobile'=>$row->customer_mobile,
				'pmail'=>$row->customer_primary_mail
				);
		}
		echo json_encode($data);
	}
	
	public function edit_row() {
		$i=json_decode(file_get_contents("php://input"));
		$data=array();
		foreach ($this->base_model->edit('customers','customer_id',$i->id)->result() as $row) {
			$data['id']=$row->customer_id;
			$data['code']=$row->customer_code;
			$data['type']=$row->customer_type;
			$data['fname']=$row->customer_full_name;
			$data['phone']=$row->customer_phone;
			$data['mobile']=$row->customer_mobile;
			$data['fax']=$row->customer_fax;
			$data['pmail']=$row->customer_primary_mail;
			$data['smail']=$row->customer_secondary_mail;
			$data['cperson']=$row->customer_person;
			$data['website']=$row->customer_website;
			$data['country']=$row->customer_country;
			$data['province']=$row->customer_province;
			$data['city']=$row->customer_city;
			$data['location']=$row->customer_location;
			$data['address']=$row->customer_address;

		}
		echo json_encode($data);
	}

	public function delete() {
		$i=json_decode(file_get_contents("php://input"));
		$this->base_model->delete('customers','customer_id',$i->id);
	}
	public function manipulate_code() {
		$data=array();
		foreach ($this->base_model->select_max('max(customer_code) as new_code','customers')->result() as $row) {
			$data['code']=$row->new_code;
		}
		echo json_encode($data);
	}
}