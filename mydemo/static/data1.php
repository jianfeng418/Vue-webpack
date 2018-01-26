<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userDB";

$conn = new mysqli($servername, $username, $password, $dbname); 
 
// 检测连接
if ($conn->connect_error) {
    die("failed: " . $conn->connect_error);
} 

//创建数据库
/*$sql = "CREATE DATABASE userDB";
if($conn->query($sql) === true){
	echo "数据库创建成功";
} else{
	echo "error creating database!";
}*/


// 使用 sql 创建数据表
/*$sql = "CREATE TABLE userTab (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table userTab user successfully";
} else {
    echo "createEerror: " . $conn->error;
}*/


//插入数据
$sql = "insert into userTab (username,password) values('admin','admin')";

if ($conn->query($sql) === TRUE) {
    echo "insert Success";
} else {
    echo "error: " . $conn->error;
}
//查询
/*$sql = "select * from user where firstname='Jo2hn'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo 'id:'.$row['id'].'-Name'.$row['firstname'].' '.$row['lastname'].'<br>';
	}
}else{
	echo '0结果';
}*/
echo 'success';
//关闭 
$conn->close();
?><?php

	
	header("Content-type: text/html; charset=utf-8");   //定义编码方式
	header('Content-Type: application/json');
	//告诉浏览器不要缓存数据  
	//header("Cache-Control: no-cache");
	$flag = 1;
	$error_code = ‘查询失败‘;
	$datalist = array();

	$host = '127.0.0.1';	//主机ip地址
	$user = 'root';	
	$password = '';
	$connection = mysql_connect($host,$user,$password);

	if(!$connection){
		die('连接失败');
	}

	$dbname = 'user';	//数据库名
	mysql_select_db($dbname,$connection);	//连接数据库
	mysql_query('SET NAMES UTF8');//	mysql字符编码

	$sql = 'select "userName","userTel"  from "userInfo" ';

	$result = mysql_query($sql);

	while(!$result){
		$flag = false;
		die('查询失败');
	};

	while($row = mysql_fetch_assoc($result)){
		$datalist[] = $row;	//将所有查询到的所有数据按行赋值非数组
	}

	//返回json数据，或者字符串，数字
	$json = array('flag' => $flag,'error_code' => $error_code,'datalist' => $datalist);

	echo json_encode($json);	//将普通数组转成json数组

	mysql_close($connection);
?>