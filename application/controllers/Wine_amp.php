<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Wine_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Meet Our Experts | Odessa';
		$data['meta_description']	= 'Our knowledge of asset finance is unmatched. We embrace and adapt to the evolving equipment leasing market and help you do the same. We are committed to helping you achieve your business goals.';
		$data['meta_keyword']		= 'asset finance experts, equipment leasing industry gurus, lease management specialists';
		$data['og_title']			= 'Meet Our Experts | Odessa';
		$data['og_description']		= 'Our knowledge of asset finance is unmatched. We embrace and adapt to the evolving equipment leasing market and help you do the same. We are committed to helping you achieve your business goals.';
		$data['tc_title']			= 'Meet Our Experts | Odessa';
		$data['tc_description']		= 'Our knowledge of asset finance is unmatched. We embrace and adapt to the evolving equipment leasing market and help you do the same. We are committed to helping you achieve your business goals.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/wine-taste.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}