<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Ready_amp extends CI_Controller {
public function index(){
	$data['meta_title']			= 'Rethink Asset Finance: Master Pay-Per-Use Models | Download the Whitepaper';
	$data['meta_description']	= 'Transform your asset finance strategy with our expert whitepaper on pay-per-use models. Learn how to stay competitive with customer-centric and subscription-based approaches in the XaaS revolution. Get insights from industry expert Yann Toutant.';
	$data['meta_keyword']		= 'asset finance, pay-per-use, XaaS, subscription-based models, customer-centric approach, operational excellence, whitepaper, Yann Toutant, Everything-as-a-Service';
	$data['og_title']			= 'Rethink Asset Finance: Master Pay-Per-Use Models | Download the Whitepaper';
	$data['og_description']		= 'Transform your asset finance strategy with our expert whitepaper on pay-per-use models. Learn how to stay competitive with customer-centric and subscription-based approaches in the XaaS revolution. Get insights from industry expert Yann Toutant.';
	$data['tc_title']			= 'Rethink Asset Finance: Master Pay-Per-Use Models | Download the Whitepaper';
	$data['tc_description']		= 'Transform your asset finance strategy with our expert whitepaper on pay-per-use models. Learn how to stay competitive with customer-centric and subscription-based approaches in the XaaS revolution. Get insights from industry expert Yann Toutant.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/ready-to-rethink.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}