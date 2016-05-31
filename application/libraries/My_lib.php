<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_lib {

        public function welcome($data)
        {
        	$encrypted_string = $this->encrypt->encode('Nishad', '#gsbh');
        	echo $encrypted_string;
        }	
}