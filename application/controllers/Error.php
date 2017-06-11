<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller { 
	function __construct(){ 
		parent::__construct();
       		
	} 
		
	public function index(){
            $this->template_utama->display('404');
        
    }
} 
/* Location: ./application/controllers/Error.php */