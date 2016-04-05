<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/2 0002
 * Time: 16:56
 */

namespace Factory;


class FileLog   extends Log
{
    function writeLog()
    {
        // TODO: Implement writeLog() method.
        echo    "日志文件对象->生成日志!";
    }

}