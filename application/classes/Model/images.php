<?php defined('SYSPATH') or die('No direct script access.');

/**
* 
*/
class Model_Images extends Model
{
	protected $_tableNews = 'images';

	/**
     * Возвращает все изображения
     * @return array
     */

	public function get_all_images()
	{
		//строим запрос 
		$sql = "SELECT * FROM ". $this->_tableNews;
 		
		//отправляем запрос

        return DB::query(Database::SELECT, $sql)
                   ->execute();
	}

	/**
     * Записывает в базу данных изображение
     * @return result
     */
	public function create_image($name,$url)
    {
        $query = DB::query(Database::DELETE, "INSERT INTO images (name, url) VALUES ('$name', '$url')");
        return $query->execute();
    }
    /**
     * Удаляет изображение
     * @return result
     */
	public function delete_image($id)
    {
       $query = DB::query(Database::DELETE, "DELETE FROM images WHERE id = $id");
        return $query->execute();
    }








}