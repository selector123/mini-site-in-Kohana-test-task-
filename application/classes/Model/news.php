<?php defined('SYSPATH') or die('No direct script access.');

/**
* 
*/
class Model_News extends Model
{
    //получаем имя таблицы
	protected $_tableNews = 'news';
 
    /**
     * Получаем все новости
     * @return array
     */
    public function get_all_news()
    {
        $sql = "SELECT * FROM ". $this->_tableNews;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
    /**
     * Получаем одну новость
     * @return array
     */
    public function get_one_news($id)
    {
    	$query = DB::select()->from('news')->where('id', '=', $id);
    	$result = $query->execute();
    	return $result;
    }
    /**
     * Создаем новость
     * @return result
     */
    public function create_news($name,$description)
    {
        $query = DB::query(Database::DELETE, "INSERT INTO news (name, description,created_at) VALUES ('$name', '$description','')");
        return $query->execute();
    }
    /**
     * Удаляем новость
     * @return result
     */
    public function delete_news($id)
    {
       $query = DB::query(Database::DELETE, "DELETE FROM news WHERE id = $id");
        return $query->execute();
    }
    /**
     * Редактируем
     * @return result
     */
    public function update_news($name, $description, $id)
    {
        $query = DB::query(Database::UPDATE, "UPDATE news SET name='$name', description='$description' WHERE id = $id");
        return $query->execute();
    }
}