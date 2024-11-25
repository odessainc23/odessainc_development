<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

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
	public function index() {
		$data	= array();

		$data['meta_title']			= 'Careers at Odessa';
		$data['meta_description']	= 'We’re Odessa. Our leading software platform is at the heart of some of the largest and most innovative companies in auto and equipment finance, helping them to thrive in business.';
		$data['meta_keywords']		= 'leasing software jobs';
		$data['meta_author']		= '8Guild';
		$job_lists					= $this->get_job_list();
		
		// Grouping the opening by Teams
		$lists		= array();
        $dept       = array();
        $deptstring = "";
        $loc        = array();
        $locstring  = "";
		//var_dump($job_lists['objects']);die;
        foreach ($job_lists['content'] as $item) {
		//var_dump($item['title']);die;
			$temp = $item;
			if(!empty($item['office']['country']) && !in_array($item['office']['country'], $loc))
                array_push($loc, $item['office']['country']);
				
            if(!empty($item['department']) && !in_array($item['department'], $dept))
                array_push($dept, $item['department']);


				// if ($temp['team'] != '') {
				// 	if (!isset($lists[$temp['team']])) {
				// 		$lists[$temp['team']] = array();
				// 	}

				// 	array_push($lists[$temp['team']], $temp);
				// } else {
				// 	if (!isset($lists[$temp['team']])) {
				// 		$lists['Others'] = array();
				// 	}

				// 	array_push($lists['Others'], $temp);
				// }

				
			
		}
		//	var_dump($loc);die;
		sort($loc);
        sort($dept);
		arsort($lists);

        foreach ($loc as $item){
            $locstring = $locstring."<li data-key='data-filter-location' data-value='".$item."'>".$item."</option>";
        }
		//var_dump($locstring);die;
        foreach ($dept as $item){
            $deptstring = $deptstring."<li data-key='data-filter-department' data-value='".$item."'>".$item."</option>";
        }

        $data['location_filter']	= $locstring;
        $data['department_list']	= $dept;
        $data['department_filter']	= $deptstring;
		$data['lists']				= $job_lists['content'];
		//	var_dump($data['lists']);die;
		$this->load->helper('url');
		// $this->load->view('layouts/header', $data);
		// $this->load->view('pages/careers', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view('pages/amp_pages/careers.amp.html', $data);
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function job($id) {
		
		$data	= array();
		
		$data['item']				= $this->get_job_item($id);

		$data['meta_title']			= 'Odessa Careers | '. $data['item']['title'];
		$data['meta_description']	= 'Kickstart your career with Odessa where we celebrate our diverse perspectives and unique identities. Sound like your kind of work environment? Come join us.';
		$data['meta_keywords']		= 'leasing software jobs';
		$data['meta_author']		= 'Odessa Inc';

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('careers', $data);
		$this->load->view('footer', $data);
	}
	
    // public function get_job_list() {
	// 	$url = "https://api.recruiterbox.com/v2/openings?limit=100&is_private=false&order_by=-created_date";
	// 	$key = "6bfb0331820b42568fa4b84b81fec85f";

	// 	// Init CURL
	// 	$curl = curl_init($url);

	// 	$curlConfig = array(
	// 		CURLOPT_URL            => $url,
	// 		CURLOPT_USERPWD		   => $key,
	// 		CURLOPT_RETURNTRANSFER => true,
	// 		CURLOPT_SSL_VERIFYPEER => false
	// 	);

	// 	curl_setopt_array($curl, $curlConfig);

	// 	$result = curl_exec($curl);
	// 	//	var_dump($result);die;
	// 	curl_close($curl);

	// 	return json_decode($result, true);
    // }

	public function get_job_list(){
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
		$ch = curl_init();

		
		curl_setopt($ch, CURLOPT_URL, 'https://odessa.sensehq.eu/careers/api/postings?offset=0&limit=100000');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
    		echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);

		//var_dump(json_decode($result, true)); die;
		return json_decode($result, true);
	}

	// public function get_job_item($id) {
	// 	$url = 'https://api.recruiterbox.com/v2/openings/'. $id;
	// 	$key = "6bfb0331820b42568fa4b84b81fec85f";

	// 	// Init CURL
	// 	$curl = curl_init($url);

	// 	$curlConfig = array(
	// 		CURLOPT_URL            => $url,
	// 		CURLOPT_USERPWD		   => $key,
	// 		CURLOPT_RETURNTRANSFER => true,
	// 		CURLOPT_SSL_VERIFYPEER => false
	// 	);

	// 	curl_setopt_array($curl, $curlConfig);

	// 	$result = curl_exec($curl);
	// 	//var_dump($result);die;
	// 	curl_close($curl);

	// 	return json_decode($result, true);
	// }
}
