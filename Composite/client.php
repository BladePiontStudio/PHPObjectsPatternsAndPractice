<?php
/**
 * Created by PhpStorm.
 * User: RandolfJay
 * Date: 16/5/16
 * Time: 上午8:47
 */
    require_once "Unit.php";
    require_once "UnitException.php";
    require_once "Archer.php";
    require_once "Army.php";
    require_once "LaserCannon.php";


    $archer1 = new Acher();
    $archer2 = new Acher();
    $lasercon = new LaserCannon();
    $army = new Army();

    $sub_army = new Army();

    $army->addUnit($archer1);
    $army->addUnit($lasercon);
    $army->addUnit($archer2);

    $army->removeUnit($archer1);

    $sub_army->addUnit($archer2);

    $army->addUnit($sub_army);
    print "作战部队攻击力:{$army->bombbardStrength()}";