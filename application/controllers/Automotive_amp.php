<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Automotive_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Auto Finance Software | Odessa';
		$data['meta_description']	= 'Explore Odessa\'s State-of-the-Art Auto Finance Solution and Enhance Your Auto Leasing Experience with Our Innovative Auto Finance Software.';
		$data['meta_keyword']		= 'auto finance solution, auto leasing software, vehicle leasing software, car leasing software, auto loan software, auto finance software, automotive finance software, auto lending software, auto loan management software, auto loan origination software, auto loan servicing software, automotive leasing software, automotive leasing software';
		$data['og_title']			= 'Auto Finance Software | Odessa';
		$data['og_description']		= 'Explore Odessa\'s State-of-the-Art Auto Finance Solution and Enhance Your Auto Leasing Experience with Our Innovative Auto Finance Software.';
		$data['tc_title']			= 'Auto Finance Software | Odessa';
		$data['tc_description']		= 'Explore Odessa\'s State-of-the-Art Auto Finance Solution and Enhance Your Auto Leasing Experience with Our Innovative Auto Finance Software.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/auto-finance-software.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}