<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-16 09:19:27 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\Adminka\Main.php [ 91 ] in file:line
2014-01-16 09:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\OpenServer\d...', 91, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php(91): rand(1, '0123456789abcde...')
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\News.php(77): Controller_Adminka_Main->_upload_img('C:\OpenServer\u...')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Adminka_News->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-16 09:20:59 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\Adminka\Main.php [ 91 ] in file:line
2014-01-16 09:20:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\OpenServer\d...', 91, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php(91): rand(1, '0123456789abcde...')
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\News.php(77): Controller_Adminka_Main->_upload_img('C:\OpenServer\u...')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Adminka_News->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-16 09:21:46 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\classes\Controller\Adminka\Main.php [ 91 ] in file:line
2014-01-16 09:21:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\OpenServer\d...', 91, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php(91): rand(1, '0123456789abcde...')
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\News.php(77): Controller_Adminka_Main->_upload_img('C:\OpenServer\u...')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Adminka_News->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-16 09:22:30 --- CRITICAL: ErrorException [ 2 ]: rand() expects parameter 2 to be long, string given ~ APPPATH\classes\Controller\Adminka\Main.php [ 91 ] in file:line
2014-01-16 09:22:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rand() expects ...', 'C:\OpenServer\d...', 91, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php(91): rand(1, 'abcdefg')
#2 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\News.php(77): Controller_Adminka_Main->_upload_img('C:\OpenServer\u...')
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Adminka_News->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-01-16 09:23:59 --- CRITICAL: Kohana_Exception [ 0 ]: Directory must be writable:  ~ MODPATH\image\classes\Kohana\Image.php [ 631 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php:95
2014-01-16 09:23:59 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php(95): Kohana_Image->save('media/uploads/5...')
#1 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\News.php(77): Controller_Adminka_Main->_upload_img('C:\OpenServer\u...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Adminka_News->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Adminka\Main.php:95
2014-01-16 09:35:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: image ~ APPPATH\views\adminka\v_news.php [ 6 ] in C:\OpenServer\domains\localhost\mitskevich\application\views\adminka\v_news.php:6
2014-01-16 09:35:35 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\views\adminka\v_news.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 6, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\localhost\mitskevich\application\views\adminka\v_main.php(351): Kohana_View->__toString()
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adminka_News))
#11 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\localhost\mitskevich\application\views\adminka\v_news.php:6
2014-01-16 10:25:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: CKEditorFuncNum ~ APPPATH\classes\Controller\Libs.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:25:01 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Libs->action_ckupload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libs))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:25:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: CKEditorFuncNum ~ APPPATH\classes\Controller\Libs.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:25:02 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Libs->action_ckupload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libs))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:25:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: CKEditorFuncNum ~ APPPATH\classes\Controller\Libs.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:25:14 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Libs->action_ckupload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libs))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:26:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: CKEditorFuncNum ~ APPPATH\classes\Controller\Libs.php [ 11 ] in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11
2014-01-16 10:26:15 --- DEBUG: #0 C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\OpenServer\d...', 11, Array)
#1 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Controller.php(84): Controller_Libs->action_ckupload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Libs))
#4 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\localhost\mitskevich\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\localhost\mitskevich\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\localhost\mitskevich\application\classes\Controller\Libs.php:11