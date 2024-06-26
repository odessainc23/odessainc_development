<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Thankyou_whitepaper extends CI_Controller {
	public function index() {
		$data = array(
			'page_title' => 'Thank you for your interest in the white paper',
			'description' => 'Thank you for your interest. The white paper has been sent to your email.',
			'keywords' => 'xaas, as a service, everything as a service, subscription platform, equipment as a service, as-a-service solutions,  whitepaper signup',
			'canonical_tag' => '',
			'og' => '<meta name="revisit-after" content="7 days" />	
					 <meta name="allow-search" content="yes" />
					 <title>Thank you</title>
					 <meta name="description" content="" />
					 <meta property="og:locale" content="en_US" />',
			'result' => json_decode( $response )
		);

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/unlocking-xaas-thankyou',$data );
		$this->load->view( 'templates/footer' );
	}

}