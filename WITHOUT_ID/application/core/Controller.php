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

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);
        if(class_exists($path)){
            return new $path;
        }
    }
}




//        make custom layout for all
//        $this->before();





