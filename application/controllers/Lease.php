<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Lease extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'The Ultimate Year-End Lease Accounting Checklist | Ensure Accurate & Efficient Close';
		$data['meta_description']	= "Download our comprehensive year-end lease accounting checklist to streamline your close process. Learn how to spot discrepancies, improve financial accuracy, and reduce compliance risks. Expert guidance from Diane Parisi, with over 25 years of experience.";
		$data['meta_keyword']		= 'lease accounting, year-end close, financial accuracy, and compliance';
		$data['og_title']			= 'The Ultimate Year-End Lease Accounting Checklist | Ensure Accurate & Efficient Close';
		$data['og_description']		= "Download our comprehensive year-end lease accounting checklist to streamline your close process. Learn how to spot discrepancies, improve financial accuracy, and reduce compliance risks. Expert guidance from Diane Parisi, with over 25 years of experience.";
		$data['tc_title']			= 'The Ultimate Year-End Lease Accounting Checklist | Ensure Accurate & Efficient Close';
		$data['tc_description']		= "Download our comprehensive year-end lease accounting checklist to streamline your close process. Learn how to spot discrepancies, improve financial accuracy, and reduce compliance risks. Expert guidance from Diane Parisi, with over 25 years of experience.";

		$this->load->view('layouts/amp_pages/header-copy.amp.html', $data);
		$this->load->view('pages/amp_pages/year-end-lease-accounting-checklist.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}