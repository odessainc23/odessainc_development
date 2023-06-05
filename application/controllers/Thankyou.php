<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Thankyou extends CI_Controller {
	public function index() {
		$data = array(
			'page_title' => 'Thank you',
			'description' => '',
			'keywords' => '',
			'canonical_tag' => '',
			'og' => '<meta name="revisit-after" content="7 days" />	
					 <meta name="allow-search" content="yes" />
					 <title>Thank you</title>
					 <meta name="description" content="" />
					 <meta property="og:locale" content="en_US" />',
			'result' => json_decode( $response )
		);

		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/thankyou' );
		$this->load->view( 'templates/footer' );
	}

	public function thankusecondary() {
		$sql = "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%talksecondary%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date ASC";
		$query = $this->db->query( $sql );
		$res = $query->result_array();


		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Reimagined-Technology-resource-01.svg';
		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-DevOps-resource.svg';
		$data = array(
			'page_title' => 'Thank you',
			'description' => '',
			'keywords' => '',
			'canonical_tag' => '',
			'og' => '<meta name="revisit-after" content="7 days" />
					 <meta name="allow-search" content="yes" />
					 <title>Thank you</title>
					 <meta name="description" content=""/>
					 <meta property="og:locale" content="en_US"/>',
			'result' => $res
		);
		$this->load->view( 'templates/header', $data );
		$this->load->view( 'pages/thankyousecondary' );
		$this->load->view( 'templates/footer' );
	}
}