<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

	public $template = 'v_index';

	public function action_index()
	{
		$this->template->title = 'Тестовое задание';
		$this->template->content = View::factory('v_maincontent');
		//$this->response->body('controller,work!');
	}
	public function action_test()
	{
		#$products = Model::factory('catalog')->all_product();
		#return View::factory('v_catalog',['products'=>$products]);
		$this->template->title = 'catalog!';
		$this->template->content =  View::factory('v_testcontent');
	}
	public function action_boots()
	{
		$this->template->title = 'catalog!';
		$this->template->content =  View::factory('v_testcontent');
	}


} // End Welcome
