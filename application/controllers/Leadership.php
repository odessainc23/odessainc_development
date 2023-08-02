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
		$this->load->view('pages/amp_pages/company.amp.html', $data);
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
	}

	public function get_list() {
		return array(
			array(
				'name'			=> 'Madhu Natarajan',
				'thumbnail'		=> base_url() .'assets/images/leadership/madhu-natarajan.jpg',
				'title'			=> 'Co-Founder + CEO',
				'description'	=> 'Madhu is Odessa’s CEO and co-founder, leading the company since its beginning in 1998. A passionate product visionary and leader, Madhu started Odessa to bring technology efficiencies to the leasing industry. Under Madhu’s leadership, Odessa has grown its offering into a full platform, delivering powerful lease and loan management solutions to enterprises around the world. He currently serves on the Equipment Leasing & Finance Foundation’s Vision Future Council, helping to drive innovation in asset finance. Madhu graduated magna cum laude with a Bachelor of Science in Computer Science and minors in Business Administration and Accounting from Monmouth College. Committed to education and reinvesting in local communities, Madhu chairs the Board of the Odessa Foundation.',
				'experience'	=> '25 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/madhu-natarajan-501254170',
					'twitter'	=> 'https://twitter.com/madhunatarajan_'
				)
			),
			array(
				'name'			=> 'Jay Mehra',
				'thumbnail'		=> base_url() .'assets/images/leadership/jay-mehra.jpg',
				'title'			=> 'Co-Founder + CTO',
				'description'	=> 'Jay is Odessa’s CTO and co-founder, overseeing the teams that design and develop the Odessa Platform since 2000. He has a penchant for leveraging technologies to build world-class products, focused on helping Odessa’s customers build great digital experiences. Prior to his role as CTO, Jay was the COO of Odessa from 2000-2019, leading the transformation into a multinational organization meeting global consulting standards in delivery management, performance, and quality. Prior to that, Jay worked for PriceWaterhouseCoopers, LLP where he designed and developed Intellectual Asset Management software. Jay also spent time at Ernst and Young, leading the development of the State of Industry report for India’s auto finance industry. He holds a Bachelor of Science in Mathematical Economics from Haverford College.',
				'experience'	=> '25 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/jay-mehra-b8b254170/',
					'twitter'	=> 'https://twitter.com/jayarunmehra'
				)
			),
			array(
				'name'			=> 'Jason St. Laurent',
				'thumbnail'		=> base_url() .'assets/images/leadership/JasonStLaurent_Odessa.png',
				'title'			=> 'COO',
				'description'	=> 'Jason is Odessa’s COO, responsible for leading all aspects of the company’s delivery teams across system implementation and customer support. With 23 years of experience in global system implementations, technology development, and inter-disciplinary project management, Jason is focused on delivering exception customer experience, implementing best practices to realize accelerated time-to-value for customers, and developing services teams to scale. Prior to Odessa, he grew and led a variety of services portfolios across FIS. Jason holds a Bachelor’s degree in Accounting and Management Information Systems from the University of Delaware.',
				'experience'	=> '24 years in Delivery',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/jason-st-laurent-0694472/',
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
				'name'			=> 'Keelie Fitzgerald',
				'thumbnail'		=> base_url() .'assets/images/leadership/keelie-fitzgerald.jpg',
				'title'			=> 'SVP, Marketing',
				'description'	=> 'Keelie is Odessa’s SVP, Marketing, responsible for global marketing and communications. A seasoned asset finance marketer, she is passionate about brand storytelling and making the complex simple. Prior to joining in 2009, she developed B2B marketing and design programs at JNPR. Keelie currently serves on the ELFA Operations and Technology Committee and on the Board of Directions for the Odessa Foundation. She holds a Bachelor of Arts in Psychology from Temple University. Committed to building diverse teams that serve communities, Keelie is the executive leader for Women@Odessa and CSR in the Americas.',
				'experience'	=> '14 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/keelie-fitzgerald-091aa146/',

				)
			),
			array(
				'name'			=> 'Sumit Maheshwari',
				'thumbnail'		=> base_url() .'assets/images/leadership/sumit-maheshwari.jpg',
				'title'			=> 'SVP, Finance',
				'description'	=> 'Sumit is Odessa’s SVP, Finance and has been with the company since 2017. He drives the company’s financial strategy and reporting, passionate about high growth metrics while also improving operating efficiency. Prior to joining Odessa, Sumit served as Head of Business Finance at AXISCADES and was instrumental in helping them scale for growth. Before that, Sumit held positions in corporate finance at JP Morgan and Genpact. He holds a Bachelors in Commerce from Patna University and has been a Chartered Accountant since 2005.',
				'experience'	=> '6 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/casumitmaheshwari/',
				)
			),
			array(
				'name'			=> 'Jim Humphrey',
				'thumbnail'		=> base_url() .'assets/images/leadership/jim-humphrey.jpg',
				'title'			=> 'SVP, Sales',
				'description'	=> 'Jim is Odessa’s SVP, Sales, responsible for global sales and business development since 2008. He oversees all aspects of sales strategy during the customer buying journey, leveraging his 35 years of experience in leasing to develop strategies that resonate with lessors. Prior to Odessa, Jim served as Vice President of Business Development for Genpact and spent 19 years at GE Capital, where he held various positions, including General Manager of GE Capital Equipment Finance in Ontario, Canada and Vice President of Sales. He holds a Bachelor of Science in Business Administration and Finance from the University of Connecticut.',
				'experience'	=> '38 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/humphreyjim/',
				)
			),
			array(
				'name'			=> 'Alexandre Ellwood',
				'thumbnail'		=> base_url() .'assets/images/leadership/AlexandreEllwood_Odessa.png',
				'title'			=> 'SVP, Business Development',
				'description'	=> 'Alexandre is Odessa’s SVP, Business Development, responsible for partnership strategy and business development in Europe.  With 25+ years of experience in finance, technology and professional services, Alexandre is focused on bringing Odessa innovation to new markets. Prior to joining Odessa in 2021, he managed operations at Cassiopae and Sopra Banking Software in the UK for nearly a decade. Alexandre holds a degree in Economics and Finance from Ecole Supérieure des Sciences Commerciales d’ Angers.',
				'experience'	=> '11 Years in Leasing',
				 
			),
			array(
				'name'			=> 'Leonard Lane',
				'thumbnail'		=> base_url() .'assets/images/leadership/leonard-lane.jpg',
				'title'			=> 'SVP, Product Management',
				'description'	=> 'Leonard is Odessa’s SVP, Product Management, overseeing the Product organization and developing the functional roadmap of Odessa Core since 2016. He is a veteran of enterprise systems implementation, coming to Odessa with more than 25 years of experience in accounting, finance, and operations. Prior to Odessa, Leonard held roles at Winthrop Resources Corporation and TCF Bank where he was instrumental in the success of executing digital transformation strategy. He holds a Bachelor of Science and Business in Finance and a Master of Business Administration from the University of Minnesota, and has been a CPA since 1991. As a leasing accounting specialist, Leonard previously served on the ELFA Operations and Technology Committee.',
				'experience'	=> '28 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/leonard-lane-217b9274/',
				)
			),
			
			array(
				'name'			=> 'Sumandeep Kaur',
				'thumbnail'		=> base_url() .'assets/images/leadership/SumandeepKaur_Odessa.png',
				'title'			=> 'SVP, Product Management',
				'description'	=> 'Joining Odessa as SVP, Product Management in 2020, Sumandeep brings 30+ years of experience in product development and technology, and leading enterprise digital transformation. She is responsible for the strategy and roadmap for the tools and ecosystem of offerings on the Odessa Platform. Prior to Odessa, Sumandeep held varying positions with HP/HPE Financial Services most recently as CIO and Technology Leader for Digital Transformation. She holds a Bachelor of Science and a Masters in Computer Application from Thapar University.',
				'experience'	=> '24 Years in Leasing',
			),
			
			array(
				'name'			=> 'Ravi Pathak',
				'thumbnail'		=> base_url() .'assets/images/leadership/ravi-pathak.jpg',
				'title'			=> 'SVP, Technology Architecture',
				'description'	=> 'Ravi is Odessa’s SVP, Solution Architecture, instrumental in driving the technical architecture behind the company’s market-leading platform strategy. He is a leader in building practical solutions for large-scale enterprise applications and using innovative technology to guarantee customer success. Prior to Odessa, Ravi led the architecture of complex products and high profile, large enterprise applications at Tech Mahindra, DigitE, Mastek and JP Morgan. He holds both a Bachelor of Science and a Master of Science in Computer Engineering from the University of Mumbai.',
				'experience'	=> '13 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/ravip1/',
				)
			),
			
			array(
				'name'			=> 'Roopa Jayaraman',
				'thumbnail'		=> base_url() .'assets/images/leadership/roopa-jayaraman.jpg',
				'title'			=> 'SVP, Product and Technology Development',
				'description'	=> 'Roopa is Odessa’s SVP, Product and Technology Development, responsible for defining product strategies, R&D, and implementing program blueprints to deliver solutions at scale. She is passionate about bridging the strategy-execution gap in the fintech space and leveraging agile methodologies and tools to build product management excellence across global teams. Roopa champions strategic programs that catalyze talent development and innovation at Odessa, instrumental in Odessa University and Communities of Practice. She holds a Bachelor of Arts in Sociology from Stella Maris College and a Master of Management from the University of Auckland. Committed to driving diversity and inclusion, Roopa is the executive sponsor of Women@Odessa in India.',
				'experience'	=> '8 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/roopajayaraman/',

				)
			),
			
			array(
				'name'			=> 'Jeba Singh',
				'thumbnail'		=> base_url() .'assets/images/leadership/jeba-singh.jpg',
				'title'			=> 'SVP, Technology and Engineering',
				'description'	=> 'Jeba is Odessa’s SVP, Technology and Engineering, responsible for the development, ongoing management and the roadmaps of all Odessa products. He also leads the dedicated Research and Development department that drives all technological innovation at the company. Passionate about solution architecture, Jeba champions innovation that is impactful and scalable. He joined the company in 2003, and prior to that deployed some of the largest portals built for the Indian market at India Internet Media.',
				'experience'	=> '20 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/jeba-singh-9904a6b8/',
				)
			),
			array(
				'name'			=> 'Kevin Schroeder',
				'thumbnail'		=> base_url() .'assets/images/leadership/kevin-schroeder.jpg',
				'title'			=> 'SVP, Delivery Design',
				'description'	=> 'Kevin is Odessa’s SVP, Delivery Design, leading the Delivery organization in the Americas in strategic initiatives and complex, enterprise implementations. He is passionate about process and performance, driving excellence in Odessa’s implementation methodology. Prior to joining Odessa in 2003, Kevin led the development of models for Fortune 500 companies at PriceWaterhouseCoopers to optimize patent-spend and R&D efforts. He has also previously consulted for various national companies and sports franchises in auditing their capital expenses and budgets. He holds a Bachelor of Science in Mathematical Economics from Haverford College.',
				'experience'	=> '18 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/kevin-schroeder-8a580a/',
				)
			),
			
			
		
			array(
				'name'			=> 'Vedapuri Ramanathan',
				'thumbnail'		=> base_url() .'assets/images/leadership/vedapuri-ramanathan.jpg',
				'title'			=> 'SVP, Delivery and Services Development',
				'description'	=> 'Veda is Odessa’s SVP of Delivery and Services Development, responsible for excellence in systems implementation and customer-focused product development. He is driven by engineering and operational excellence as well as building efficient teams that scale. Prior to joining in 2004, Veda gained experience as an engineer with TCG Software Services, a leading services company in India. He holds a Bachelor of Science in Electronics and a Master’s in Computer Applications from Bharathiar University.',
				'experience'	=> '18 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/vedapuri-ayalur-ramanathan-27606b2/',
				)
			),
			array(
				'name'			=> 'Bobbie Warner',
				'thumbnail'		=> base_url() .'assets/images/leadership/bobbie-warner.jpg',
				'title'			=> 'SVP, Delivery Management',
				'description'	=> 'Bobbie is an SVP, Delivery Management at Odessa, and has been leading our portfolio of customers through the full implementation lifecycle since 2015. A seasoned customer advocate, Bobbie is passionate about customer success and doesn’t shy away from complex projects. She holds several leasing and project certifications including CLFP, PMP and CSM, has a Master of Business Administration from the University of Hartford and a Bachelor of Science in communications from St. Norbert College.',
				'experience'	=> '9 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/bobbiewarner/',
				)
			),
			array(
				'name'			=> 'Michael Nyman',
				'thumbnail'		=> base_url() .'assets/images/leadership/michae-inyman.jpg',
				'title'			=> 'SVP, Delivery Management',
				'description'	=> 'Michael is an SVP, Delivery Management at Odessa, responsible for large scale global programs at Odessa since 2018. He uses technology to solve business issues and streamline operations and is passionate about capitalizing on business acumen to ensure customer success. He started his career at HP Financial Services, where he worked for ten years in various roles, later spending seven years at CIT overseeing all leasing platforms. He holds a Bachelor of Science in Accounting from Barton College.',
				'experience'	=> '23 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/michael-nyman-59433a21/',
				)
			),
			array(
				'name'			=> 'Susan Bostian',
				'thumbnail'		=> base_url() .'assets/images/leadership/susan-ostian.png',
				'title'			=> 'SVP, Delivery Management',
				'description'	=> 'Susan is an SVP, Delivery Management at Odessa, responsible for a portfolio of global strategic programs since 2020. She is focused on the integration of technology and services to deliver excellence in systems implementation and customer service. Susan comes to Odessa with 15 years of experience in delivery consulting in financial services, most recently holding roles at HP and TD Bank. She holds a Bachelor of Science in Business from the University of Delaware and a Master of Business Administration in Statistics and Operations Management from the University of Denver.',
				'experience'	=> '17 Years in Delivery',
				'social'		=> array(
				'linkedin'	    => 'https://www.linkedin.com/in/susan-bostian-2674a47/ ',
				)
			),
		);
	}
}
