<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-26 08:32:28 --- CRITICAL: View_Exception [ 0 ]: The requested view auth/v_reg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-26 08:32:28 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth/v_reg')
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth/v_reg', NULL)
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\auth\Auth.php(12): Kohana_View::factory('auth/v_reg')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Auth_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-26 08:33:03 --- CRITICAL: View_Exception [ 0 ]: The requested view auth/v_reg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-26 08:33:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(137): Kohana_View->set_filename('auth/v_reg')
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(30): Kohana_View->__construct('auth/v_reg', NULL)
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\auth\Auth.php(12): Kohana_View::factory('auth/v_reg')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Auth_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php:137
2013-12-26 09:00:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cath' (T_STRING), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\auth\Auth.php [ 23 ] in file:line
2013-12-26 09:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:00:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cath' (T_STRING), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\auth\Auth.php [ 23 ] in file:line
2013-12-26 09:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:01:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\auth\Auth.php [ 28 ] in file:line
2013-12-26 09:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:01:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\auth\Auth.php [ 30 ] in file:line
2013-12-26 09:01:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:02:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'cath' (T_STRING), expecting catch (T_CATCH) ~ APPPATH\classes\Controller\auth\Auth.php [ 23 ] in file:line
2013-12-26 09:02:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:02:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\auth\Auth.php [ 34 ] in file:line
2013-12-26 09:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 09:03:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function create_user() on a non-object ~ APPPATH\classes\Controller\auth\Auth.php [ 18 ] in file:line
2013-12-26 09:03:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 10:29:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\auth\Auth.php [ 35 ] in file:line
2013-12-26 10:29:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 10:30:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: submit ~ APPPATH\classes\Controller\auth\Auth.php [ 34 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\auth\Auth.php:34
2013-12-26 10:30:06 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\auth\Auth.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 34, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Auth_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth_Auth))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\auth\Auth.php:34
2013-12-26 10:30:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH\views\auth\v_login.php [ 39 ] in file:line
2013-12-26 10:30:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-26 10:31:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ':' ~ APPPATH\views\auth\v_login.php [ 39 ] in file:line
2013-12-26 10:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line