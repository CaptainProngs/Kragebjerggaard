<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost:8889";
    $DB_NAME = "krage";
    $DB_USER = "root";
    $DB_PASS = "root";
}else{
    $DB_SERVER = "camillekirstine.com.mysql";
    $DB_NAME = "camillekirstine_comkrage";
    $DB_USER = "camillekirstine_comkrage";
    $DB_PASS = "krage123";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);