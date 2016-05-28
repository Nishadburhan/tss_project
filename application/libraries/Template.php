<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template {
	private $data;
	private $css;
	private $js;
	private $CI;

	public function __construct() {
		$this->CI =& get_instance();
		$this->CI->load->helper('url');
	}

	public function view($page, $theme=NULL, $data=NULL) {
		$this->load_js_and_css();
		$theme['js']=$this->data['js'];
		$theme['css']=$this->data['css'];
		$theme['content'] = $this->CI->load->view($page,array('data'=>$data), true);
		$this->CI->load->view('templates/template', array('theme'=>$theme));
	}

	public function add_css($name){
        $css = new stdClass();
        $css->file = $name;
        $this->css[] = $css;
    }
	public function add_js($name){
        $js = new stdClass();
        $js->file = $name;
        $this->js[] = $js;
    }
	private function load_js_and_css(){
		$this->data['css'] = '';
        if ( $this->css){
            foreach($this->css as $css ){
                $this->data['css'].= "<link href=".$css->file." rel='stylesheet' type='text/css'>\n";
            }
        }
		$this->data['js'] = '';
        if ($this->js){
            foreach( $this->js as $js ){
                $this->data['js'].= "<script type='text/javascript' src=".$js->file."></script>\n";
            }
        }
	}
}