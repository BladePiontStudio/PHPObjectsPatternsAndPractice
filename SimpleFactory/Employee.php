<?php
namespace BladePointStudio;

/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/3/28 0028
 * Time: 8:36
 */
abstract class Employee
{
   protected $name;
   public function __construct($name){
        $this->name = $name;
    }

    abstract function fire();
}