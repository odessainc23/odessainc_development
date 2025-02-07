<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Auto_thank extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'The Business Case for a Next-Gen Auto Finance Platform';
		$data['meta_description']	= 'Unlock the potential of Odessa\'s auto finance software with our latest handbook. Streamline operations, boost efficiency & drive growth. Download now.';
		$data['meta_keyword']		= 'auto finance software, auto leasing software, XaaS';
		$data['og_title']			= 'The Business Case for a Next-Gen Auto Finance Platform';
		$data['og_description']		= 'Unlock the potential of Odessa\'s auto finance software with our latest handbook. Streamline operations, boost efficiency & drive growth. Download now.';
		$data['tc_title']			= 'The Business Case for a Next-Gen Auto Finance Platform';
		$data['tc_description']		= 'Unlock the potential of Odessa\'s auto finance software with our latest handbook. Streamline operations, boost efficiency & drive growth. Download now.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/next-gen-auto-finance-platform-thankyou.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}