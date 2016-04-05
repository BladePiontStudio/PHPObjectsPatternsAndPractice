<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/2 0002
 * Time: 17:25
 */

namespace Factory;


class ConsoleLogFactory extends LogFactory
{
    function createLog()
    {
        // TODO: Implement createLog() method.
        return new ConsoleLog();
    }

}