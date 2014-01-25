<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-19 08:07:47 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php:67
2013-12-19 08:07:47 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\OpenServer\domains\localhost\mitskevich\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php:67
2013-12-19 08:07:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php:67
2013-12-19 08:07:50 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\OpenServer\domains\localhost\mitskevich\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Cookie.php:67
2013-12-19 08:25:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Parent' not found ~ APPPATH\classes\Controller\Static.php [ 7 ] in file:line
2013-12-19 08:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-19 09:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\classes\Controller\Static.php [ 18 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:30:10 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:30:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\classes\Controller\Static.php [ 18 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:30:11 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:30:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\classes\Controller\Static.php [ 18 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:30:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 18, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:18
2013-12-19 09:53:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete maintext model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:33
2013-12-19 09:53:03 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php(33): Kohana_ORM->delete()
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Static->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Static.php:33
2013-12-19 10:13:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:13:37 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:13:42 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:13:42 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:13:59 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:13:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:00 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:00 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:13 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:13 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:38 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 955 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955
2013-12-19 10:14:38 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_Core::error_handler(8, 'Array to string...', 'C:\OpenServer\d...', 955, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php:955