<?php

require('db_info.php');

$con = mysql_connect(DB_HOST, DB_USER, DB_PASS);//连接数据库
if(!$con){
  die("服务器连接失败！请检查后重试！");
}
mysql_query("SET NAMES UTF8");
$select = mysql_select_db("findjob", $con);//选择数据库
if(!$select){
  if(mysql_query("CREATE DATABASE findjob", $con)){
    echo "数据库创建成功！";
  }
  else{
    echo "创建数据库失败：". mysql_error();
  }
}
$cre = "CREATE TABLE IF NOT EXISTS employ
  (
  jobID int AUTO_INCREMENT,
  postID int(10),
  PRIMARY KEY(jobId),
  title text,
  link varchar(50),
  time datetime,
  place text,
  speciaty text,
  datetime timestamp NOT NULL default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  ) character set = utf8";
  if(mysql_query($cre,$con)){
    echo "表格创建成功";
  } //创建表格
  else{
    echo "表格创建失败：". mysql_error();
  }
mysql_close($con);
?>