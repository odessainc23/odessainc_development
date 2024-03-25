<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Autothankyou_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Latest Auto Finance News and Updates | Odessa';
		$data['meta_description']	= 'Discover the Latest Auto Finance News at Odessa. Explore breaking news, expert insights, and industry updates to stay ahead in the Auto Lending Industry.';
		$data['meta_keyword']		= 'auto finance software, auto lending solution, auto leasing, automotive leasing software';
		$data['og_title']			= 'Latest Auto Finance News and Updates | Odessa';
		$data['og_description']		= 'Discover the Latest Auto Finance News at Odessa. Explore breaking news, expert insights, and industry updates to stay ahead in the Auto Lending Industry.';
		$data['tc_title']			= 'Latest Auto Finance News and Updates | Odessa';
		$data['tc_description']		= 'Discover the Latest Auto Finance News at Odessa. Explore breaking news, expert insights, and industry updates to stay ahead in the Auto Lending Industry.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/auto-finance-news-thankyou.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}