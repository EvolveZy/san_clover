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
$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['_admin/login'] = "_admin/login";
$route['_admin/index'] = "_admin/index";
$route['_admin/product_save'] = "_admin/index/product_save";
$route['_admin/product_edit/([0-9]+)'] = "_admin/index/product_edit/$1";
$route['_admin/product_edit'] = "_admin/index/product_edit";
$route['_admin/product_delete'] = "_admin/index/product_delete";
$route['_admin/categories'] = "_admin/index/categories";
$route['_admin/get_product_category'] = "_admin/index/get_product_category";
$route['_admin/category_delete'] = "_admin/index/category_delete";
$route['_admin/category_edit_save'] = "_admin/index/category_edit_save";
$route['_admin/category_save'] = "_admin/index/category_save";
$route['_admin/homepage'] = "_admin/index/home_page";
$route['_admin/home_page_save'] = "_admin/index/home_page_save";