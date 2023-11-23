<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Whitepaper extends CI_Controller {
public function index(){
		$data['meta_title']			= '';
		$data['meta_description']	= '';
		$data['meta_keyword']		= '';
		$data['og_title']			= '';
		$data['og_description']		= '';
		$data['tc_title']			= '';
		$data['tc_description']		= '';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/unlocking-xaas-transformative-insights-asset-finance.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}