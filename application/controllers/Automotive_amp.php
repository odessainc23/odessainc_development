<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Automotive_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Automotive Finance Software | Odessa';
		$data['meta_description']	= 'Discover Odessa Cutting-Edge Auto Lending and Leasing Software. Elevate Your Vehicle Leasing Experience with Our Car Leasing Software and Automotive Finance Solutions.';
		$data['meta_keyword']		= 'auto finance solution, auto leasing software, vehicle leasing software, car leasing software, auto loan software, car loan software, auto finance software, automotive finance software, auto lending software, automated lending software, auto loan management software, auto loan origination software, vehicle lease management software, auto loan servicing software, vehicle finance software, car finance software, automotive leasing software, auto tracking system, fleet management software, vehicle fleet software, fleet tracking system, fleet management system, fleet maintenance software, fleet software';
		$data['og_title']			= 'Automotive Finance Software | Odessa';
		$data['og_description']		= 'Discover Odessa Cutting-Edge Auto Lending and Leasing Software. Elevate Your Vehicle Leasing Experience with Our Car Leasing Software and Automotive Finance Solutions.';
		$data['tc_title']			= 'Automotive Finance Software | Odessa';
		$data['tc_description']		= 'Discover Odessa Cutting-Edge Auto Lending and Leasing Software. Elevate Your Vehicle Leasing Experience with Our Car Leasing Software and Automotive Finance Solutions.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/automotive-finance-software.amp.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}