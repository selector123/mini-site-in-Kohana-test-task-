<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-26 15:58:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\main.php [ 75 ] in file:line
2017-09-26 15:58:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:01:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function param() on string ~ APPPATH\classes\Model\news.php [ 32 ] in file:line
2017-09-26 16:01:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:02:37 --- CRITICAL: ErrorException [ 1 ]: Call to a member function param() on string ~ APPPATH\classes\Model\news.php [ 32 ] in file:line
2017-09-26 16:02:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:03:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Delete::from() ~ APPPATH\classes\Model\news.php [ 31 ] in file:line
2017-09-26 16:03:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:06:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: sql ~ APPPATH\classes\Model\news.php [ 32 ] in C:\wamp\www\application\classes\Model\news.php:32
2017-09-26 16:06:12 --- DEBUG: #0 C:\wamp\www\application\classes\Model\news.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 32, Array)
#1 C:\wamp\www\application\classes\Controller\main.php(72): Model_News->delete_news('5')
#2 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\application\classes\Model\news.php:32
2017-09-26 16:06:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:06:30 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:07:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: navbar ~ APPPATH\views\v_index.php [ 25 ] in C:\wamp\www\application\views\v_index.php:25
2017-09-26 16:07:27 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 25, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:25
2017-09-26 16:08:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_index.php [ 33 ] in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:08:27 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 33, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:16:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\main.php [ 71 ] in C:\wamp\www\application\classes\Controller\main.php:71
2017-09-26 16:16:49 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\main.php(71): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 71, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\main.php:71
2017-09-26 16:17:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 74 ] in file:line
2017-09-26 16:17:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:19:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:19:32 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:19:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 74 ] in file:line
2017-09-26 16:19:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:23:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:23:40 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:27:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:27:16 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:31:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\views\v_editpostscontent.php [ 12 ] in C:\wamp\www\application\views\v_editpostscontent.php:12
2017-09-26 16:31:53 --- DEBUG: #0 C:\wamp\www\application\views\v_editpostscontent.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 12, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\wamp\www\application\views\v_index.php(33): Kohana_View->__toString()
#5 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#6 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#7 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#11 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\application\views\v_editpostscontent.php:12
2017-09-26 16:35:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_index.php [ 33 ] in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:35:54 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 33, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:36:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_index.php [ 33 ] in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:36:15 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 33, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:38:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\v_index.php [ 33 ] in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:38:56 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 33, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:33
2017-09-26 16:44:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:44:52 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:46:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 71 ] in file:line
2017-09-26 16:46:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:47:34 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\wamp\www\system\classes\Kohana\URL.php:144
2017-09-26 16:47:34 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\wamp\www\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('/', true, true)
#2 C:\wamp\www\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(127): Kohana_HTTP::redirect('/', 302)
#4 C:\wamp\www\application\classes\Controller\main.php(71): Kohana_Controller::redirect('/')
#5 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#8 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\system\classes\Kohana\URL.php:144
2017-09-26 16:53:08 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in C:\wamp\www\system\classes\Kohana\URL.php:144
2017-09-26 16:53:08 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, true)
#1 C:\wamp\www\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('/', true, true)
#2 C:\wamp\www\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('/')
#3 C:\wamp\www\application\classes\Controller\main.php(71): Kohana_HTTP::redirect('/', 302)
#4 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\system\classes\Kohana\URL.php:144
2017-09-26 16:53:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 71 ] in file:line
2017-09-26 16:53:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-26 16:54:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-26 16:54:15 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
#1 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#2 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#3 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\application\views\v_index.php:19