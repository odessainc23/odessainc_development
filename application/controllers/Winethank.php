<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Winethank extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Thank you for Registering for the Virtual Wine Table | Odessa';
		$data['meta_description']	= 'See you at the virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['meta_keyword']		= 'Odessa events, Asset finance and equipment leasing event';
		$data['og_title']			= 'Thank you for Registering for the Virtual Wine Table | Odessa';
		$data['og_description']		= 'See you at the virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['tc_title']			= 'Thank you for Registering for the Virtual Wine Table | Odessa';
		$data['tc_description']		= 'See you at the virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/wine-thank.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}