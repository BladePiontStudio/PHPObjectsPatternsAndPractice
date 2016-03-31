<?php
namespace BladePointStudio;

/**
 * Created by PhpStorm.
 * User: RandolfJay
 * E-mail 774984889@qq.com
 * Date: 2016/3/28 0028
 * Time: 8:28
 */
class NastyBoss
{
    private $employee = array();
    public function addEmployee(employee $employee){
        $this->employee[] = $employee;
    }
    public function projecrFails(){
        if(count($this->employee)){
            $emp = array_pop($this->employee);
            $emp->fire();
        }
    }
}