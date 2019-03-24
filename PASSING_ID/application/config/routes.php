<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/8/19
 * Time: 8:35 PM
 */


return [

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'post' => [
        'controller' => 'post',
        'action' => 'show',
    ],

    'post/showOne/([0-9]+)' => [
        'controller' => 'post',
        'action' => 'showOne',
//        'params' => '$1/$2',
    ],

    'post/([0-9]+)' => [
        'controller' => 'post',
        'action' => 'showOne',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],


    'news/show' => [
        'controller' => 'news',
        'action' => 'show',
    ],



];






//    'contact' => [
//        'controller' => 'main',
//        'action' => 'contact',
//    ],