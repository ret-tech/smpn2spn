<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
	public function index()
	{
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-2.065666, 101.3926979';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->template_utama->display('utama/home', $data);
	}

	public function sambutan(){
		$this->template_utama->display('utama/sambutan');
	}

	public function visimisi(){
		$this->template_utama->display('utama/visimisi');
	}

	public function berita(){
		$this->template_utama->display('utama/berita');
	}

	public function guru(){
		$this->template_utama->display('utama/guru');
	}

	public function galeri(){
		$this->template_utama->display('utama/galeri');
	}
}
