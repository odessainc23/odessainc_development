<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Platform extends CI_Controller {
	public function index() {
		$data	= array();

		$data['meta_title']			= 'Odessa, a smarter way to do asset finance';
		$data['meta_description']	= 'Our customers use the Odessa Platform to facilitate processes from point of sale, through originations, to contract management and remarketing. Odessa manages both high-volume transactions and complex leases and loans, in any region and currency.';
		$data['meta_keyword']		= 'asset tracking software digital,asset management software,digital asset management solutions,asset finance software';
		$data['og_title']			= 'Odessa, a smarter way to do asset finance';
		$data['og_description']		= 'Our customers use the Odessa Platform to facilitate processes from point of sale, through originations, to contract management and remarketing. Odessa manages both high-volume transactions and complex leases and loans, in any region and currency.';
		$data['tc_title']			= 'Odessa, a smarter way to do asset finance';
		$data['tc_description']		= 'Our customers use the Odessa Platform to facilitate processes from point of sale, through originations, to contract management and remarketing. Odessa manages both high-volume transactions and complex leases and loans, in any region and currency.';

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/platform', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function core() {
		$data = array(
			'page_title' => 'Build on our flexible asset management platform',
			'description' => 'Odessa is an asset management system that unifies your origination and servicing, reporting and analytics on one robust platform',
			'keywords' => 'digital asset management system,asset management system,asset management tools ',
			'canonical_tag' => '',
			'og' => '<meta name="revisit-after" content="7 days" />	
	<meta name="allow-search" content="yes" />
<title>Build on our flexible asset management platform</title><meta name="description" content="Odessa is an asset management system that unifies your origination and servicing, reporting and analytics on one robust platform"/>
	<meta property="og:locale" content="en_US"/>'
		);
		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/core' );
		$this->load->view( 'templates/footer' );
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

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/build_page', $data);
		$this->load->view('layouts/footer', $data);
	}
}