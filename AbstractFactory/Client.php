<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 16:09
 */
//���������
require_once("DBFactory.php");
require_once("Connection.php");
require_once("Statement.php");
//����Oracle
require_once("OracleFactory.php");
require_once("OracleConnection.php");
require_once("OracleStatement.php");
//����Mysql
require_once("MysqlFactory.php");
require_once("MysqlConnection.php");
require_once("MysqlStatement.php");

$factory = new   AbstractFactory\MysqlFactory();
$connect    =   $factory->createConnection();
$connect->go();
$statement  =   $factory->createStatement();