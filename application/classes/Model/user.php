<?php defined('SYSPATH') or die('No direct script access.');

/**
* 
*/
class Model_User extends Model
{
	protected $_tableUser = 'user';
 
    /**
     * Вносим данные в таблицу
     * @return result
     */
    public function registration($name,$email,$password)
    {
        $sql = "INSERT INTO ". $this->_tableUser."(name, email,password) VALUES ('$name', '$email','$password')";
 
        return DB::query(Database::INSERT, $sql)
                   ->execute();
    }
    /**
     * Поиск пользователя
     * @return result
     */
    public function check_user($email)
    {
       $sql = "SELECT * FROM ". $this->_tableUser." WHERE email='$email'";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();

    }
}