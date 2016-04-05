<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/4/5 0005
 * Time: 12:10
 *  Description: µ¥ÀýÄ£Ê½²âÊÔ
 */
require_once("Preferences.php");

$perference = Singleton\Preferences::getInstance();
$perference->setProperty("name","RandolfJay");
echo $perference->getProperty("name");
var_dump($perference);
$perference2 = Singleton\Preferences::getInstance();
echo $perference2->getProperty("name");
var_dump($perference2);