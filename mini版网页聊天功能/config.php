<?php
error_reporting(0);
$config = mysql_connect("127.0.0.1","root","root")or die("Mysql Connect Error");//设置数据库IP，账号，密码
mysql_select_db("lt");//数据库库名
mysql_query("SET NAMES UTF8");
?>