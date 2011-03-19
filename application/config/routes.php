<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "friends";
$route['404_override'] = "";

$route['settings'] = "settings";
$route['settings/(:any)'] = "settings/$1";
$route['auth'] = "auth";
$route['auth/(:any)'] = "auth/$1";
$route['welcome'] = "welcome";
$route['welcome/(:any)'] = "welcome/$1";
$route['logout'] = "logout";
$route['logout/(:any)'] = "logout/$1";
$route['home'] = "home";
$route['home/(:any)'] = "home/$1";
$route['profile'] = "profile";
$route['profile/(:any)'] = "profile/$1";
$route['workouts'] = "workouts";
$route['workouts/(:any)'] = "workouts/$1";
$route['friends'] = "friends";
$route['friends/(:any)'] = "friends/$1";


$route['(:any)/(:any)'] = "friends/index";

$route['(:any)'] = "profile/user/$1";





/* End of file routes.php */
/* Location: ./application/config/routes.php */