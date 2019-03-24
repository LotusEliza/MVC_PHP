<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/12/19
 * Time: 12:31 PM
 */

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class PostController extends Controller
{
    public function showAction() {
        $result = $this->model->getPosts();
        $var = [
            'posts' => $result,
        ];
        $this->view->render('Post page', $var);
    }
}




