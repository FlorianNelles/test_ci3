<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['language/german'] = 'language/german';
$route['language/english'] = 'language/english';
$route['posts/edit/(:any)'] = 'posts/edit/$1';	
$route['posts/delete/(:any)'] = 'posts/delete/$1';
$route['posts/create'] = 'posts/create';
$route['posts/read/(:any)'] = 'posts/read/$1';
$route['posts'] = 'posts/index';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

