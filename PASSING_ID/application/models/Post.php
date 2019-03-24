<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/12/19
 * Time: 12:37 PM
 */

namespace application\models;


use application\core\Model;

class Post extends Model
{

    public function getPosts()
    {
        $result = $this->db->row('SELECT * FROM posts');
        return $result;
    }


    public function showOnePosts()
    {
        $id = $this->var;
        $result = $this->db->row("SELECT * FROM posts WHERE id = $id");
        return $result;
    }

}


