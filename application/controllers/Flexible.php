<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Flexible extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Flexible Asset Finance Platform | Drive Business Growth with Agility';
		$data['meta_description']	= 'Empower your business with a flexible asset finance platform that adapts to your customers evolving needs. Drive growth and stay competitive with a solution designed for agility.';
		$data['meta_keyword']		= 'Flexible asset finance platform,Asset finance technology,Innovative finance technology
Adaptive finance solution';
		$data['og_title']			= 'Thank you for Registering for the Virtual Wine Table | Odessa';
		$data['og_description']		= 'Empower your business with a flexible asset finance platform that adapts to your customers evolving needs. Drive growth and stay competitive with a solution designed for agility.';
		$data['tc_title']			= 'Flexible Asset Finance Platform | Drive Business Growth with Agility';
		$data['tc_description']		= 'Empower your business with a flexible asset finance platform that adapts to your customers evolving needs. Drive growth and stay competitive with a solution designed for agility.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/flexible-asset-finance-platform.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}