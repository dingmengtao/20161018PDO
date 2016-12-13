<?php
$dsn = "mysql:host=localhost;dbname=mydb;port=3306;charset=utf8";
$user = "root";
$pwd = "123456";

$pdo = new PDO($dsn, $user, $pwd);

//1.现将有可能被攻击地方用占位符代替
$sql = "delete from user where id=?";
//2.使用prepare预处理sql语句，就是解析sql语句的结构
$pdo_statement = $pdo -> prepare($sql);
//3.绑定真实数据，将占位符替换成真实的数据
$pdo_statement -> bindValue(1,'4 || 1=1');
//4.因为prepare的时候，已经固定过sql语句的结构，所以现在不管绑定什么数据，sql语句的结构不会发生变化
//执行sql语句
$pdo_statement -> execute();

echo '<pre>';
var_dump($pdo_statement);
