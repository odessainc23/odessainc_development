<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Cocktail extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Register for Conversation & Cocktails at AFSA, hosted by Odessa and TruDecision';
		$data['meta_description']	= 'Register now and reserve your spot for Cocktails at AFSA 2024. We look forward to an evening of building connections, sharing insights, and having a good time.';
		$data['meta_keyword']		= 'Asset finance events, equipment finance industry events, American Financial Services Association events';
		$data['og_title']			= 'Register for Conversation & Cocktails at AFSA, hosted by Odessa and TruDecision';
		$data['og_description']		= 'Register now and reserve your spot for Cocktails at AFSA 2024. We look forward to an evening of building connections, sharing insights, and having a good time.';
		$data['tc_title']			= 'Register for Conversation & Cocktails at AFSA, hosted by Odessa and TruDecision';
		$data['tc_description']		= 'Register now and reserve your spot for Cocktails at AFSA 2024. We look forward to an evening of building connections, sharing insights, and having a good time.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/cocktail-registration.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}