<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Virtual extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Register for Virtual Wine Table | Odessa';
		$data['meta_description']	= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['meta_keyword']		= 'Odessa events, Asset finance and equipment leasing event';
		$data['og_title']			= 'Register for Virtual Wine Table | Odessa';
		$data['og_description']		= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['tc_title']			= 'Register for Virtual Wine Table | Odessa';
		$data['tc_description']		= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/virtual-wine-table-registration.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}