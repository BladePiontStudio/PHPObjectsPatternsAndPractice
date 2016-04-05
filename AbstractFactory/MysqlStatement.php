<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 17:41
 */

namespace AbstractFactory;


class MysqlStatement    extends Statement
{
    public function go(){
        echo    "Mysql Statement is active  !";
    }
}