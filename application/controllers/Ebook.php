<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Ebook extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Get the latest handbook Customer Experiences in Asset Finance | Odessa';
		$data['meta_description']	= "Delve into our latest e-book to uncover how you can WOW your customers  and create standout experiences that build lifelong customer relationships at AFSA";
		$data['meta_keyword']		= 'asset finance industry, as-a-service, asset finance software, customer experiences in asset finance';
		$data['og_title']			= 'Unlocking Asset Finance Futures: Mastering API Strategies for Success';
		$data['og_description']		= "Delve into our latest e-book to uncover how you can WOW your customers  and create standout experiences that build lifelong customer relationships at AFSA";
		$data['tc_title']			= 'Get the latest handbook Customer Experiences in Asset Finance | Odessa';
		$data['tc_description']		= "Delve into our latest e-book to uncover how you can WOW your customers  and create standout experiences that build lifelong customer relationships at AFSA";

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/cx-asset-finance.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}