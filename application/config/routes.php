<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login'] = 'auth';
$route['logout'] = 'auth/logout';

$route['rawat-jalan'] = 'rawatjalan';
$route['rawat-jalan/tambah'] = 'rawatjalan/tambah';
$route['rawat-jalan/menunggu/(:num)'] = 'rawatjalan/menunggu/$1';
$route['rawat-jalan/diperiksa/(:num)'] = 'rawatjalan/diperiksa/$1';
$route['rawat-jalan/selesai/(:num)'] = 'rawatjalan/selesai/$1';
$route['rawat-jalan/ubah/(:num)'] = 'rawatjalan/ubah/$1';
$route['rawat-jalan/hapus/(:num)'] = 'rawatjalan/hapus/$1';
