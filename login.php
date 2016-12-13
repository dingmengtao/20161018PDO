<?php

$dsn = "mysql:host=localhost;dbname=mydb;port=3306;charset=utf8";
$user = "root";
$pwd = "123456";

$pdo = new PDO($dsn, $user, $pwd);

//$name = $_POST['name'];
$name = $_POST['name'];
$password = $_POST['password'];

$sql = "select * from user where name='$name' and password='$password'";

$pdo_statement = $pdo -> query($sql);
$res = $pdo_statement -> fetchAll(PDO::FETCH_ASSOC);
if($res){
    echo '<pre>';
    var_dump($res);
}else{
    echo '用户名密码不匹配！<br>';
}