<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/9/19
 * Time: 3:37 PM
 */

namespace application\core;


class View
{

    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($title, $vars = [])
    {
        extract($vars);
        $path = 'application/views/'.$this->path.'.php';
        if(file_exists($path)){
            //копируем в буфер вид
            ob_start();
            require $path;
            $content = ob_get_clean();
            require 'application/views/layouts/'.$this->layout.'.php';
        }else{
            echo "View cant be find: ".$this->path;
        }

    }


    public static function errorCode($code){
        http_response_code($code);
        $path = 'application/views/errors/'.$code.'.php';
        if(file_exists($path)){
            require $path;
        }
        exit;
    }

    public function redirect($url){

        header('location: '.$url);
        exit;
    }


    public function message($status, $message){
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url){
        exit(json_encode(['url' => $url]));
    }

}