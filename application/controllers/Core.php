<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Core extends CI_Controller {
	
	public function index() {
		$data	= array();
		$data['meta_title']			= 'Equipment Leasing Software from Odessa';
		$data['meta_description']	= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';
		$data['meta_keyword']		= 'equipment lease accounting,equipment leasing software,equipment finance solution,equipment finance software,equipment finance Platform,equipment leasing Platform';
		$data['og_title']			= 'Equipment Leasing Software from Odessa';
		$data['og_description']		= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';
		$data['tc_title']			= 'Equipment Leasing Software from Odessa';
		$data['tc_description']		= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';

		$this->load->view( 'templates/amp_pages/header.amp.html', $data );
		$this->load->view('pages/amp_pages/core.amp.html');
		$this->load->view( 'templates/amp_pages/footer.amp.html' );
	}

}