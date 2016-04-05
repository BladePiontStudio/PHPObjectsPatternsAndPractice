<?php
namespace Factory;
require_once "LogFactory.php";
require_once "DatabaseLogFactory.php";
require_once "FileLogFactory.php";
require_once "Log.php";
require_once "DatabaseLog.php";
require_once "FileLog.php";
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/3/30 0030
 * Time: 11:24
 */
//¹¤³§²âÊÔ

$Factory = new ConsoleLogFactory();


$Log    =   $Factory->createLog();
$Log->writeLog();
