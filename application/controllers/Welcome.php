<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Welcome extends CI_Controller {
	public function index() {
		if ( empty( $this->uri->segment( 1 ) ) ) {
			$data = array(
				'page_title' => 'Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.',
				'description' => 'Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software.',
				'keywords' => 'lease adminstration software,asset finance software,fleet management software ',
				'canonical_tag' => '',
				'og' => '<meta name="revisit-after" content="7 days" />	
	<meta name="allow-search" content="yes" />
<title>Providers of the Odessa Platform, the world\'s leading asset finance software. Book A Demo.</title><meta name="description" content="Odessa\'s cross-platform workflow brings efficiency to your operations. Get started with our lease administration software or fleet management software."/>
	<meta property="og:locale" content="en_US"/>'
			);

			$this->load->view( 'templates/header', $data );
			$this->load->view( 'pages/home' );
			$this->load->view( 'templates/footer' );

		} else {
			$url = base_url() . "pagenotfound.html";
			header( 'location: ' . $url );
		}
	}

	public function lets_talk_secondary() {
		unset($_GET['email']);

		$sql = "SELECT wp_posts.* FROM wp_posts, wp_postmeta WHERE wp_posts.ID = wp_postmeta.post_id AND wp_postmeta.meta_key = 'select_pages' AND wp_postmeta.meta_value like '%talksecondary%' AND wp_posts.post_status = 'publish' AND (wp_posts.post_type = 'pr_individual' OR wp_posts.post_type = 'post') ORDER BY wp_posts.post_date ASC";
		$query = $this->db->query( $sql );
		$res = $query->result_array();

		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-Reimagined-Technology-resource-01.svg';
		$res[ '0' ][ 'post_image' ] = '<?php echo base_url(); ?>blog/wp-content/uploads/2020/07/Odessa-DevOps-resource.svg';

		$data	= array();

		$data['meta_title']			= 'Get started with Odessa. info@odessainc.com. +1 888-683-2484.';
		$data['meta_description']	= 'We\'re Odessa, the makers of the Odessa Platform - the number one software choice for asset finance companies, worldwide. Schedule a demo.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Get started with Odessa. info@odessainc.com. +1 888-683-2484.';
		$data['og_description']		= 'We\'re Odessa, the makers of the Odessa Platform - the number one software choice for asset finance companies, worldwide. Schedule a demo.';
		$data['tc_title']			= 'Get started with Odessa. info@odessainc.com. +1 888-683-2484.';
		$data['tc_description']		= 'We\'re Odessa, the makers of the Odessa Platform - the number one software choice for asset finance companies, worldwide. Schedule a demo.';
		$data['result']				= $res;

		if ( isset( $_POST[ 'email' ] ) ) {
			$email = $_POST[ 'email' ];
			$data[ 'email' ] = $email;
		}

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/lets_talk_secondary', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function lets_talk_primary() {
		$data	= array();

		$data['meta_title']			= 'Let\'s talk | Odessa';
		$data['meta_description']	= 'Learn why companies trust Odessa to deliver great stakeholder experiences.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Let\'s talk | Odessa';
		$data['og_description']		= 'Learn why companies trust Odessa to deliver great stakeholder experiences.';
		$data['tc_title']			= 'Let\'s talk | Odessa';
		$data['tc_description']		= 'Learn why companies trust Odessa to deliver great stakeholder experiences.';

		// $this->load->view('layouts/header',$data);
		// $this->load->view('pages/lets_talk_primary');
		// $this->load->view('layouts/footer');
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view( 'pages/amp_pages/letstalk.amp.html', $data );
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function privacy_policy() {
		$data	= array();

		$data['meta_title']			= 'Privacy Policy | Odessa';
		$data['meta_description']	= 'This policy covers privacy practices for www.odessainc.com, as well as Odessa. Please review the applicable privacy policies disclosed on those sites.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Privacy Policy | Odessa';
		$data['og_description']		= 'This policy covers privacy practices for www.odessainc.com, as well as Odessa. Please review the applicable privacy policies disclosed on those sites.';
		$data['tc_title']			= 'Privacy Policy | Odessa';
		$data['tc_description']		= 'This policy covers privacy practices for www.odessainc.com, as well as Odessa. Please review the applicable privacy policies disclosed on those sites.';

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/policy', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function terms_condition() {
		$data	= array();

		$data['meta_title']			= 'Terms of Use | Odessa';
		$data['meta_description']	= 'Please review Odessa\'s legal notices, terms and conditions related to your use of the website.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Terms of Use | Odessa';
		$data['og_description']		= 'Please review Odessa\'s legal notices, terms and conditions related to your use of the website.';
		$data['tc_title']			= 'Terms of Use | Odessa';
		$data['tc_description']		= 'Please review Odessa\'s legal notices, terms and conditions related to your use of the website.';

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/terms_condition', $data);
		$this->load->view('layouts/footer', $data);
	}


	public function cookie_notice() {
		$data	= array();

		$data['meta_title']			= 'Cookie Notice | Odessa';
		$data['meta_description']	= 'Your Pirvacy is important. Here&#039;s a detailed list of the cookies we use on our Website. Our Website is scanned with our cookie scanning tool regularly to maintain a list as accurate as possible';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Cookie Notice | Odessa';
		$data['og_description']		= 'Your Pirvacy is important. Here&#039;s a detailed list of the cookies we use on our Website. Our Website is scanned with our cookie scanning tool regularly to maintain a list as accurate as possible';
		$data['tc_title']			= 'Cookie Notice | Odessa';
		$data['tc_description']		= 'Your Pirvacy is important. Here&#039;s a detailed list of the cookies we use on our Website. Our Website is scanned with our cookie scanning tool regularly to maintain a list as accurate as possible';

		$this->load->view('layouts/header', $data);
		$this->load->view('pages/cookie-notice', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function design_principles() {
		$data	= array();

		$data['meta_title']			= 'Technology for Equipment Leasing & asset finance Industry | Odessa';
		$data['meta_description']	= 'Odessa design offers data-driven solutions that enable enterprise intelligence, delivering excellence to all stakeholders of the lease enterprise.';
		$data['meta_keyword']		= 'lease adminstration software,asset finance software,fleet management software';
		$data['og_title']			= 'Technology for Equipment Leasing & asset finance Industry | Odessa';
		$data['og_description']		= 'Odessa design offers data-driven solutions that enable enterprise intelligence, delivering excellence to all stakeholders of the lease enterprise.';
		$data['tc_title']			= 'Technology for Equipment Leasing & asset finance Industry | Odessa';
		$data['tc_description']		= 'Odessa design offers data-driven solutions that enable enterprise intelligence, delivering excellence to all stakeholders of the lease enterprise.';

		// $this->load->view('layouts/header', $data);
		// $this->load->view('pages/design_principles', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view( 'pages/amp_pages/design.amp.html', $data );
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}
}