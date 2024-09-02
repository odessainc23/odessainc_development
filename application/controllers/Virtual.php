<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Virtual extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Virtual Wine Tasting Event Registration | Odessa';
		$data['meta_description']	= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['meta_keyword']		= 'Virtual wine tasting, wine event registration, asset finance networking, equipment leasing event, wine tasting with Haley Moore, Odessa events, executive wine tasting, wine tasting registration';
		$data['og_title']			= 'Virtual Wine Tasting Event Registration | Odessa';
		$data['og_description']		= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';
		$data['tc_title']			= 'Virtual Wine Tasting Event Registration | Odessa';
		$data['tc_description']		= 'Join Odessa for a virtual wine tasting event. An exclusive, limited invitation event for asset finance and equipment leasing executives on May 20, 2024.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/virtual-wine-table-registration.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}