<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );


class Newsroom extends CI_Controller {
	public function index() {
		$data	= array();

		$sql = "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%newsroom%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date DESC";
		$query = $this->db->query( $sql );
		$res = $query->result();

		$sql1 = "SELECT wp_posts.post_title,wp_posts.post_name,wp_posts.post_content,DATE_FORMAT(wp_posts.post_date,'%M %d, %Y') as post_date FROM wp_posts WHERE wp_posts.post_status = 'publish' AND wp_posts.post_type = 'pr_individual' ORDER BY wp_posts.post_date DESC";
		$query1 = $this->db->query( $sql1 );
		$res_announcements = $query1->result();


		$res[ '2' ]->image = '/blog/wp-content/uploads/2024/auto-press.png';
		$res[ '0' ]->image = '/blog/wp-content/uploads/2024/tata-team.png';
		$res[ '1' ]->image = '/blog/wp-content/uploads/2024/nate.jpg';


		$data['meta_title']			= 'Get the latest updates about Odessa in the news.';
		$data['meta_description']	= 'Odessa\'s market-leading asset finance software is at the heart of many notable businesses such as Dell Financial Services, Truist, and PNC Bank.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Get the latest updates about Odessa in the news.';
		$data['og_description']		= 'Odessa\'s market-leading asset finance software is at the heart of many notable businesses such as Dell Financial Services, Truist, and PNC Bank.';
		$data['tc_title']			= 'Get the latest updates about Odessa in the news.';
		$data['tc_description']		= 'Odessa\'s market-leading asset finance software is at the heart of many notable businesses such as Dell Financial Services, Truist, and PNC Bank.';
		$data['result']				= $res_announcements;
		$data['result1']			= $res;

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/newsroom', $data);
		$this->load->view('layouts/footer', $data);
		// $this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		// $this->load->view( 'pages/amp_pages/news.amp.html', $data );
		// $this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function announcements() {
		$data	= array();

		$data['meta_title']			= 'Odessa Announcements - Latest News and Updates from Odessa.';
		$data['meta_description']	= 'Stay up-to-date with the latest news and updates from Odessa. Find all the latest announcements from Odessa, including product launches, company news, and more. Keep track of everything happening at Odessa by checking out our announcements page.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Odessa Announcements - Latest News and Updates from Odessa.';
		$data['og_description']		= 'Stay up-to-date with the latest news and updates from Odessa. Find all the latest announcements from Odessa, including product launches, company news, and more. Keep track of everything happening at Odessa by checking out our announcements page.';
		$data['tc_title']			= 'Odessa Announcements - Latest News and Updates from Odessa.';
		$data['tc_description']		= 'Stay up-to-date with the latest news and updates from Odessa. Find all the latest announcements from Odessa, including product launches, company news, and more. Keep track of everything happening at Odessa by checking out our announcements page.';

		$this->load->view( 'layouts/header', $data );
		$this->load->view( 'pages/announcements', $data );
		$this->load->view( 'layouts/footer', $data );
	}
}