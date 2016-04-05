<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 12:02
 */

namespace Singleton;


class Preferences
{
    private static $Instance;
    private $pros   =   array();

    private function     __construct(){

    }

    public static function getInstance(){
        if(empty(self::$Instance)){
            self::$Instance =   new Preferences();
        }
        return  self::$Instance;
    }

    public function setProperty($key,$value){
        $this->pros[$key]   =   $value;
    }

    public function getProperty($key){
        return  $this->pros[$key];
    }
}