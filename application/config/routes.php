<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['products'] = 'home/index';
$route['cart'] = 'cart/index';
$route['default_controller'] = 'home/index';
$route['(:any)'] = '$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
