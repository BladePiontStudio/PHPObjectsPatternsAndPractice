<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/2 0002
 * Time: 17:27
 */

namespace Factory;


class ConsoleLog    extends Log
{
    function writeLog()
    {
        // TODO: Implement writeLog() method.
        echo    "控制台日志对象->生成日志！";
    }

}