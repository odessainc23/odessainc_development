<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Enterprises extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'How Modern Software Saves Enterprises Money | By Eric Bernstein, CEO of Odessa';
		$data['meta_description']	= 'Modern software savings,Legacy software costs,Enterprise software modernization';
		$data['meta_keyword']		= 'asset finance experts, equipment leasing industry gurus, lease management specialists';
		$data['og_title']			= 'How Modern Software Saves Enterprises Money | By Eric Bernstein, CEO of Odessa';
		$data['og_description']		= 'Discover how modern, cloud-based software reduces costs, enhances efficiency, and future-proofs enterprises. Learn the hidden costs of legacy systems and the benefits of modernization.';
		$data['tc_title']			= 'How Modern Software Saves Enterprises Money | By Eric Bernstein, CEO of Odessa';
		$data['tc_description']		= 'Discover how modern, cloud-based software reduces costs, enhances efficiency, and future-proofs enterprises. Learn the hidden costs of legacy systems and the benefits of modernization.';

		$this->load->view('layouts/amp_pages/header-copy.amp.html', $data);
		$this->load->view('pages/amp_pages/how-modern-software-saves-enterprises-money.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}