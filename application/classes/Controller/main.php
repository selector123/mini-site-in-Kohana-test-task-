<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {
	//Получаем название шаблона
	public $template = 'v_index';

	/**
     * Получаем главную страницу
     * @return template
     */
	public function action_index()
	{
		//получаем все новости

		$news = Model::factory('news')->get_all_news();
		
		//Указываем значения переменным в шаблоне

		$this->template->title = 'Новости';
		$this->template->navbar = View::factory('v_mainnavbar');

		//передаем переменную news в шаблон

		$this->template->content = View::factory('v_maincontent',['news'=>$news]);
	}
	/**
     * Получаем страницу новости
     * @return template
     */
	public function action_news()
	{
		//получаем id из адресной строки
		(int) $id = $this->request->param('id');

		//получаем новость с заданным id

		$one_news = Model::factory('news')->get_one_news($id);

		$this->template->title = 'Новость';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_newscontent',['one_news'=>$one_news]);
	}
	/**
     * Получаем страницу галереи
     * @return template
     */
	public function action_pictures()
	{
		//получаем все изображения

		$images = Model::factory('images')->get_all_images();

		$this->template->title = 'Галерея';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content = View::factory('v_imagecontent',['images'=>$images]);
	}
	/**
     * Получаем страницу регистрации
     * @return template
     */
	public function action_registrform()
	{
		$this->template->title = 'Регистрация';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_regcontent');
	}
	/**
     * Получаем страницу успешной регистрации
     * @return template
     */
	public function action_regsuccess()
	{
		//если кнопка нажата

		if(isset($_POST['submit'])){
		
		//получаем значения из полей 

			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

		//регистрируем	

			$result = Model::factory('user')->registration($name,$email,$password);

			//если регистрация прошла успешно подгружаем шаблон

			if ($result) {
				$act = 'Регистрация';
				$this->template->title = 'Регистрация';
				$this->template->navbar = View::factory('v_mainnavbar');
				$this->template->content =  View::factory('v_success',['act'=>$act]);
			}
		}
	}
	/**
     * Получаем страницу авторизации
     * @return template
     */
	public function action_login()
	{
		$this->template->title = 'Авторизация';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_logincontent');
	}
	/**
     * Получаем страницу кабинета пользователя
     * @return template
     */
	public function action_cabinet()
	{
		//если кнопка нажата

		if (isset($_POST['submit'])) {

			//получаем данные из полей

			$email = $_POST['email'];
			$password = $_POST['password'];

			//ищем пользователя в базе данных

			$user = Model::factory('user')->check_user($email);

			//если такой есть и пароль совпадает подгружаем шаблон

			if ($user[0]['email'] == $email && $user[0]['password'] == $password) {
				$this->template->title = 'Авторизация';
				$this->template->navbar = View::factory('v_mainnavbar');
				$this->template->content =  View::factory('v_cabinet',['name'=>$user[0]['name']]);
					} else{

						//иначе возвращаем

						$this->template->title = 'Авторизация';
						$this->template->navbar = View::factory('v_mainnavbar');
						$this->template->content =  View::factory('v_logincontent');
					}
		}
		
	}
	/**
     * Получаем страницу с возможностями редактирования
     * @return template
     */
	public function action_editor()
	{
		$this->template->title = 'Редактирование';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editcontent');
	}
	/**
     * Получаем страницу редактирования постов
     * @return template
     */
	public function action_editposts()
	{

		//если кнопка со страницы editpostcontent нажата

		if(isset($_POST['submit'])){

			//получаем данные из полей

			$name = $_POST['name'];
			$description = $_POST['description'];
			$id = $_POST['id'];

			//редактируем новость

			$result = Model::factory('news')->update_news($name, $description, $id);
			
		}

		//если кнопка со страницы createpostcontent нажата

		if(isset($_POST['submitс'])){
			$name = $_POST['name'];
			$description = $_POST['description'];

			//создаем новость

			$result = Model::factory('news')->create_news($name, $description);
		}

		//получаем все новости

		$news = Model::factory('news')->get_all_news();

		$this->template->title = 'Редактирование';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editpostscontent',['news'=>$news]);
	}
	/**
     * Получаем страницу создания постов
     * @return template
     */
	public function action_create()
	{
		$this->template->title = 'Добовление';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_createpostcontent');
	}
	/**
     * Получаем страницу успешного удаления новости
     * @return template
     */
	public function action_delete()
	{
		//получаем id с адресной строки
		(int) $id = $this->request->param('id');
		
		//удаляем новость

		$result = Model::factory('news')->delete_news($id);
		$act = 'удалена';

		//если удаление прошло успешно возвращаем шаблон

		if ($result) {
			$this->template->title = 'Удаление';
			$this->template->navbar = View::factory('v_mainnavbar');
			$this->template->content =  View::factory('v_deletecontent',['act'=>$act]);
		}
		
	}
	/**
     * Получаем страницу редактирования новости
     * @return template
     */
	public function action_edit()
	{
		(int) $id = $this->request->param('id');

		//получаем одну новость

		$one_news = Model::factory('news')->get_one_news($id);
			$this->template->title = 'Редактирование';
			$this->template->navbar = View::factory('v_mainnavbar');
			$this->template->content =  View::factory('v_editpostcontent',['news' => $one_news,'id'=>$id]);
	}
	/**
     * Получаем страницу редактирования изображений
     * @return template
     */
	public function action_editimages()
	{
		//если кнопка нажата

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/assets/img/$name.jpg");
                    }
               $url = 'assets/img/'.$name.'.jpg';

               //добовляем изображение

               $result = Model::factory('images')->create_image($name,$url);

		}

		//получаем все изображения

		$images = Model::factory('images')->get_all_images();
		$this->template->title = 'Изображения';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_editimagecontent',['images'=>$images]);
	}
	/**
     * Получаем страницу добовления изображения
     * @return template
     */
	public function action_createimage()
	{
		$this->template->title = 'Добавить изображение';
		$this->template->navbar = View::factory('v_mainnavbar');
		$this->template->content =  View::factory('v_createimagecontent');
	}
	/**
     * Получаем страницу успешного удаления изображения
     * @return template
     */
	public function action_deleteimage()
	{
		//получаем id 

		(int) $id = $this->request->param('id');

		//удаляем изображение

		$result = Model::factory('images')->delete_image($id);
		$act = 'удалено';

		//если изображение удалено подгружаем шаблон

		if ($result) {
			$this->template->title = 'Удаление';
			$this->template->navbar = View::factory('v_mainnavbar');
			$this->template->content =  View::factory('v_deleteimagecontent',['act'=>$act]);
		}
		
	}


} // End Welcome
