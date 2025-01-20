<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Afsa extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Authentic Gumbo Recipe for AFSA Vehicle Finance Conference Attendees';
		$data['meta_description']	= 'Take a taste of New Orleans home with you! Enjoy this authentic seafood gumbo recipe, shared by a Louisiana native and brought to you by Odessa for AFSA Vehicle Finance Conference attendees.';
		$data['meta_keyword']		= 'Gumbo recipe, Authentic seafood gumbo, New Orleans gumbo, AFSA conference recipe, Louisiana seafood gumbo, Shrimp and sausage gumbo, Creole gumbo recipe, Gumbo for AFSA attendees';
		$data['og_title']			= 'Authentic Gumbo Recipe for AFSA Vehicle Finance Conference Attendees';
		$data['og_description']		= 'Take a taste of New Orleans home with you! Enjoy this authentic seafood gumbo recipe, shared by a Louisiana native and brought to you by Odessa for AFSA Vehicle Finance Conference attendees.';
		$data['tc_title']			= 'Authentic Gumbo Recipe for AFSA Vehicle Finance Conference Attendees';
		$data['tc_description']		= 'Take a taste of New Orleans home with you! Enjoy this authentic seafood gumbo recipe, shared by a Louisiana native and brought to you by Odessa for AFSA Vehicle Finance Conference attendees.';

		$this->load->view('layouts/amp_pages/header-copy.amp.html', $data);
		$this->load->view('pages/amp_pages/afsa-gumbo.html', $data);
		// $this->load->view('pages/amp_pages/automotive-finance-software.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}