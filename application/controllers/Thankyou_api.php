<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Thankyou_api extends CI_Controller {
	public function index() {
		$data = array(
			'page_title' => 'Thank you for downloading the whitepaper!',
			'description' => 'Thank you for downloading the whitepaper!',
			'keywords' => '',
			'canonical_tag' => '',
			'og' => '<meta name="revisit-after" content="7 days" />	
					 <meta name="allow-search" content="yes" />
					 <title>Thank you for your interest in the white paper</title>
					 <meta name="description" content="Thank you for downloading the whitepaper!" />
					 <meta property="og:locale" content="en_US" />',
			'result' => json_decode( $response )
		);

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/future-ready-asset-finance-api-thankyou.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}

}