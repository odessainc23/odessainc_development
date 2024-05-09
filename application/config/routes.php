<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['cloud.amp.html'] = 'Cloud_amp';
$route['home.amp.html'] = 'Home_amp';
$route['dev.amp.html'] = 'Dev_amp';
$route['platform.amp.html'] = 'Platform_amp';
$route['news.amp.html'] = 'News_amp';
$route['design.amp.html'] = 'Design_amp';
$route['letstalk.amp.html'] = 'Letstalk_amp';
$route['company.amp.html'] = 'company_amp';
$route['platform/core.amp.html'] = 'platform_amp/core';
$route['careers.amp.html'] = 'Careers_amp';
$route['turns22.amp.html'] = 'home/turns22';
$route['xaas-everything-as-a-service.amp.html'] = 'xaas_amp/xaas';
$route['newsroom/announcements'] = 'newsroom/announcements';
$route['privacy-policy'] = 'welcome/privacy_policy';
// $route['odessa-modern-slavery-act-statement'] = 'welcome/odessa-modern-slavery-act-statement';

$route['lets-talk'] = 'welcome/lets_talk_primary';
$route['get-started'] = 'welcome/lets_talk_secondary';
$route['terms-of-use'] = 'welcome/terms_condition';
$route['legal/confidential-terms'] = 'home/confidential_terms';
$route['legal/privacy-policy'] = 'welcome/privacy_policy';
$route['cocktail-registration'] = 'Cocktail';
$route['cocktail-registration-thankyou'] = 'Cocktailthank';
$route['turns22'] = 'home/turns22';
// $route['auto-finance-software'] = 'Automotive_amp';
$route['our-people'] = 'Our_amp';
$route['handbook/next-gen-auto-finance-platform'] = 'Auto_handbook';
$route['handbook/next-gen-auto-finance-platform-thankyou'] = 'Auto_thank';
$route['handbook/cx-asset-finance'] = 'Ebook';
$route['handbook/cx-asset-finance-thankyou'] = 'Ebook_thank';
$route['virtual-wine-table-registration'] = 'Virtual';
$route['virtual-wine-table-registration/thankyou'] = 'Winethank';
$route['automotive-finance-software'] = 'Redirect_amp';
$route['auto-finance-software'] = 'Auto_amp';
$route['auto-finance-news'] = 'Redirect_news';
$route['whitepaper/future-ready-asset-finance-api'] = 'Api_amp';
$route['whitepaper/future-ready-asset-finance-api-thankyou'] = 'Thankyou_api';
$route['whitepaper/unlocking-xaas-success-signup'] = 'Whitepaper_amp';
$route['whitepaper/unlocking-xaas-transformative-insights-asset-finance'] = 'Whitepaper';
$route['whitepaper/unlocking-xaas-thankyou'] = 'Thankyou_whitepaper';
$route['odessa-modern-slavery-act-statement'] = 'Modern_amp';
$route['xaas-everything-as-a-service'] = 'platform/xaas';
$route['design-principles'] = 'welcome/design_principles';
$route['platform/developer-tools'] = 'platform/build';
$route['lets-talk/thankyou.html'] = 'thankyou/index';
$route['get-started/thankyousecondary'] = 'thankyou/thankusecondary';
$route['pagenotfound.html'] = 'my404';
$route['default_controller'] = 'home';
$route['404_override'] = 'welcome';
$route['translate_uri_dashes'] = FALSE;