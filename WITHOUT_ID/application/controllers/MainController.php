<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/9/19
 * Time: 11:53 AM
 */

namespace application\controllers;


use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{

    public function indexAction() {
        $result = $this->model->getNews();
        $var = [
            'news' => $result,
        ];
        $this->view->render('Main page', $var);
    }

}








//public function contactAction(){
//    echo 'Contacts';
//}
//***************************


//        $db = new Db;
//
//        $params = [
//            'id' => 2,
//        ];
////        debug($params);
//
//        $data = $db->row('SELECT * FROM posts WHERE  id = :id', $params);
//        debug($data);
//