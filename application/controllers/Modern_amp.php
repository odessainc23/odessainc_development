<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Modern_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Odessa Modern Slavery Act Statement';
		$data['meta_description']	= 'Odessa herein elucidates its initiatives to mitigate/eradicate modern slavery and human trafficking from its business and supply chain';
		$data['meta_keyword']		= 'Odessa Modern Slavery Act Statement';
		$data['og_title']			= 'Odessa Modern Slavery Act Statement';
		$data['og_description']		= 'Odessa herein elucidates its initiatives to mitigate/eradicate modern slavery and human trafficking from its business and supply chain';
		$data['tc_title']			= 'Odessa Modern Slavery Act Statement';
		$data['tc_description']		= 'Odessa herein elucidates its initiatives to mitigate/eradicate modern slavery and human trafficking from its business and supply chain';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/odessa-modern-slavery-act-statement.amp.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}