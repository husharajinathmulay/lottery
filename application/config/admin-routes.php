<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['admin/login-action'] = 'Login/login_action';
$route['admin/logout'] = 'Login/logout';
#Cms
$route['admin/dashboard'] = 'admin/Cn_dashboard';

$route['admin/district-list'] = 'admin/Cn_district_list';

// home page
$route['admin/home'] = 'admin/Cn_home';

# city Master
// $route['admin/state'] = 'admin/master/Cn_state/index';
// $route['admin/city'] = 'admin/master/Cn_city/index';

# Master
$route['admin/master/game_master'] = 'admin/master/Cn_game_master';
$route['admin/master/game_master/(:any)'] = 'admin/master/Cn_game_master/$1';
$route['admin/master/game_action'] = 'admin/master/Cn_game_master/game_action';
$route['admin/master/change-game-status/(:any)/(:any)'] = 'admin/master/Cn_game_master/change_game_status/$1/$2';
$route['admin/master/delete-game/(:any)'] = 'admin/master/Cn_game_master/delete_game/$1';

# Sub Users
$route['admin/sub-users/users'] = 'admin/sub-users/Cn_users';
$route['admin/sub-users/add_sub_user'] = 'admin/sub-users/Cn_add_sub_user/add_cms';
$route['admin/sub-users/add_sub_user/(:any)'] = 'admin/sub-users/Cn_add_sub_user/add_cms/$1';

$route['admin/sub-users/add_sub_action'] = 'admin/sub-users/Cn_add_sub_user/add_sub_action';
$route['admin/change-sub-status/(:any)/(:any)'] = 'admin/sub-users/Cn_add_sub_user/change_sub_status/$1/$2';

$route['admin/sub-users/view_user_details/(:any)'] = 'admin/sub-users/Cn_view_user_details/users/$1';
$route['admin/sub-users/edit_sub_user'] = 'admin/sub-users/Cn_edit_sub_user';
// Game Result
$route['admin/game_result'] = 'admin/Cn_game_result';
$route['game-change'] = 'admin/Cn_game_result/game_change';
$route['admin/game-result-actions'] = 'admin/Cn_game_result/game_result_actions';
$route['admin/game-results'] = 'admin/Cn_game_result/game_results';
$route['admin/game-resultss'] = 'admin/Cn_game_result/get_result_table_data';

//$route['game-results'] = 'admin/Cn_game_result/game_results';



# Cms
$route['admin/cms'] = 'admin/Cn_cms/cms';

//settings
$route['admin/general-settings'] = 'admin/Cn_settings/cn_general_settings';
$route['admin/email-settings'] = 'admin/Cn_settings/cn_email_settings';
$route['admin/visual-settings'] = 'admin/Cn_settings/cn_visual_settings';
$route['admin/social-login-settings'] = 'admin/Cn_settings/cn_social_login_settings';

$route['admin/user-administration-setting-action'] = 'admin/Cn_settings/change_passworde';

$route['admin/system-logs'] = 'admin/Cn_forgot/adminarea';
$route['admin/forgot-password'] = 'admin/Cn_forgot/forgot_password';
$route['admin/otp'] = 'admin/Cn_forgot/otp';
$route['admin/reset-password'] = 'admin/Cn_forgot/reset_password';
$route['admin/dashboard'] = 'admin/Cn_forgot/dashboard';
$route['admin/change-password'] = 'admin/Cn_forgot/change_password';
$route['admin/verify-otp'] = 'admin/Cn_forgot/forgot_action';
$route['admin/forgot-password/otp'] = 'admin/Cn_forgot/otp';
$route['admin/reset-passwords'] = 'admin/Cn_forgot/otp_action';
$route['admin/check-email'] = 'admin/Cn_forgot/check_email';
$route['admin/reset-password-action'] = 'admin/Cn_forgot/reset_password_action';
