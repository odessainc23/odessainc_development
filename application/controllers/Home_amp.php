<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_amp extends CI_Controller {
	public function index() {
		$data	= array();

		$data['meta_title']			= 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.';
		$data['meta_description']	= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.';
		$data['og_description']		= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';
		$data['tc_title']			= 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.';
		$data['tc_description']		= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';

		// $this->load->view('layouts/header',$data);
		// $this->load->view('pages/home');
		// $this->load->view('layouts/footer');
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
			$this->load->view( 'pages/amp_pages/home.amp.html', $data );
			$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function turns22() {
		$data	= array();

		$data['meta_title']			= 'Odessa Celebrates the 22nd Anniversary';
		$data['meta_description']	= 'Odessa has been building technology for the leasing industry since 1998 with its lease administration software. We hope you’ll join us.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Odessa Celebrates the 22nd Anniversary';
		$data['og_description']		= 'Odessa has been building technology for the leasing industry since 1998 with its lease administration software. We hope you’ll join us.';
		$data['tc_title']			= 'Odessa Celebrates the 22nd Anniversary';
		$data['tc_description']		= 'Odessa has been building technology for the leasing industry since 1998 with its lease administration software. We hope you’ll join us.';

		$this->load->view('layouts/turns22_header', $data);
		$this->load->view('pages/amp_pages/turns22.amp.html', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function confidential_terms() {
		$data	= array();

		$data['meta_title']			= 'Confidential terms | Odessa';
		$data['meta_description']	= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Confidential terms | Odessa';
		$data['og_description']		= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';
		$data['tc_title']			= 'Confidential terms | Odessa';
		$data['tc_description']		= 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.';
		$data['nofollow']			= true;

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/confidential-terms', $data);
		$this->load->view('layouts/footer', $data);
	}
}