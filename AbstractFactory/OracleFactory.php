<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 16:04
 */

namespace AbstractFactory;


class OracleFactory extends DBFactory
{

    public function createConnection()
    {
        return new  OracleConnection();
        // TODO: Implement createConnection() method.
    }

    public function createStatement()
    {
        // TODO: Implement createStatement() method.
        return  new OracleStatement();
    }


}