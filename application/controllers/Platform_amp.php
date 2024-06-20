<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Platform_amp extends CI_Controller {
	public function index() {
		$sql = "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%cloud%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date ASC";
		$query = $this->db->query( $sql );
		$res = $query->result_array();

		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Cloud-CLFP-resource.svg';
		$res[ '1' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Reimagined-Technology-resource-01.svg';

		$data	= array();
		$data['meta_title']			= 'Lease and Loan Management Software from Odessa';
		$data['meta_description']	= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';
		$data['meta_keyword']		= 'loan management software,lease accounting software,lease management software,lease administration software,lease tracking software';
		$data['og_title']			= 'Lease and Loan Management Software from Odessa';
		$data['og_description']		= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';
		$data['tc_title']			= 'Lease and Loan Management Software from Odessa';
		$data['tc_description']		= 'Easily manage high-volume transactions in any region and currency with lease accounting software that powers you from point of sale to remarketing.';
		$data['result']				= $res;

			// $this->load->view( 'layouts/amp_pages/header_amp.php', $data );
			// $this->load->view( 'pages/amp_pages/cloud_amp.php', $data );
			// $this->load->view( 'layouts/amp_pages/footer_amp.php', $data );
			$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
			$this->load->view( 'pages/amp_pages/platform.amp.html', $data );
			$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
		
	}

	public function core() {
		$data	= array();
		$data['meta_title']			= 'Equipment Leasing Software from Odessa';
		$data['meta_description']	= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';
		$data['meta_keyword']		= 'equipment lease accounting,equipment leasing software,equipment finance solution,equipment finance software,equipment finance Platform,equipment leasing Platform';
		$data['og_title']			= 'Equipment Leasing Software from Odessa';
		$data['og_description']		= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';
		$data['tc_title']			= 'Equipment Leasing Software from Odessa';
		$data['tc_description']		= 'Odessa\'s provides equipment leasing software to unify your origination and servicing, reporting and analytics - all on one robust platform.';

		$this->load->view( 'templates/amp_pages/header.amp.html', $data );
		$this->load->view('pages/amp_pages/core.amp.html');
		$this->load->view( 'templates/amp_pages/footer.amp.html' );
	}

}