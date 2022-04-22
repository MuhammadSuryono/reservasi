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

// Auth
$route['login'] = 'Auth/login';
$route['auth/login/check']['post'] = 'Auth/postLogin';
$route['logout'] = 'Logout/authLogout';

$route['reservasi'] = 'user/exam/index';
$route['peserta'] = 'user/exam/peserta';
$route['exam/session/check']['post'] = 'user/exam/session_access_check';
$route['exam/start/(:any)'] = 'user/exam/exam_sample/$1';
$route['exam/init-session'] = 'user/exam/exam_set_session_start';
$route['exam/register/(:any)'] = 'user/exam/register_form/$1';
$route['exam/register/resume/(:any)'] = 'user/exam/resume_register/$1';
$route['exam/resume/(:any)'] = 'user/exam/resume_exam/$1';

$route['exam/register/participant/user'] = 'user/exam/register_peserta';
$route['exam/register/finish/user/submit'] = 'user/exam/finish_register';
$route['exam/section/(:any)'] = 'user/exam/section/$1';
$route['exam/start'] = 'user/exam/start_exam';
$route['exam/finish'] = 'user/exam/finish_exam';
$route['exam/logout'] = 'user/exam/logout';
$route['exam/result/check'] = 'user/exam/check_exam_result';
$route['exam/result'] = 'user/exam/result_exam_page';

$route['admin'] = 'admin/dashboard';
$route['admin/session'] = 'admin/UserSession';
$route['admin/session/create']['post'] = 'admin/UserSession/postCreate';
$route['admin/session/delete/(:any)']['delete'] = 'admin/UserSession/deleteSession/$1';
$route['admin/session/(:any)']['post'] = 'admin/UserSession/editSession/$1';
$route['admin/user/create']['post'] = 'admin/User/postCreate';
$route['admin/user/session'] = 'admin/User/listUserSession';

$route['admin/category'] = 'admin/Category';
$route['admin/category/create']['post'] = 'admin/Category/postCreate';
$route['admin/category/delete/(:any)']['delete'] = 'admin/Category/deleteCategory/$1';
$route['admin/category/(:any)']['post'] = 'admin/Category/editCategory/$1';

$route['admin/packet'] = 'admin/packet';
$route['admin/packet/create']['post'] = 'admin/packet/postCreate';
$route['admin/packet/edit/(:any)']['post'] = 'admin/packet/updatePacket/$1';
$route['admin/packet/delete/(:any)']['delete'] = 'admin/packet/deletePacket/$1';
$route['admin/packet/(:any)/(:any)'] = 'admin/packet/publish/$1/$2';

$route['admin/question/packet/(:any)'] = 'admin/Question/index/$1';
$route['admin/question/create']['post'] = 'admin/Question/postCreate';
$route['admin/question/edit/(:any)']['post'] = 'admin/Question/updateList/$1';
$route['admin/question/delete/(:any)']['delete'] = 'admin/Question/deleteListQuestion/$1';
$route['admin/question/(:any)'] = 'admin/Question/createQuestionPage/$1';
$route['admin/question/(:any)/(:any)'] = 'admin/Question/publish/$1/$2';

$route['admin/group-question/create']['post'] = 'admin/Question/groupCreate';
$route['admin/group-question/update/(:any)']['post'] = 'admin/Question/groupEdit/$1';
$route['admin/group-question/delete/(:any)']['post'] = 'admin/Question/deleteGroup/$1';

$route['admin/exam-question/create']['post'] = 'admin/Question/examCreate';
$route['admin/exam-question/edit/(:any)']['post'] = 'admin/Question/examEdit/$1';

$route['admin/setting/announcement'] = 'admin/Setting/announcement';
$route['admin/setting/announcement/create']['post'] = 'admin/Setting/createTemplate';
$route['admin/setting/announcement/edit/(:any)']['post'] = 'admin/Setting/updateTemplate/$1';
$route['admin/setting/announcement/delete/(:any)']['delete'] = 'admin/Setting/deleteTemplate/$1';

$route['exam/sertificate/(:any)'] = 'user/sertificate/get_sertificate/$1';
$route['exam/sertificate/html/(:any)'] = 'user/sertificate/get_sertificate_html/$1';
$route['admin/peserta/sesi'] = 'admin/UserSession/listSessionPeserta';

$route['user/report']['post'] = 'user/whatsapp/sendMessage';