<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TSS_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('template');
	}

	public function _remap($method,$args){
		if (method_exists($this, $method)){
			$this->$method($args);
		}
		else{
			$this->index($method,$args);
		}
	}
}
// 17778350609