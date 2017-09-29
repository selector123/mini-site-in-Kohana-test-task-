<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2017-09-28 01:50:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-28 01:50:45 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
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
2017-09-28 01:52:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 71 ] in file:line
2017-09-28 01:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 01:53:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 71 ] in file:line
2017-09-28 01:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 01:57:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\main.php [ 71 ] in file:line
2017-09-28 01:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 02:04:53 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Model_News::delete_news(), called in C:\wamp\www\application\classes\Controller\main.php on line 72 and defined ~ APPPATH\classes\Model\news.php [ 29 ] in C:\wamp\www\application\classes\Model\news.php:29
2017-09-28 02:04:53 --- DEBUG: #0 C:\wamp\www\application\classes\Model\news.php(29): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\app...', 29, Array)
#1 C:\wamp\www\application\classes\Controller\main.php(72): Model_News->delete_news()
#2 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\application\classes\Model\news.php:29
2017-09-28 02:05:24 --- CRITICAL: View_Exception [ 0 ]: The requested view deletecontent could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\system\classes\Kohana\View.php:145
2017-09-28 02:05:24 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('deletecontent')
#1 C:\wamp\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('deletecontent', NULL)
#2 C:\wamp\www\application\classes\Controller\main.php(76): Kohana_View::factory('deletecontent')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\system\classes\Kohana\View.php:145
2017-09-28 02:34:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ']' ~ APPPATH\classes\Controller\main.php [ 95 ] in file:line
2017-09-28 02:34:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 02:34:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::edit_news() ~ APPPATH\classes\Controller\main.php [ 91 ] in file:line
2017-09-28 02:34:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 02:36:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:36:22 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\mod...', 48, Array)
#1 C:\wamp\www\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\wamp\www\application\views\v_editpostcontent.php(4): Kohana_Database_Result->offsetGet('name')
#3 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#4 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#5 C:\wamp\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\wamp\www\application\views\v_index.php(33): Kohana_View->__toString()
#7 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#8 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#9 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:36:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:36:41 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\mod...', 48, Array)
#1 C:\wamp\www\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\wamp\www\application\views\v_editpostcontent.php(4): Kohana_Database_Result->offsetGet('name')
#3 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#4 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#5 C:\wamp\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\wamp\www\application\views\v_index.php(33): Kohana_View->__toString()
#7 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#8 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#9 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:37:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ MODPATH\database\classes\Kohana\Database\Result\Cached.php [ 48 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:37:36 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php(48): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\wamp\\www\\mod...', 48, Array)
#1 C:\wamp\www\modules\database\classes\Kohana\Database\Result.php(243): Kohana_Database_Result_Cached->current()
#2 C:\wamp\www\application\views\v_editpostcontent.php(9): Kohana_Database_Result->offsetGet('description')
#3 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#4 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#5 C:\wamp\www\system\classes\Kohana\View.php(236): Kohana_View->render()
#6 C:\wamp\www\application\views\v_index.php(33): Kohana_View->__toString()
#7 C:\wamp\www\system\classes\Kohana\View.php(62): include('C:\\wamp\\www\\app...')
#8 C:\wamp\www\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\wamp\\www\\app...', Array)
#9 C:\wamp\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\wamp\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#15 C:\wamp\www\index.php(118): Kohana_Request->execute()
#16 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Result\Cached.php:48
2017-09-28 02:42:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::edit_news() ~ APPPATH\classes\Controller\main.php [ 67 ] in file:line
2017-09-28 02:42:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 02:43:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::edit() ~ APPPATH\classes\Controller\main.php [ 67 ] in file:line
2017-09-28 02:43:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 02:45:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\main.php [ 67 ] in C:\wamp\www\application\classes\Controller\main.php:67
2017-09-28 02:45:55 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\main.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 67, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editposts()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\main.php:67
2017-09-28 02:50:37 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '2 WHERE id = 13' at line 1 [ UPDATE news SET name=     dsfsd, description =     	dsfsdfsd    2 WHERE id = 13 ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 02:50:37 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE news SET...', false, Array)
#1 C:\wamp\www\application\classes\Model\news.php(37): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(68): Model_News->update_news('    dsfsd', '    \tdsfsdfsd  ...', '13')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editposts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:27:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\news.php [ 31 ] in file:line
2017-09-28 04:27:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 04:40:07 --- CRITICAL: View_Exception [ 0 ]: The requested view v_createcontent could not be found ~ SYSPATH\classes\Kohana\View.php [ 265 ] in C:\wamp\www\system\classes\Kohana\View.php:145
2017-09-28 04:40:07 --- DEBUG: #0 C:\wamp\www\system\classes\Kohana\View.php(145): Kohana_View->set_filename('v_createcontent')
#1 C:\wamp\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_createcontent', NULL)
#2 C:\wamp\www\application\classes\Controller\main.php(85): Kohana_View::factory('v_createcontent')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\system\classes\Kohana\View.php:145
2017-09-28 04:42:24 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'тема, Описание новой темы)' at line 1 [ INSERT INTO news (name, description) VALUES (Новая тема, Описание новой темы) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:42:24 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(4, 'INSERT INTO new...', false, Array)
#1 C:\wamp\www\application\classes\Model\news.php(32): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(74): Model_News->create_news('\xD0\x9D\xD0\xBE\xD0\xB2\xD0\xB0\xD1\x8F \xD1\x82\xD0\xB5...', '\xD0\x9E\xD0\xBF\xD0\xB8\xD1\x81\xD0\xB0\xD0\xBD\xD0\xB8\xD0...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editposts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:42:57 --- CRITICAL: Database_Exception [ HY000 ]: SQLSTATE[HY000]: General error: 1364 Field 'created_at' doesn't have a default value [ INSERT INTO news (name, description) VALUES ('Новая тема', 'Описание новой темы') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:42:57 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(4, 'INSERT INTO new...', false, Array)
#1 C:\wamp\www\application\classes\Model\news.php(32): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(74): Model_News->create_news('\xD0\x9D\xD0\xBE\xD0\xB2\xD0\xB0\xD1\x8F \xD1\x82\xD0\xB5...', '\xD0\x9E\xD0\xBF\xD0\xB8\xD1\x81\xD0\xB0\xD0\xBD\xD0\xB8\xD0...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editposts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:43:43 --- CRITICAL: Database_Exception [ 23000 ]: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'created_at' cannot be null [ INSERT INTO news (name, description,created_at) VALUES ('Новая тема', 'Описание новой темы',NULL) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 04:43:43 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(4, 'INSERT INTO new...', false, Array)
#1 C:\wamp\www\application\classes\Model\news.php(32): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(74): Model_News->create_news('\xD0\x9D\xD0\xBE\xD0\xB2\xD0\xB0\xD1\x8F \xD1\x82\xD0\xB5...', '\xD0\x9E\xD0\xBF\xD0\xB8\xD1\x81\xD0\xB0\xD0\xBD\xD0\xB8\xD0...')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editposts()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 05:22:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\v_editimagecontent.php [ 11 ] in C:\wamp\www\application\views\v_editimagecontent.php:11
2017-09-28 05:22:52 --- DEBUG: #0 C:\wamp\www\application\views\v_editimagecontent.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 11, Array)
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
#14 {main} in C:\wamp\www\application\views\v_editimagecontent.php:11
2017-09-28 05:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::get_all_images() ~ APPPATH\classes\Controller\main.php [ 109 ] in file:line
2017-09-28 05:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 05:27:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\v_editimagecontent.php [ 11 ] in C:\wamp\www\application\views\v_editimagecontent.php:11
2017-09-28 05:27:49 --- DEBUG: #0 C:\wamp\www\application\views\v_editimagecontent.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 11, Array)
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
#14 {main} in C:\wamp\www\application\views\v_editimagecontent.php:11
2017-09-28 05:28:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\classes\Controller\main.php [ 112 ] in C:\wamp\www\application\classes\Controller\main.php:112
2017-09-28 05:28:09 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\main.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 112, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_editimages()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\main.php:112
2017-09-28 05:53:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-28 05:53:01 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
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
2017-09-28 06:30:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_user' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2017-09-28 06:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2017-09-28 06:30:40 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '@mail.ru,pas123)' at line 1 [ INSERT INTOuser(name, email,password) VALUES (vasya, vasya@mail.ru,pas123) ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 06:30:40 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTOuser...', false, Array)
#1 C:\wamp\www\application\classes\Model\user.php(19): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(48): Model_User->registration('vasya', 'vasya@mail.ru', 'pas123')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 06:31:10 --- CRITICAL: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'kohanatest.intouser' doesn't exist [ INSERT INTOuser(name, email,password) VALUES ('vasya', 'vasya@mail.ru','va123') ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 06:31:10 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTOuser...', false, Array)
#1 C:\wamp\www\application\classes\Model\user.php(19): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(48): Model_User->registration('vasya', 'vasya@mail.ru', 'va123')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_success()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 06:50:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_User::$_tableNews ~ APPPATH\classes\Model\user.php [ 23 ] in C:\wamp\www\application\classes\Model\user.php:23
2017-09-28 06:50:51 --- DEBUG: #0 C:\wamp\www\application\classes\Model\user.php(23): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\app...', 23, Array)
#1 C:\wamp\www\application\classes\Controller\main.php(68): Model_User->check_user('vasya@mail.ru')
#2 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_cabinet()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\application\classes\Model\user.php:23
2017-09-28 06:51:17 --- CRITICAL: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=vasya@mail.ru' at line 1 [ SELECT * FROM userWHERE email=vasya@mail.ru ] ~ MODPATH\database\classes\Kohana\Database\PDO.php [ 157 ] in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 06:51:17 --- DEBUG: #0 C:\wamp\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM u...', false, Array)
#1 C:\wamp\www\application\classes\Model\user.php(26): Kohana_Database_Query->execute()
#2 C:\wamp\www\application\classes\Controller\main.php(68): Model_User->check_user('vasya@mail.ru')
#3 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_cabinet()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\modules\database\classes\Kohana\Database\Query.php:251
2017-09-28 07:02:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_index.php [ 19 ] in C:\wamp\www\application\views\v_index.php:19
2017-09-28 07:02:55 --- DEBUG: #0 C:\wamp\www\application\views\v_index.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 19, Array)
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
2017-09-28 07:08:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\classes\Controller\main.php [ 34 ] in C:\wamp\www\application\classes\Controller\main.php:34
2017-09-28 07:08:24 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\main.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 34, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_pictures()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\main.php:34
2017-09-28 07:09:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\main.php [ 31 ] in C:\wamp\www\application\classes\Controller\main.php:31
2017-09-28 07:09:15 --- DEBUG: #0 C:\wamp\www\application\classes\Controller\main.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\wamp\\www\\app...', 31, Array)
#1 C:\wamp\www\system\classes\Kohana\Controller.php(84): Controller_Main->action_pictures()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 C:\wamp\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\application\classes\Controller\main.php:31