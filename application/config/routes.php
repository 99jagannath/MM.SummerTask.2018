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
$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/get/article/id/(:num)'] = 'api/getarticlebyid/$1';
$route['api/get/article/catagory/(:any)'] = 'api/getarticlebytag/$1';
$route['api/get/article/publishdate/(:any)'] = 'api/getarticlebypublishdate/$1';
//date should be in yyyy-mm-dd formart
$route['api/get/article/author/(:any)'] = 'api/getarticlebyauthor/$1';
$route['api/get/article/title/(:any)'] = 'api/getarticlebytitle/$1';
$route['api/search/(:any)'] = 'api/search/$1';
$route['api/get/article/picofweek/(:any)'] = 'api/getarticlebytag/$1';
$route['api/get/article/mainpost/(:any)'] = 'api/getarticlebytag/$1';
$route['api/get/poll/(:num)'] = 'api/getpoll/$1';
$route['api/get/poll/submit/date/(:any)'] =  'api/getpollanswer/$1';
//date should be in yyyy-mm-dd formart
$route['api/get/comment/article/id/(:num)'] = 'api/getcommentbyaticleid/$1';
$route['api/get/comment/article/title/(:any)'] = 'api/getcommentbyaticletitle/$1';
$route['api/get/comment/article/tag/(:any)'] =  'api/getcommentbyaticletag/$1';
$route['api/get/comment/user/(:any)'] = 'api/getcommentbyuser/$1';
$route['api/get/comment/reply/member/(:any)'] = 'api/getreplybymember/$1';
$route['api/get/comment/user/(:num)/(:any)'] = 'api/getpcommentbyuser/$1/$2';
//here :num=article id and :any=commenting user
$route['api/get/comment/reply/member/(:num)/(:any)'] = 'api/getpreplybymember/$1/$2';
//here :num=article id and :any=commenting user
$route['api/user/signup/username/(:any)'] = 'api/getuserbyname/$1';
$route['api/user/signup/status/(:num)'] = 'api/getuserbystatus/$1';
$route['api/alluser'] = 'api/getalluser';
$route['api/current/test/question/(:num)'] = 'api/getquestion/$1';
$route['api/test/participant/date/(:any)'] = 'api/getparticipant/$1';
$route['api/question/date/(:any)'] = 'api/getquestionbydate/$1';
$route['api/comment/submit'] = 'api/comment_submit';
$route['api/signup'] = 'api/signup';
$route['api/poll/vote'] = 'api/poll';
