<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Leadership_amp extends CI_Controller {
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
// 		$url = 'http://www.sitepoint.com/community/t/redirect-302-response/101550';
//  header('Location: ' . $url, true, 500);
// header("HTTP/1.1 404 Not Found");
		$this->load->view( 'layouts/amp_pages/header.amp.html', $data );
		$this->load->view('pages/amp_pages/leadership.amp.html', $data);
		$this->load->view( 'layouts/amp_pages/footer.amp.html', $data );
		
	}

	public function get_list() {
		return array(
			array(
				'name'			=> 'Eric Bernstein',
				'thumbnail'		=> base_url() .'assets/images/leadership/eric.png',
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
			// array(
			// 	'name'			=> 'Jay Mehra',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/jay-mehra.jpg',
			// 	'title'			=> 'Co-Founder + CTO',
			// 	'description'	=> 'Jay is Odessa’s CTO and co-founder, overseeing the teams that design and develop the Odessa Platform since 2000. He has a penchant for leveraging technologies to build world-class products, focused on helping Odessa’s customers build great digital experiences. Prior to his role as CTO, Jay was the COO of Odessa from 2000-2019, leading the transformation into a multinational organization meeting global consulting standards in delivery management, performance, and quality. Prior to that, Jay worked for PriceWaterhouseCoopers, LLP where he designed and developed Intellectual Asset Management software. Jay also spent time at Ernst and Young, leading the development of the State of Industry report for India’s auto finance industry. He holds a Bachelor of Science in Mathematical Economics from Haverford College.',
			// 	'experience'	=> '25 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/jay-mehra-b8b254170/',
			// 		'twitter'	=> 'https://twitter.com/jayarunmehra'
			// 	)
			// ),
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
				'name'			=> 'Roopa Jayaraman',
				'thumbnail'		=> base_url() .'assets/images/leadership/roopa-jayaraman.jpg',
				'title'			=> 'CTO',
				'description'	=> 'Roopa is CTO at Odessa, responsible for product and technology leadership, spearheading cross-functional teams, to deliver platform releases to our global customers. She is also the site leader for our India hub and champions an innovative, inclusive, and learning-centric workplace.
				Roopa brings more than two decades of experience within the enterprise software realm, with a dedicated focus on financial services for over 10 years. Roopa is a seasoned leader, with deep expertise in product roadmaps, technology innovation, and R&D strategies at a global scale.
				Having joined Odessa in April 2014, Roopa has played pivotal roles as SVP, in product strategies and development for best-in-class customer experience. Prior to Odessa, she managed enterprise technology transformations at Unisys and Leadtec (now SPS Commerce).',
				'experience'	=> '9 years in Delivery',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/roopajayaraman/',

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
				'thumbnail'		=> base_url() .'assets/images/leadership/andrew.png',
				'title'			=> 'SVP NA Sales & XaaS',
				'description'	=> 'At Odessa, Andrew is SVP, North American Sales & XaaS, responsible for new customer prospecting, sales strategy and execution, contract negotiation, and go-to-market activities. In addition to his sales leadership role, Andrew oversees Odessa’s business development efforts for its subscription and XaaS solution. He has 15+ years of experience encompassing go-to-market planning, pricing, negotiation, enterprise sale execution, and delivery of diverse software systems and consulting services. Prior to Odessa, Andrew served as VP, Head of Sales in North America for numerous FIS businesses including Automotive & Equipment Finance, Commercial Lending, Cross Asset Trading & Risk, and Banking Risk, Performance, & Compliance.',
				'experience'	=> '15 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/andrew-b-30300613/',

				)
			),
			
			array(
				'name'			=> 'Campbell Clout',
				'thumbnail'		=> base_url() .'assets/images/leadership/campbell.png',
				'title'			=> 'SVP, Business Development',
				'description'	=> 'Campbell is SVP of Business Development at Odessa. With a background spanning over 25 years in the Asset Finance industry, his scope of responsibility involves enterprise sales and new business development in the Asia Pacific, Middle East, and Africa regions. He joined Odessa in 2022, bringing in his extensive industry knowledge and expertise. Before joining Odessa, Campbell held a leadership positions, spearheading projects including go-to-market strategy, sales, project delivery, and product management at AGC/Westpac, Rabobank, International Decision Systems, and FIS.',
				'experience'	=> '25 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/campbell-clout-580541/',
				)
			),
			array(
				'name'			=> 'Alexandre Ellwood',
				'thumbnail'		=> base_url() .'assets/images/leadership/AlexandreEllwood_Odessa.png',
				'title'			=> 'SVP, Business Development',
				'description'	=> 'Alexandre is Odessa’s SVP, Business Development, responsible for partnership strategy and business development in Europe.  With 25+ years of experience in finance, technology and professional services, Alexandre is focused on bringing Odessa innovation to new markets. Prior to joining Odessa in 2021, he managed operations at Cassiopae and Sopra Banking Software in the UK for nearly a decade. Alexandre holds a degree in Economics and Finance from Ecole Supérieure des Sciences Commerciales d’ Angers.',
				'experience'	=> '11 Years in Leasing',
				'social'		=> array(
					'linkedin'	=> 'https://www.linkedin.com/in/alexellwood/',
				)
			),
			// array(
			// 	'name'			=> 'Leonard Lane',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/leonard-lane.jpg',
			// 	'title'			=> 'SVP, Product Management',
			// 	'description'	=> 'Leonard is Odessa’s SVP, Product Management, overseeing the Product organization and developing the functional roadmap of Odessa Core since 2016. He is a veteran of enterprise systems implementation, coming to Odessa with more than 25 years of experience in accounting, finance, and operations. Prior to Odessa, Leonard held roles at Winthrop Resources Corporation and TCF Bank where he was instrumental in the success of executing digital transformation strategy. He holds a Bachelor of Science and Business in Finance and a Master of Business Administration from the University of Minnesota, and has been a CPA since 1991. As a leasing accounting specialist, Leonard previously served on the ELFA Operations and Technology Committee.',
			// 	'experience'	=> '28 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/leonard-lane-217b9274/',
			// 	)
			// ),
			
			// array(
			// 	'name'			=> 'Sumandeep Kaur',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/SumandeepKaur_Odessa.png',
			// 	'title'			=> 'SVP, Product Management',
			// 	'description'	=> 'Joining Odessa as SVP, Product Management in 2020, Sumandeep brings 30+ years of experience in product development and technology, and leading enterprise digital transformation. She is responsible for the strategy and roadmap for the tools and ecosystem of offerings on the Odessa Platform. Prior to Odessa, Sumandeep held varying positions with HP/HPE Financial Services most recently as CIO and Technology Leader for Digital Transformation. She holds a Bachelor of Science and a Masters in Computer Application from Thapar University.',
			// 	'experience'	=> '24 Years in Leasing',
			// ),
			
			// array(
			// 	'name'			=> 'Ravi Pathak',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/ravi-pathak.jpg',
			// 	'title'			=> 'SVP, Technology Architecture',
			// 	'description'	=> 'Ravi is Odessa’s SVP, Solution Architecture, instrumental in driving the technical architecture behind the company’s market-leading platform strategy. He is a leader in building practical solutions for large-scale enterprise applications and using innovative technology to guarantee customer success. Prior to Odessa, Ravi led the architecture of complex products and high profile, large enterprise applications at Tech Mahindra, DigitE, Mastek and JP Morgan. He holds both a Bachelor of Science and a Master of Science in Computer Engineering from the University of Mumbai.',
			// 	'experience'	=> '13 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/ravip1/',
			// 	)
			// ),
			
			
			// array(
			// 	'name'			=> 'Jeba Singh',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/jeba-singh.jpg',
			// 	'title'			=> 'SVP, Technology and Engineering',
			// 	'description'	=> 'Jeba is Odessa’s SVP, Technology and Engineering, responsible for the development, ongoing management and the roadmaps of all Odessa products. He also leads the dedicated Research and Development department that drives all technological innovation at the company. Passionate about solution architecture, Jeba champions innovation that is impactful and scalable. He joined the company in 2003, and prior to that deployed some of the largest portals built for the Indian market at India Internet Media.',
			// 	'experience'	=> '20 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/jeba-singh-9904a6b8/',
			// 	)
			// ),
			// array(
			// 	'name'			=> 'Kevin Schroeder',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/kevin-schroeder.jpg',
			// 	'title'			=> 'SVP, Delivery Design',
			// 	'description'	=> 'Kevin is Odessa’s SVP, Delivery Design, leading the Delivery organization in the Americas in strategic initiatives and complex, enterprise implementations. He is passionate about process and performance, driving excellence in Odessa’s implementation methodology. Prior to joining Odessa in 2003, Kevin led the development of models for Fortune 500 companies at PriceWaterhouseCoopers to optimize patent-spend and R&D efforts. He has also previously consulted for various national companies and sports franchises in auditing their capital expenses and budgets. He holds a Bachelor of Science in Mathematical Economics from Haverford College.',
			// 	'experience'	=> '18 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/kevin-schroeder-8a580a/',
			// 	)
			// ),
			
			
		
			// array(
			// 	'name'			=> 'Vedapuri Ramanathan',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/vedapuri-ramanathan.jpg',
			// 	'title'			=> 'SVP, Delivery and Services Development',
			// 	'description'	=> 'Veda is Odessa’s SVP of Delivery and Services Development, responsible for excellence in systems implementation and customer-focused product development. He is driven by engineering and operational excellence as well as building efficient teams that scale. Prior to joining in 2004, Veda gained experience as an engineer with TCG Software Services, a leading services company in India. He holds a Bachelor of Science in Electronics and a Master’s in Computer Applications from Bharathiar University.',
			// 	'experience'	=> '18 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/vedapuri-ayalur-ramanathan-27606b2/',
			// 	)
			// ),
			// array(
			// 	'name'			=> 'Bobbie Warner',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/bobbie-warner.jpg',
			// 	'title'			=> 'SVP, Delivery Management',
			// 	'description'	=> 'Bobbie is an SVP, Delivery Management at Odessa, and has been leading our portfolio of customers through the full implementation lifecycle since 2015. A seasoned customer advocate, Bobbie is passionate about customer success and doesn’t shy away from complex projects. She holds several leasing and project certifications including CLFP, PMP and CSM, has a Master of Business Administration from the University of Hartford and a Bachelor of Science in communications from St. Norbert College.',
			// 	'experience'	=> '9 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/bobbiewarner/',
			// 	)
			// ),
			// array(
			// 	'name'			=> 'Michael Nyman',
			// 	'thumbnail'		=> base_url() .'assets/images/leadership/michae-inyman.jpg',
			// 	'title'			=> 'SVP, Delivery Management',
			// 	'description'	=> 'Michael is an SVP, Delivery Management at Odessa, responsible for large scale global programs at Odessa since 2018. He uses technology to solve business issues and streamline operations and is passionate about capitalizing on business acumen to ensure customer success. He started his career at HP Financial Services, where he worked for ten years in various roles, later spending seven years at CIT overseeing all leasing platforms. He holds a Bachelor of Science in Accounting from Barton College.',
			// 	'experience'	=> '23 Years in Leasing',
			// 	'social'		=> array(
			// 		'linkedin'	=> 'https://www.linkedin.com/in/michael-nyman-59433a21/',
			// 	)
			// ),
			array(
				'name'			=> 'Scott Frymire',
				'thumbnail'		=> base_url() .'assets/images/leadership/scott.png',
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
