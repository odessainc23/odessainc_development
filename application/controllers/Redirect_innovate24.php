<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Redirect_innovate24 extends CI_Controller {

	public function index(){
		$data['meta_title']			= 'Summary - Odessa Client Conference';
		$data['meta_description']	= 'Summary - Odessa Client Conference';
		$data['meta_keyword']		= 'Summary - Odessa Client Conference';
		$data['og_title']			= 'Summary - Odessa Client Conference';
		$data['og_description']		= 'Summary - Odessa Client Conference';
		$data['tc_title']			= 'Summary - Odessa Client Conference';
		$data['tc_description']		= 'Summary - Odessa Client Conference';

		// $this->load->view('layouts/amp_pages/header.amp.html', $data);
		// $this->load->view('pages/amp_pages/redirection.html', $data);
		$this->load->view('pages/amp_pages/innovate24.html', $data);
		// $this->load->view('layouts/amp_pages/footer.amp.html', $data);
	}
}