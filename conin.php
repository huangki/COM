﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_server = "127.0.0.1";
$db_name = "tdb";
$db_user = "root";
$db_passwd = "";
 if(!mysql_connect($db_server, $db_user, $db_passwd))die("無法對資料庫連線");

 
mysql_query("SET NAMES utf8");
date_default_timezone_set('Asia/Taipei');

if(!mysql_select_db($db_name))die("無法使用資料庫");
?> 