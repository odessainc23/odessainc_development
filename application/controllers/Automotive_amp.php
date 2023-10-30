<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Automotive_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Automotive Finance Software | Odessa';
		$data['meta_description']	= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';
		$data['meta_keyword']		= 'XaaS, Billing Software, as-a-service, Subscription Management Software, Pay per use, Usage based billing, Everything as a service, Subscription management platform';
		$data['og_title']			= 'Automotive Finance Software | Odessa';
		$data['og_description']		= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';
		$data['tc_title']			= 'Automotive Finance Software | Odessa';
		$data['tc_description']		= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/automotive-finance-software.amp.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}