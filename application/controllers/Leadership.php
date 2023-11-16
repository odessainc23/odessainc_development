<style>
	.i-amphtml-layout-size-defined .i-amphtml-fill-content{
		border-radius:50%
	}
	</style>



<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Leadership extends CI_Controller {
	public function index() {
		$data	= array();

		$data['meta_title']			= 'Leadership at Odessa';
		$data['meta_description']	= 'Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers.';
		$data['meta_keyword']		= 'odessa leadership team, asset finance industry, leasing industry';
		$data['og_title']			= 'Leadership at Odessa';
		$data['og_description']		= 'Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers.';
		$data['tc_title']			= 'Leadership at Odessa';
		$data['tc_description']		= 'Our leadership team is comprised of industry leaders and domain experts, bringing decades of cumulative insight and experience to our company and customers.';

		$data['leaders_list']		= $this->get_list();
		// Route::get('/company', function () {
		// 	return redirect('/home/company');
		// 	});
		// header("HTTP/1.1 404 Not Found");
		// $this->load->view('layouts/header',$data);
		// $this->load->view('pages/leadership', $data);
		// $this->load->view('layouts/footer', $data);
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view('pages/amp_pages/leadership.amp.html', $data);
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function get_list() {
		return array(
			array(
				'name'			=> 'Eric Bernstein',
				'thumbnail'		=> base_url() .'assets/images/leadership/eric.jpg',
				'title'			=> 'CEO',
				'description'	=> 'Eric joined Odessa in April 2023 as CEO, stepping into the role of founder Madhu Natarajan following his transition to Executive Chairman of the Board. Eric has 20+ years of experience leading global financial services software companies and a proven track record of scaling global organizations and delivering high growth. He joined Odessa from EquityZen, where he served as COO and oversaw EquityZen’s strategy and delivery of its solutions. Prior to EquityZen, Eric held roles as President of Broadridge Asset Management Solutions, COO of eFront, COO of Sophis, and Global Head of Sales and Product Management at LineData. In addition to his long tenured career in Financial Technology, Eric ran market-making and trading at PaineWebber and Melvin Securities. He is a tested leader who deeply understands enterprise software and differentiating customer experience.',
				'experience'	=> '14 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/eric-bernstein-7698a0/',
					
				)
			),
			array(
				'name'			=> 'Sumit Maheshwari',
				'thumbnail'		=> base_url() .'assets/images/leadership/sumit-maheshwari.jpg',
				'title'			=> 'CFO',
				'description'	=> 'Sumit is CFO at Odessa. Since joining the organization in 2017, Sumit has led the Finance function, including controllership, business finance, and pricing. Sumit focuses on delivering Odessa’s high growth while also improving operating margin.
				Sumit has 15+ years of experience and a proven track record in setting up global finance functions for IT and IT Enabled Services businesses. He also has deep experience in leading fundraising, M&A, and IPO transactions for global organizations.
				Before joining Odessa, Sumit served as Head of Business Finance at AXISCADES and Head of Corporate Financial Reporting at J.P. Morgan and Genpact. Sumit is a Chartered Accountant  from the ICAI.',
				'experience'	=> '6 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/casumitmaheshwari/',
				)
			),
			
			array(
				'name'			=> 'Jason St. Laurent',
				'thumbnail'		=> base_url() .'assets/images/leadership/JasonStLaurent_Odessa.jpg',
				'title'			=> 'COO',
				'description'	=> 'Jason is Odessa’s COO, responsible for leading all aspects of the company’s delivery teams across system implementation and customer support. With 23 years of experience in global system implementations, technology development, and inter-disciplinary project management, Jason is focused on delivering exception customer experience, implementing best practices to realize accelerated time-to-value for customers, and developing services teams to scale. Prior to Odessa, he grew and led a variety of services portfolios across FIS. Jason holds a Bachelor’s degree in Accounting and Management Information Systems from the University of Delaware.',
				'experience'	=> '24 years in Delivery',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/jason-st-laurent-0694472/',
				)
			),
			array(
				'name'			=> 'Roopa Jayaraman',
				'thumbnail'		=> base_url() .'assets/images/leadership/roopa-jayaraman.jpg',
				'title'			=> 'CTO',
				'description'	=> 'Roopa is CTO at Odessa, responsible for product and technology leadership, spearheading cross-functional teams, to deliver platform releases to our global customers. She is also the site leader for our India hub and champions an innovative, inclusive, and learning-centric workplace.
				Roopa brings more than two decades of experience within the enterprise software realm, with a dedicated focus on financial services for over 10 years. Roopa is a seasoned leader, with deep expertise in product roadmaps, technology innovation, and R&D strategies at a global scale.
				Having joined Odessa in April 2014, Roopa has played pivotal roles as SVP, in product strategies and development for best-in-class customer experience. Prior to Odessa, she managed enterprise technology transformations at Unisys and Leadtec (now SPS Commerce).',
				'experience'	=> '9 years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/roopajayaraman/',

				)
			),
			
			array(
				'name'			=> 'Robert W. Johnson ',
				'thumbnail'		=> base_url() .'assets/images/leadership/bob.png',
				'title'			=> 'EVP, Auto Finance',
				'description'	=> 'Bob is Executive Vice President, Auto Finance at Odessa. With a background spanning over 26 years in the Auto Finance industry, he oversees enterprise sales and new business development in the North America Region. He joined Odessa in 2023, bringing in his extensive industry knowledge and expertise in the Auto Finance sector. Prior to his role at Odessa, he held leadership positions at EY, CEDAR CX Technologies, defi SOLUTIONS, Alfa Financial Software FIS, and Fiserv. In his various leadership positions, he led sales, client support, implementations, and practices of global automotive finance and provided insight and guidance on product development. ',
				'experience'	=> '26 years in auto finance',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/robert-w-johnson-5ab31b1/',
				)
			),

			array(
				'name'			=> 'Jeff Lezinski',
				'thumbnail'		=> base_url() .'assets/images/leadership/jeff-lezinski.jpg',
				'title'			=> 'SVP, Solution Architecture',
				'description'	=> 'Jeff is Odessa’s SVP, Solution Architecture, instrumental in architecting Odessa’s functional solutions since he joined the company in 2004. Jeff currently serves on the ELFA Accounting Committee, and serves as a liaison to various industry and regulatory bodies. Prior to Odessa, Jeff worked for PricewaterhouseCoopers, LLP where he participated in and managed various engagements from a consulting and an audit perspective for a variety of industries, including financial services, pharmaceutical, and telecommunications. He holds a Bachelor of Science in Economics from Haverford College.',
				'experience'	=> '19 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/jeffrey-lezinski-7144562a/',
				)
			),
			array(
				'name'			=> 'Andrew Baird',
				'thumbnail'		=> base_url() .'assets/images/leadership/andrew.jpg',
				'title'			=> 'SVP, NA Sales & XaaS',
				'description'	=> 'Andrew is SVP of North American Sales & XaaS at Odessa, responsible for new customer prospecting, sales strategy and execution, contract negotiation, and go-to-market activities. In addition to his sales leadership role, Andrew oversees Odessa’s business development efforts for its subscription and XaaS solution. He has 15+ years of experience encompassing go-to-market planning, pricing, negotiation, enterprise sale execution, and delivery of diverse software systems and consulting services. Prior to Odessa, Andrew served as VP, Head of Sales in North America for numerous FIS businesses including Automotive & Equipment Finance, Commercial Lending, Cross Asset Trading & Risk, and Banking Risk, Performance, & Compliance.',
				'experience'	=> '15 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/andrew-b-30300613/',

				)
			),
			
			array(
				'name'			=> 'Campbell Clout',
				'thumbnail'		=> base_url() .'assets/images/leadership/campbell.jpg',
				'title'			=> 'SVP, Business Development',
				'description'	=> 'Campbell is SVP of Business Development at Odessa. With a background spanning over 25 years in the Asset Finance industry, his scope of responsibility involves enterprise sales and new business development in the Asia Pacific, Middle East, and Africa regions. He joined Odessa in 2022, bringing in his extensive industry knowledge and expertise. Before joining Odessa, Campbell held a leadership positions, spearheading projects including go-to-market strategy, sales, project delivery, and product management at AGC/Westpac, Rabobank, International Decision Systems, and FIS.',
				'experience'	=> '25 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/campbell-clout-580541/',
				)
			),
			array(
				'name'			=> 'Alexandre Ellwood',
				'thumbnail'		=> base_url() .'assets/images/leadership/AlexandreEllwood_Odessa.jpg',
				'title'			=> 'SVP, Business Development',
				'description'	=> 'Alexandre is Odessa’s SVP, Business Development, responsible for partnership strategy and business development in Europe.  With 25+ years of experience in finance, technology and professional services, Alexandre is focused on bringing Odessa innovation to new markets. Prior to joining Odessa in 2021, he managed operations at Cassiopae and Sopra Banking Software in the UK for nearly a decade. Alexandre holds a degree in Economics and Finance from Ecole Supérieure des Sciences Commerciales d’ Angers.',
				'experience'	=> '11 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/alexellwood/',
				)
			),
			
			array(
				'name'			=> 'Scott Frymire',
				'thumbnail'		=> base_url() .'assets/images/leadership/scott.jpg',
				'title'			=> 'SVP, Corporate Marketing',
				'description'	=> 'Scott is Odessa’s SVP of Corporate Marketing, responsible for driving  company’s solution messaging, expanding the brand presence, and building a best-in-class marketing organization. He has a diverse background with over 25 years of experience in B2B marketing. Scott has held marketing leadership roles in rapidly evolving industries like digital commerce, AI, and IT performance monitoring, shaping success stories at Unilog, Proton.ai, and ScienceLogic. Prior to joining Odessa, he founded Tidewater CMO, where he provided fractional CMO services and strategic marketing consultation to emerging B2B enterprises.  Scott’s early career was marked by significant contributions to ERP software companies, including Prophet 21 and Epicor, reflecting his unwavering commitment to driving growth and innovation.',
				'experience'	=> '27 years in B2B software ',
				'social'		=> array(
				'linkedin'	    => 'https://www.linkedin.com/in/scottfrymire/',
				)
			),
		);
	}
}
