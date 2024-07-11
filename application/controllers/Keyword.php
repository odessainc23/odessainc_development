<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keyword extends CI_Controller {
	public function index() {
		$sql	= "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%company%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date ASC";
		$query	= $this->db->query($sql);
        $result	= $query->result_array();

		$data	= array();

		$data['meta_title']			= 'We provide software for asset finance companies.';
		$data['meta_description']	= 'Odessa\'s mission is to create and deliver transformative software solutions for equipment leasing companies.';
		$data['meta_keyword']		= 'about odessa, leasing software solutions, leasing platform';
		$data['og_title']			= 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.';
		$data['og_description']		= 'Odessa\'s mission is to create and deliver transformative software solutions for equipment leasing companies.';
		$data['tc_title']			= 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.';
		$data['tc_description']		= 'Odessa\'s mission is to create and deliver transformative software solutions for equipment leasing companies.';

		$data['result']				= $result;


		// $this->load->view('layouts/header',$data);
		// $this->load->view('pages/company', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'pages/amp_pages/keyword.html', $data );
	}
}