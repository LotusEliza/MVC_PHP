<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/9/19
 * Time: 11:43 AM
 */

//namespace application\controllers;

namespace application\core;

use application\core\View;


abstract class Controller
{

    public $route;
    public $view;
    public $model;
    public $id;


    public function __construct($route, $id)
    {
        $this->route = $route;
        $this->id = $id;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }


    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);
        if(class_exists($path)){
            return new $path($this->id);
        }
    }
}








//        make custom layout for all
//        $this->before();





