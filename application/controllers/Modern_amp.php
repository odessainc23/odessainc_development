<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Modern_amp extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Odessa Modern Slavery Act Statement: Commitment to Eradicate Human Trafficking';
		$data['meta_description']	= 'Learn how Odessa Technologies is committed to eradicating modern slavery and human trafficking from its business and supply chain.';
		$data['meta_keyword']		= 'Modern Slavery Statement,Human Trafficking Prevention,Ethical Business Practices,Odessa Technologies Inc,Supply Chain Responsibility,Anti-Slavery Initiatives,Supplier Code of Conduct,Human Rights Protection,Corporate Social Responsibility,Transparency in Business';
		$data['og_title']			= 'Odessa Modern Slavery Act Statement: Commitment to Eradicate Human Trafficking';
		$data['og_description']		= 'Learn how Odessa Technologies is committed to eradicating modern slavery and human trafficking from its business and supply chain.';
		$data['tc_title']			= 'Odessa Modern Slavery Act Statement: Commitment to Eradicate Human Trafficking';
		$data['tc_description']		= 'Learn how Odessa Technologies is committed to eradicating modern slavery and human trafficking from its business and supply chain.';

		$this->load->view('layouts/amp_pages/header.amp.html', $data);
		$this->load->view('pages/amp_pages/odessa-modern-slavery-act-statement.amp.html', $data);
		$this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}