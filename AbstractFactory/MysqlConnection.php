<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 17:38
 */

namespace AbstractFactory;


class MysqlConnection   extends Connection
{
    public function go(){
        echo    "Mysql Connection is active !";
    }
}