<?php
header("Content-Type: text/html; charset: utf-8");
require('libs/Smarty.class.php');
date_default_timezone_set("PRC");

$smarty = new Smarty;
$smarty->display('class/index.tpl');

?>