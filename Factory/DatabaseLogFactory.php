<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/3/31 0031
 * Time: 15:35
 */

namespace Factory;


class DatabaseLogFactory    extends LogFactory
{
    public function createLog()
    {
        // TODO: Implement createLog() method.
        return new DatabaseLog();
    }

}