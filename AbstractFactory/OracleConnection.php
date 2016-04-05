<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 16:06
 */

namespace AbstractFactory;


class OracleConnection  extends Connection
{
    public function go(){
        echo    "Oracle 连接已经创建！";
    }
}