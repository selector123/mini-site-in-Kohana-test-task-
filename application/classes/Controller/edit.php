<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'v_index';

	public function action_edit()
	{
		$this->template->title = 'Редактирование';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editcontent');
	}
	public function action_delete()
	{
		$this->template->title = 'Редактирование';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editcontent');
	}
	public function action_edit()
	{
		$this->template->title = 'Редактирование';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editcontent');
	}








}