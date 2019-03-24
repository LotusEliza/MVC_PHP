<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/9/19
 * Time: 11:28 AM
 */

namespace application\controllers;

use application\core\Controller;


class AccountController extends Controller
{

    public function loginAction() {
        if(!empty($_POST)){
            $this->view->location('/');
        }
        $this->view->render('Enter');
    }


    public function registerAction() {
        $this->view->render('Registration');
    }

}




//
//public function loginAction() {
//    if(!empty($_POST)){
//        $this->view->location('/');
////            $this->view->message('success', 'Text message');
////            exit(json_encode(['status' => 'success', 'message' => 123]));
//    }
//    $this->view->render('Enter');
//}



//
//public function before(){
//    $this->view->layout = 'custom';
//}

//*******если хотим подклбчить файл из другой дерриктории
//public function registerAction() {
//    $this->view->path = 'test/registers';
//    $this->view->render('Registration');
//}


//************изменить лейаут на кастом
//public function registerAction() {
//    $this->view->layout = "custom";
//    $this->view->render('Registration');
//}


