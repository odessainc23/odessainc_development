<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Equipment extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Making a Strong Business Case for Next-Gen Equipment Finance Tech | Download Guide';
		$data['meta_description']	= 'Learn how to build a strong business case for next-gen equipment finance technology. Download our guide to gain executive buy-in, calculate ROI, and address stakeholder objections.';
		$data['meta_keyword']		= 'Equipment finance tech, Finance platform, Modern finance solutions,Business case';
		$data['og_title']			= 'Making a Strong Business Case for Next-Gen Equipment Finance Tech | Download Guide';
		$data['og_description']		= 'Learn how to build a strong business case for next-gen equipment finance technology. Download our guide to gain executive buy-in, calculate ROI, and address stakeholder objections.';
		$data['tc_title']			= 'Making a Strong Business Case for Next-Gen Equipment Finance Tech | Download Guide';
		$data['tc_description']		= 'Learn how to build a strong business case for next-gen equipment finance technology. Download our guide to gain executive buy-in, calculate ROI, and address stakeholder objections.';

		$this->load->view('layouts/amp_pages/header1.amp.html', $data);
		$this->load->view('pages/amp_pages/next-gen-equipment-finance-tech-business-case.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}