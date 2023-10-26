<?php
defined('BASEPATH') or exit('No direct script access allowed');

/****************************************
 * Frontend Panel Routes
 ***************************************/
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['services/(:any)'] = 'HomeController/services/$1';
$route['blog'] = 'HomeController/blogs';
$route['blog/(:any)'] = 'HomeController/showblogs/$1';



/****************************************
 * Admin Panel Routes
 ***************************************/
$route['admin'] = 'AdminController/index';
$route['admin/blogs'] = 'AdminController/blogs';
$route['admin/create-blogs'] = 'AdminController/create_blogs';
$route['admin/revise-blog/(:num)'] = 'AdminController/revise_blog/$1';

$route['(:any)'] = 'HomeController/pages/$1';
