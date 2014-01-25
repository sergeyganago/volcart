<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-24 09:10:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\News.php [ 16 ] in file:line
2013-12-24 09:10:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 09:11:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\New.php [ 11 ] in file:line
2013-12-24 09:11:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 09:12:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\News.php [ 16 ] in file:line
2013-12-24 09:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 09:23:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:23:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:24:05 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:24:05 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:24:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:24:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:25:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:25:07 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:26:58 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:26:58 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:27:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Comment.php [ 11 ] in file:line
2013-12-24 09:27:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 09:28:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:28:21 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:28:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:28:46 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$comments ~ APPPATH\views\templates\v_news.php [ 8 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:29:27 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\OpenServer\d...', 8, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\v_base.php(955): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\templates\v_news.php:8
2013-12-24 09:29:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Comment.php [ 11 ] in file:line
2013-12-24 09:29:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 09:30:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Model\Comment.php [ 11 ] in file:line
2013-12-24 09:30:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-24 10:08:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Answer.php [ 20 ] in file:line
2013-12-24 10:08:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line