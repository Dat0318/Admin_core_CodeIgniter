<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'admin/dashboard';

// route for front end example from cktc project

/*Route post*/
$route['^(\w{2})/(:any)-c(:num)'] 							= 'news/category/$3';
$route['^(\w{2})/(:any)-c(:num)/page/(:num)'] 	= 'news/category/$3/$4';
$route['^(\w{2})/(:any)-d(:num)'] 							= 'news/detail/$3';
/*Route post*/
/* Route Job */
$route['^(\w{2})/(:any)-cc(:num)'] 							= 'career/category/$3';
$route['^(\w{2})/(:any)-cc(:num)/page/(:num)']	= 'career/category/$3/$4';
$route['^(\w{2})/(:any)-ccd(:num)'] 						= '/career/detail/$3';
/* Route Job */

/*Route event*/
$route['^(\w{2})/(:any)-ce(:num)'] 							= 'event/category/$3';
$route['^(\w{2})/(:any)-ce(:num)/page/(:num)']	= 'event/category/$3/$4';
$route['^(\w{2})/(:any)-e(:num)'] 							= 'event/detail/$3/';

/* Route search */
$route['^(\w{2})/search/(:any)']   							= 'search/index/$2';
$route['^(\w{2})/search/(:any)/page/(:num)']  	= 'search/index/$2/$3';
// $route['search'] = 'course/search/';
/* Route search*/
$route['^(\w{2})/(:any).html'] 									= 'page/index/$2';
$route['^(\w{2})/(:any)'] 											= 'page/index/$2';
$route['^(\w{2})/(:any)/(:num)'] 								= 'page/index/$2/$3';
/* End routes languages*/


/* Routes default*/
$route['(:any)-c(:num)'] 												= 'news/category/$2';
$route['(:any)-c(:num)/page/(:num)'] 						= 'news/category/$2/$3';
$route['(:any)-d(:num)'] 												= 'news/detail/$2/';
/*Route post*/

/* Route Job */
$route['(:any)-cc(:num)'] 											= 'career/category/$2';
$route['(:any)-cc(:num)/page/(:num)'] 					= 'career/category/$2/$3';
$route['(:any)-ccd(:num)'] 											= '/career/detail/$2';
/* Route Job */

/*Route event*/
$route['(:any)-ce(:num)']								 				= 'Event/category/$2';
$route['(:any)-ce(:num)/page/(:num)'] 					= 'Event/category/$2/$3';
$route['(:any)-e(:num)'] 												= 'event/detail/$2/';
$route['image'] = 'Image/index';
/* Route search */
$route['search']   				        							= 'search/index';
// $route['search'] = 'course/search/';
/* Route search*/
$route['(:any).html'] 													= 'page/index/$1';
$route['(:any)'] 																= 'page/index/$1';
$route['(:any)/(:num)'] 												= 'page/index/$1/$2';

/*End Routes default*/
$route['auth/activate/(:num)/(:num)'] 					= 'auth/activate/$1/$2';
