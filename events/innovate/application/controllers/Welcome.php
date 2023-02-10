<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$data['keywords'] = 'asset finance, equipment leasing, fleet leasing, user conference';
		$data['description'] = 'The two days annual conference is an opportunity for learning and networking for ‘newbie’ to ‘pro’ in equipment leasing industry.';
		$data['title'] = 'Innovate | Odessa User Conference';
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/';
		$this->load->view('header',$data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function register_page(){
		$data['keywords'] = '';
		$data['title'] = "Registration | Innovate2019";
		$data['description'] = "Get access to the people that build and implement our products, workshop with system users, and gain a deeper understanding of the system.";
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/register';
		$this->load->view('header',$data);
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function thank_you(){
		$data['keywords'] = '';
		$data['title'] = "Thank you for registration | Innovate2020";
		$data['description'] = "Get access to the people that build and implement our products, workshop with system users, and gain a deeper understanding of the system.";
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/thank_you';
		$this->load->view('header',$data);
		$this->load->view('thank_you');
		$this->load->view('footer');
	}


	public function code_conduct(){
		$data['keywords'] = '';
		$data['title'] = "Code of Conduct | Innovate2019";
		$data['description'] = "Expected & Unacceptable Behavior & Consequences. Read through the code of conduct";
		$data['canonical'] = '';
		$this->load->view('header',$data);
		$this->load->view('code_conduct');
		$this->load->view('footer');
	}

	public function innovate_roi(){
		$doc_url = base_url().'assets/docs/Innovate_ROI Letter_2019.docx';
		
		header('Content-disposition: inline; filename='.$doc_url);
		header('Content-type: application/msword'); // not sure if this is the correct MIME type
		readfile($doc_url);
		exit;



	} 
	

	public function faq(){
		$data['keywords'] = 'Innovate FAQs, Innovate2019 FAQs, Odessa’s annual conference FAQs, Odessa user conference FAQs';
		$data['title'] = 'FAQ | Innovate2019';
		$data['description'] = 'Check out the frequently asked question at Innovate2019';
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/faq';
		$this->load->view('header',$data);
		$this->load->view('faq');
		$this->load->view('footer');
	}

	public function venue(){
		$data['keywords'] = 'Innovate2019 venue, Innovate venue, Odessa user conference venue 2019, Book your venue';
		$data['title'] = "Innovate Venue | Odessa User Conference";
		$data['description'] = "The user conference is located at the Hilton, Penn's Landing along the banks of the Delaware River, Philadelphia.";
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/venue';
		$this->load->view('header',$data);
		$this->load->view('venue');
		$this->load->view('footer');
	}

	public function agenda(){
		$data['keywords'] = 'Innovate2019 Agenda, Odessa’s annual conference Agenda, Odessa user conference Agenda 2019, LeaseWave 5 Training, LeaseWave 4 Training, Odessa build technical training.';
		$data['title'] = 'Conference Agenda | Innovate2019';
		$data['description'] = 'Breakot sessions, TrainingPass at Innovate,  Alliance Partner Summit, Cocktail reception and more';
		$data['canonical'] = 'https://www.odessatechnologies.com/events/innovate2019/agenda';
		$this->load->view('header',$data);
		$this->load->view('agenda');
		$this->load->view('footer');
	}
}
