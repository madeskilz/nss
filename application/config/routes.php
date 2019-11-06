<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'maintenance';
$route['about'] = 'home/about';
$route['support'] = 'home/support';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['404_override'] = 'custom404';
$route['translate_uri_dashes'] = FALSE;
