<?php
set_time_limit(60*2);
require('../simple_html_dom.php');

//连接数据库
$con = mysql_connect("localhost", "root", "asdf");
if (!$con) {
    die("服务器连接失败！请检查后重试！");
}
//选择数据库
mysql_select_db("findjob", $con);
mysql_query("SET NAMES UTF8");

$url = "http://jyzd.xmu.edu.cn/showmorezph.asp";

$result = HtmlToStr($url, 4);
$html = new simple_html_dom();
$html->load($result);
$contents = $html->find('.TableBody4');
$strs = array();
for($i = 0; $i < count($contents); $i++){
	if($i % 5 == 0){
		$linkTag = trim($contents[$i]->innertext);
		$strs[$i / 5][0] = substr($linkTag, 19, 5);
		$strs[$i / 5][6] = "http://jyzd.xmu.edu.cn/zph.asp?id=". $strs[$i / 5][0];
	}
	$strs[$i / 5][($i % 5)+1] = trim($contents[$i]->plaintext);
}
$str = array();
foreach ($strs as $str){  
	$postID = $str[0];
	$title = $str[1];
	$time = $str[2];
	$place = $str[3];
	$speciaty = $str[4];
	$link = $str[6];
	$sql = "INSERT INTO `findjob`.`employ` 
					(`jobID`, `postID`, `title`, `link`, `time`, `place`, `speciaty`)
		SELECT NULL, '$postID', ' $title', '$link', '$time', '$place', '$speciaty'  
		FROM dual 
        WHERE not exists (select * from `findjob`.`employ` 
        where `postID`='$postID')";
        mysql_query($sql, $con);
	/*
	$sql   = mysql_query("SELECT CONUNT(*) FROM `findjob`.`employ` WHERE `postID`='$postID'", $con);
	$ins = "INSERT INTO `findjob`.`employ` (`jobID`, `postID`, `title`, `link`, `time`, `place`, `speciaty`) VALUES (NULL, '$postID', ' $title', '$link', '$time', '$place', '$speciaty' ) ";
	$update ="UPDATE `findjob`.`employ` SET `title` = '$title', `link` = '$link', `time` = '$time', `place` = '$place', `speciaty` = '$speciaty' WHERE `postID`='$postID'";
	if (!$sql) {

		mysql_query($ins, $con);

	} else {

		mysql_query($update, $con);

	}
	*/
}
 
print_r($strs);

$html->clear();
//关闭数据库连接
mysql_close($con);

function HtmlToStr($url, $times){
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);  //0表示不输出Header，1表示输出
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	
	$output = NULL;
	while ($times > 0) {
		$times = $times - 1;
		curl_setopt($ch, CURLOPT_COOKIEJAR, "");
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'userjs=2015&PageAction=%CF%C2%D2%B3');
		$html = curl_exec($ch);
		$output .= iconv("GB2312","UTF-8",$html);
	}

	$info = curl_getinfo($ch);
	echo '获取'. $info['url']. "<br>". '耗时'. $info['total_time']. '秒'."<br>";
	curl_close($ch);
	return $output;
}
?>