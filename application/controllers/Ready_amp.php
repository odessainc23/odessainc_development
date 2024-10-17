<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Ready_amp extends CI_Controller {
public function index(){
	$data['meta_title']			= 'Master as-a-Service Offerings in Asset Finance | Transform Your Business with Subscription-Based Models';
	$data['meta_description']	= 'Download our whitepaper to master as-a-service models in asset finance. Gain insights on customer-centric strategies, operational excellence, and expert guidance from Yann Toutant, CEO of Black Winch.';
	$data['meta_keyword']		= 'asset finance, pay-per-use, XaaS, subscription-based models, customer-centric approach, operational excellence, whitepaper, Yann Toutant, Everything-as-a-Service';
	$data['og_title']			= 'Master as-a-Service Offerings in Asset Finance | Transform Your Business with Subscription-Based Models';
	$data['og_description']		= 'Download our whitepaper to master as-a-service models in asset finance. Gain insights on customer-centric strategies, operational excellence, and expert guidance from Yann Toutant, CEO of Black Winch.';
	$data['tc_title']			= 'Master as-a-Service Offerings in Asset Finance | Transform Your Business with Subscription-Based Models';
	$data['tc_description']		= 'Download our whitepaper to master as-a-service models in asset finance. Gain insights on customer-centric strategies, operational excellence, and expert guidance from Yann Toutant, CEO of Black Winch.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/ready-to-rethink.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}