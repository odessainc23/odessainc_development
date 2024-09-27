<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Annual_Elfa extends CI_Controller {
public function index(){
	$data['meta_title']			= 'Join Us at Odessa Cocktails - ELFA Annual 2024 | JW Marriott, Austin TX';
	$data['meta_description']	= 'Join us for the Odessa Cocktails at the ELFA Annual 2024 on October 27, 7:15 PM – 9:15 PM, at the JW Marriott in Austin, TX. Enjoy an evening at the Edge Rooftop with a stunning capital view.';
	$data['meta_keyword']		= 'Odessa Cocktails 2024, ELFA Annual 2024, JW Marriott Austin, Edge Rooftop Event, Odessa Inc Event, ELFA networking cocktails, Austin TX events October 2024';
	$data['og_title']			= 'Join Us at Odessa Cocktails - ELFA Annual 2024 | JW Marriott, Austin TX';
	$data['og_description']		= 'Join us for the Odessa Cocktails at the ELFA Annual 2024 on October 27, 7:15 PM – 9:15 PM, at the JW Marriott in Austin, TX. Enjoy an evening at the Edge Rooftop with a stunning capital view.';
	$data['tc_title']			= 'Join Us at Odessa Cocktails - ELFA Annual 2024 | JW Marriott, Austin TX';
	$data['tc_description']		= 'Join us for the Odessa Cocktails at the ELFA Annual 2024 on October 27, 7:15 PM – 9:15 PM, at the JW Marriott in Austin, TX. Enjoy an evening at the Edge Rooftop with a stunning capital view.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/odessa-cocktails-elfa-2024.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}