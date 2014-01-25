<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-17 08:23:46 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-17 08:23:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Base.php(7): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-17 08:45:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Base.php [ 12 ] in file:line
2013-12-17 08:45:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 08:45:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\conf.php [ 4 ] in file:line
2013-12-17 08:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 08:45:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\config\conf.php [ 4 ] in file:line
2013-12-17 08:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:08:00 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:11
2013-12-17 09:08:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(11): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:11
2013-12-17 09:08:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:11
2013-12-17 09:08:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(11): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:11
2013-12-17 09:19:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:19:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:19:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 09:20:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\views\v_base.php [ 11 ] in file:line
2013-12-17 09:20:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:02:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\Controller\Base.php [ 73 ] in file:line
2013-12-17 10:02:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:03:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\v_base.php [ 1104 ] in file:line
2013-12-17 10:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:03:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endif' (T_ENDIF) ~ APPPATH\views\v_base.php [ 1104 ] in file:line
2013-12-17 10:03:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:18:18 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Base.php [ 79 ] in file:line
2013-12-17 10:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:18:19 --- CRITICAL: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\Controller\Base.php [ 79 ] in file:line
2013-12-17 10:18:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:31:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:32:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:32:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:33:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:33:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:33:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:34:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:34:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:35:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2013-12-17 10:35:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:36:15 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-17 10:36:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\widgets\Menu.php(6): Kohana_Controller_Template->before()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(69): Controller_Widgets_Menu->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widgets_Menu))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-17 10:40:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\widgets\Menu.php [ 8 ] in file:line
2013-12-17 10:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:40:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\widgets\Menu.php [ 8 ] in file:line
2013-12-17 10:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-17 10:40:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\widgets\Menu.php [ 8 ] in file:line
2013-12-17 10:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line