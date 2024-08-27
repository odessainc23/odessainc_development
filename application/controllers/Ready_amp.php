<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Ready_amp extends CI_Controller {
public function index(){
	$data['meta_title']			= 'White paper - 10 Technology Requirements for Empowering XaaS in Asset Finance | Odessa';
	$data['meta_description']	= 'This white paper is a practical guide to your XaaS (everything-as-a-service) journey, drawing on insights from industry practitioners and early adopters.';
	$data['meta_keyword']		= '';
	$data['og_title']			= 'White paper - 10 Technology Requirements for Empowering XaaS in Asset Finance | Odessa';
	$data['og_description']		= 'This white paper is a practical guide to your XaaS (everything-as-a-service) journey, drawing on insights from industry practitioners and early adopters.';
	$data['tc_title']			= 'White paper - 10 Technology Requirements for Empowering XaaS in Asset Finance | Odessa';
	$data['tc_description']		= 'This white paper is a practical guide to your XaaS (everything-as-a-service) journey, drawing on insights from industry practitioners and early adopters.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/ready-to-rethink.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}