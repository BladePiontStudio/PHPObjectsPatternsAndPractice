<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 17:36
 */

namespace AbstractFactory;


class MysqlFactory  extends DBFactory
{
    function createConnection()
    {
        // TODO: Implement createConnection() method.
        return  new MysqlConnection();
    }

    public function createStatement()
    {
        // TODO: Implement createStatement() method.
        return  new MysqlStatement();
    }


}