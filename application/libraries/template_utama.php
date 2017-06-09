<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Template_utama{
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}

	function display($template, $data = null){
		$data['content']		= $this->_ci->load->view($template, $data, true);
		$data['header']			= $this->_ci->load->view('template/header_utama', $data, true);
		$data['side_menu']		= $this->_ci->load->view('template/menu_utama', $data, true);
		$data['footer']			= $this->_ci->load->view('template/footer_utama', $data, true);

		$this->_ci->load->view('/template_utama', $data);
	}
}
