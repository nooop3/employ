<?php
$to = "zhendongguan@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$headers .= 'From: <admin@guandong.com>' . "\r\n";
$headers .= 'Cc: 1165638411@qq.com' . "\r\n";

$mail = mail($to,$subject,$message,$headers);
if($mail){
  echo "successful!";
}else{
  echo "failed!!";
}

?>
