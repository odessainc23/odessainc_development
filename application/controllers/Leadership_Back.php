<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leadership extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	// $this->load->helper('url');

	public function index()
	{
		$data = array(
		'page_title'=> 'Leadership at Odessa',
		'description'=>'Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers.',
		'keywords'=>'Odessa leadership team,asset finance industry,leasing industry,',
		'canonical_tag' => '',
		'og'=>'<meta name="revisit-after" content="7 days" />	
	<meta name="allow-search" content="yes" />
<title>Leadership at Odessa</title><meta name="description" content="Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers."/>
	<meta property="og:locale" content="en_US"/>' 
		);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/leadership');
		$this->load->view('templates/footer');
	}
}
