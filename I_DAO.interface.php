<?php
header("content-type:text/html;charset=utf8");

//接口用来约束一个类应该有哪些方法
//通常用来封装增删查改的方法
	interface I_DAO{
//		查询所有数据的方法
		public function getAll($sql='');
//		查询一条记录的方法
		public function getRow($sql='');
//		查询一个字段的值
		public function getOne($sql='');
//		查询受影响的记录数
		public function affectedRows();
//		执行增删改操作的方法，通常返回成功与否
		public function exec($sql='');
//		查询刚刚执行插入操作返回的主键的值
		public function lastInsertId();

	}