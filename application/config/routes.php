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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Login'] = 'C_Login';

//customer
$route['Customer'] = 'C_Customer';
$route['Customer-add'] = 'C_Customer/add';
$route['Customer-edit/(:any)'] = 'C_Customer/edit/$1';
$route['Customer-view/(:any)'] = 'C_Customer/view/$1';

//tipeuser
$route['Tipeuser'] = 'C_Tipeuser';
$route['Tipeuser-edit/(:any)'] = 'C_Tipeuser/edit/$1';

//dept
$route['Dept'] = 'C_Dept';
$route['Dept-edit/(:any)'] = 'C_Dept/edit/$1';

//staf
$route['User'] = 'C_User';
$route['User-add'] = 'C_User/add';
$route['User-edit/(:any)'] = 'C_User/edit/$1';
$route['User-view/(:any)'] = 'C_User/view/$1';

//jenispekerjaan
$route['Jenispekerjaan'] = 'C_MPekerjaan';
$route['Jenispekerjaan-edit/(:any)'] = 'C_MPekerjaan/edit/$1';