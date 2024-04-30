<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Ebook_thank extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Unlocking Asset Finance Futures: Mastering API Strategies for Success';
		$data['meta_description']	= "Dive into our comprehensive whitepaper, 'Banking on APIs: The Asset Finance Edition', and learn how to harness the power of APIs to build a future-ready asset finance system";
		$data['meta_keyword']		= 'asset finance software, asset leasing software, asset finance solution, asset finance management software, ai in asset finance, strategic ai adoption, maximizing business impact, challenges in ai implementation, asset finance industry insights';
		$data['og_title']			= 'Unlocking Asset Finance Futures: Mastering API Strategies for Success';
		$data['og_description']		= "Dive into our comprehensive whitepaper, 'Banking on APIs: The Asset Finance Edition', and learn how to harness the power of APIs to build a future-ready asset finance system";
		$data['tc_title']			= 'Unlocking Asset Finance Futures: Mastering API Strategies for Success';
		$data['tc_description']		= "Dive into our comprehensive whitepaper, 'Banking on APIs: The Asset Finance Edition', and learn how to harness the power of APIs to build a future-ready asset finance system";

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/customer-experience-asset-finance-thankyou.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}