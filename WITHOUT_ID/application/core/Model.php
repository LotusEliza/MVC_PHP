<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/8/19
 * Time: 8:37 PM
 */


namespace application\core;

use application\lib\Db;

abstract class Model
{

    public $db;

    public function __construct()
    {
        $this->db = new Db;
    }

}