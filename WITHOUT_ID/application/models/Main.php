<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/12/19
 * Time: 9:40 AM
 */


namespace application\models;

use application\core\Model;

class Main extends Model
{

    public function getNews()
    {

        $result = $this->db->row('SELECT * FROM posts');
        return $result;
    }

}