<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Subscribe extends CI_Controller {
public function index(){
	$data['meta_title']			= 'Stay Updated with Fresh Perspectives | Subscribe for Insights';
	$data['meta_description']	= 'Subscribe to receive the latest insights, trends, and updates directly in your inbox. Stay ahead with fresh perspectives on [industry/topic]. Enter your first name, last name, business email, and company name to join our community.';
	$data['meta_keyword']		= 'subscribe for insights, fresh perspectives, industry updates, business email subscription, trends newsletter, company insights';
	$data['og_title']			= 'Stay Updated with Fresh Perspectives | Subscribe for Insights';
	$data['og_description']		= 'Subscribe to receive the latest insights, trends, and updates directly in your inbox. Stay ahead with fresh perspectives on [industry/topic]. Enter your first name, last name, business email, and company name to join our community.';
	$data['tc_title']			= 'Stay Updated with Fresh Perspectives | Subscribe for Insights';
	$data['tc_description']		= 'Subscribe to receive the latest insights, trends, and updates directly in your inbox. Stay ahead with fresh perspectives on [industry/topic]. Enter your first name, last name, business email, and company name to join our community.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/subscription.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}