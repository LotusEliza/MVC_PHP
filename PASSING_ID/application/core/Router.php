<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/8/19
 * Time: 8:37 PM
 */

namespace application\core;

use application\core\View;


class Router
{

    protected $routes = [];
    protected $params = [];
    protected $var = [];

    function __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val){
            $this->add($key, $val);
        }
    }


    public function add($route, $params){
        //регулярные выражения
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;

    }


    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;

                if(isset($matches[1])){
                    echo "id exist";
                    $this->var = $matches[1];
                }

                return true;
            }
         }
        return false;
    }


    public function run(){
        if ($this->match()) {
            $path = 'application\controllers\\'.ucfirst($this->params['controller']).'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'].'Action';
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params, $this->var);
                    $controller->$action();
                } else {
                    echo "No ".$action;
                    View::errorCode(404);
                }
            } else {
                echo "No ".$path;
                View::errorCode(404);
            }
        } else {
            echo "No match";
            View::errorCode(404);
        }
    }

}
