<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 16:00
 */

namespace AbstractFactory;


abstract    class DBFactory
{
    abstract function createConnection();
    abstract function createStatement();
}