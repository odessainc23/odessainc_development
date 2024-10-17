<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Outdated extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'The Real Cost of Maintaining Outdated Technology | Reduce IT Costs with Odessa';
		$data['meta_description']	= 'Discover the hidden costs of maintaining legacy technology, including technical debt, security risks, and high maintenance expenses. Learn how Odessa’s platform can lower your IT costs and drive growth.';
		$data['meta_keyword']		= 'Cost of maintaining outdated technology,Technical debt in IT, Legacy software maintenance costs, Security risks in legacy systems, IT budget optimization, Modernizing IT infrastructure, Odessa asset finance platform, API-first architecture for IT, Flexible software solutions, Reduce IT maintenance costs, Adaptive finance solution';
		$data['og_title']			= 'The Real Cost of Maintaining Outdated Technology | Reduce IT Costs with Odessa';
		$data['og_description']		= 'Discover the hidden costs of maintaining legacy technology, including technical debt, security risks, and high maintenance expenses. Learn how Odessa’s platform can lower your IT costs and drive growth.';
		$data['tc_title']			= 'The Real Cost of Maintaining Outdated Technology | Reduce IT Costs with Odessa';
		$data['tc_description']		= 'Discover the hidden costs of maintaining legacy technology, including technical debt, security risks, and high maintenance expenses. Learn how Odessa’s platform can lower your IT costs and drive growth.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/real-cost-of-maintaining-outdated-technology.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}