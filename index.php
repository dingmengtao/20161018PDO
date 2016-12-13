<?php
$dsn = "mysql:host=localhost;dbname=mydb;port=3306;charset=utf8";
$user = "root";
$pwd = "123456";

$pdo = new PDO($dsn, $user, $pwd);

//echo '<pre>';
//var_dump($pdo);
//$sql = "INSERT INTO lanmu values(null, 'web前端技术交流')";
//$pdo_statement = $pdo -> exec($sql);
//$res = $pdo -> errorInfo();
//echo '<pre>';
//var_dump($res);

//$sql1 = "update lanmu set name='WEB前端技术交流' where id = 7";
//$res = $pdo -> exec($sql1);
//echo '<pre>';
//var_dump($res);

//$sql2 = "delete from lanmu where id = 9";
//$res = $pdo -> exec($sql2);
//echo '<pre>';
//var_dump($res);
$sql3 = "select * from lanmu";
$pdo_statement = $pdo -> query($sql3);
//$res = $pdo_statement -> fetch(PDO::FETCH_ASSOC);
//echo '<pre>';
//var_dump($res);
//echo '<hr>';
//$res2 = $pdo_statement -> fetch(PDO::FETCH_NUM);
//echo '<pre>';
//var_dump($res2);
//echo '<hr>';

//$res3 = $pdo_statement -> fetch(PDO::FETCH_NUM);
$res3 = $pdo_statement -> fetch(PDO::FETCH_BOTH);
echo '<pre>';
var_dump($res3);
//closeCursor();
echo '<hr>';

//$res3 = $pdo_statement -> fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>';
//var_dump($res3);
//echo '<hr>';

//$res4 = $pdo_statement -> fetchAll(PDO::FETCH_NUM);
//echo '<pre>';
//var_dump($res4);
//echo '<hr>';

//$res5 = $pdo_statement -> fetchColumn(1);
//echo '<pre>';
//var_dump($res5);