<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Dev_amp extends CI_Controller {
	public function index() {
		$sql = "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%cloud%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date ASC";
		$query = $this->db->query( $sql );
		$res = $query->result_array();

		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Cloud-CLFP-resource.svg';
		$res[ '1' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Reimagined-Technology-resource-01.svg';

		$data	= array();

		$data['meta_title']			= 'Meet your organization needs with the Odessa Platform in Cloud.';
		$data['meta_description']	= 'Scale confidently in the cloud with Odessa, and leave the security, governance, and administration to us for enhanced lease management capabilities.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Meet your organization needs with the Odessa Platform in Cloud.';
		$data['og_description']		= 'Scale confidently in the cloud with Odessa, and leave the security, governance, and administration to us for enhanced lease management capabilities.';
		$data['tc_title']			= 'Meet your organization needs with the Odessa Platform in Cloud.';
		$data['tc_description']		= 'Scale confidently in the cloud with Odessa, and leave the security, governance, and administration to us for enhanced lease management capabilities.';
		$data['result']				= $res;

			// $this->load->view( 'layouts/amp_pages/header_amp.php', $data );
			// $this->load->view( 'pages/amp_pages/cloud_amp.php', $data );
			// $this->load->view( 'layouts/amp_pages/footer_amp.php', $data );
			$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
			$this->load->view( 'pages/amp_pages/dev.amp.html', $data );
			$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
		
	}
}