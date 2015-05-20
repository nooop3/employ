<?php
header("Content-Type: text/html; charset=utf-8");
require('./libs/Smarty.class.php');
require_once('./configs/db_info.php');
date_default_timezone_set("PRC");
//mysql_connect
$con = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("数据库连接失败！" . mysql_error());
mysql_select_db(DB_DATABASENAME, $con);
mysql_query("SET NAMES UTF8");
$sql = mysql_query("SELECT * FROM employ WHERE time > NOW() ORDER BY time") or die(mysql_error());;

while($row=mysql_fetch_assoc($sql)){

    $table[]=$row;

}
$smarty = new Smarty;
$smarty->assign('table',$table);
$smarty->display('employ/index.tpl');
mysql_close($con);
?>