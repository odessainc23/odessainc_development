<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Platform extends CI_Controller {
	public function index() {
		$data	= array();

		$data['meta_title']			= 'Lease and Loan Management Software from Odessa';
		$data['meta_description']	= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';
		$data['meta_keyword']		= 'loan management software,lease accounting software,lease management software,lease administration software,lease tracking software';
		$data['og_title']			= 'Lease and Loan Management Software from Odessa';
		$data['og_description']		= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';
		$data['tc_title']			= 'Lease and Loan Management Software from Odessa';
		$data['tc_description']		= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';

		// $this->load->view('layouts/header', $data);
		// $this->load->view('pages/platform', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view( 'pages/amp_pages/platform.amp.html', $data );
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function core() {
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




	public function build() {
		$data	= array();

		$data['meta_title']			= 'Odessa\'s developer tools unify business and IT, delivering equipment finance solutions faster';
		$data['meta_description']	= 'Leverage development tools to extend, build, test, and ship features. Automate your equipment leasing business processes with the Odessa Platform.';
		$data['meta_keyword']		= 'equipment lease accounting, equipment leasing software,equipment finance software';
		$data['og_title']			= 'Odessa\'s developer tools unify business and IT, delivering equipment finance solutions faster';
		$data['og_description']		= 'Leverage development tools to extend, build, test, and ship features. Automate your equipment leasing business processes with the Odessa Platform.';
		$data['tc_title']			= 'Odessa\'s developer tools unify business and IT, delivering equipment finance solutions faster';
		$data['tc_description']		= 'Leverage development tools to extend, build, test, and ship features. Automate your equipment leasing business processes with the Odessa Platform.';

		// $this->load->view('layouts/header', $data);
		// $this->load->view('pages/build_page', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view( 'pages/amp_pages/dev.amp.html', $data );
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function xaas(){
		$data['meta_title']			= 'Transform your business with XaaS solutions from Odessa';
		$data['meta_description']	= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';
		$data['meta_keyword']		= 'XaaS, Billing Software, as-a-service, Subscription Management Software, Pay per use, Usage based billing, Everything as a service, Subscription management platform';
		$data['og_title']			= 'Transform your business with XaaS solutions from Odessa';
		$data['og_description']		= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';
		$data['tc_title']			= 'Transform your business with XaaS solutions from Odessa';
		$data['tc_description']		= 'Discover Odessa comprehensive XaaS solutions for financial services, offering flexibility and growth through as-a-service, pay-per-use, and subscription management models. Transform your go-to-market strategy and unlock the potential of the sharing economy with Odessa.';

		// $this->load->view('layouts/header', $data);
		// $this->load->view('pages/xaas', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/xaas.amp.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}