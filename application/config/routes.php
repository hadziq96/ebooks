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
$route['default_controller'] = 'guest';
$route['404_override'] = 'page/not_found';
$route['translate_uri_dashes'] = FALSE;
// admin page
// for book
$route['admin']='admin/book';
$route['admin/book/edit/(:any)']='admin/book/edit/$1';
$route['admin/book/confirm/(:any)']='admin/book/confirm/$1';
$route['admin/book/delete/(:any)']='admin/book/delete/$1';
// for part
$route['admin/book/part/(:any)']='admin/part/index/$1';
$route['admin/part/add/(:any)']='admin/part/add/$1';
$route['admin/part/edit/(:any)']='admin/part/edit/$1';
$route['admin/part/confirm/(:any)']='admin/part/confirm/$1';
$route['admin/part/delete/(:any)']='admin/part/delete/$1';
// guest page
// pagination 12 november
$route['book']='guest';
$route['book/page']='guest/index';
$route['book/page/(:num)']='guest/index/$1';

// search book 14 november
$route['book/search']='guest/search';
$route['book/search/([A-Za-z]+)']='guest/search/$1';
$route['book/search/([A-Za-z]+)/(:num)']='guest/search/$1/$2';

// not found
$route['book/not_found']='page/not_found';

$route['book/(:any)']='guest/book/$1';
$route['part/(:any)']='guest/part/$1';