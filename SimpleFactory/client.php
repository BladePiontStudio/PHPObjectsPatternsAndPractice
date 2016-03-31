<?php
namespace BladePointStudio;

/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/3/28 0028
 * Time: 9:00
 */
require_once("NastyBoss.php");
require_once("Employee.php");
require_once("Minion.php");
require_once("CluedUp.php");
require_once("WellConnected.php");

$Boss = new NastyBoss();
$Boss->addEmployee(new Minion("Tom"));
$Boss->addEmployee(new CluedUp("Jerry"));
$Boss->addEmployee(new WellConnected("Mary"));
$Boss->projecrFails();
$Boss->projecrFails();
$Boss->projecrFails();
