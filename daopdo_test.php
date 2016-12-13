<?php
header("content-type:text/html;charset=utf8");

require './I_DAO.interface.php';
require './DAOPDO.class.php';

//为了让数据库连接更加灵活，将数据库的配置信息以参数的形式传递进去
$option = array(
	'host' => 'localhost',
	'dbname' => 'mydb',
	'user' => 'root',
	'password' => '123456',
	'port' => 3306,
	'charset' => 'utf8'
);

$pdo1 = DAOPDO :: getSingleton($option);
//$pdo2 = DAOPDO :: getSingleton($option);
//$pdo3 = DAOPDO :: getSingleton($option);

//echo '<pre>';
//var_dump($pdo1, $pdo2, $pdo3);

//$sql = "insert into user values(110, '孙悟空', 123456, '1990-11-20')";
//$res = $pdo1 -> exec($sql);
//$id = $pdo1 -> lastInsertId();

//echo '<pre>';
//var_dump($res);
//var_dump($id);

$list = $pdo1 -> getAll("select * from user");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Document</title>
		<style type="text/css">
			
		</style>
		<script type="text/javascript">
			
		</script>
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>编号</th>
					<th>姓名</th>
					<th>密码</th>
					<th>生日</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($list as $val): ?>
				<tr>
					<?php foreach($val as $v): ?>
					<td><?php echo $v; ?></td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>