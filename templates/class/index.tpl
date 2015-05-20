<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="templates/bootstrap/css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="templates/jquery.js"></script>
	<title>课表查询</title>
</head>
<body>
<div class="container text-center">
	<h1>课表简易查询器</h1><br/>
	<form class="form-inline">
		<div class="form-group">
			<label for="InputStunum">学号：</label>
			<input type="text" class="form-control" id="stunumber" placeholder="2333333"/>
		</div><br/><br/>
		<div class="form-group">
			<label for="InputPwd">密码：</label>
			<input type="password" class="form-control" id="stupwd" placeholder="厦大统一账号密码"/>
		</div><br/><br/>
		<button type="button" class="btn btn-primary btn-lg">确定</button>
	</form><br />
	<div class="table-responsive" id="course-detail">
		</table>
		<table class="text-center table table-bordered table-hover">
			<tr class="row success">
				<td class="column col-xs-1"></td>
				<td class="column weekday" id="1">周一</td>
				<td class="column weekday" id="2">周二</td>
				<td class="column weekday" id="3">周三</td>
				<td class="column weekday" id="4">周四</td>
				<td class="column weekday" id="5">周五</td>
				<td class="column weekday" id="6">周六</td>
				<td class="column weekday" id="7">周日</td>			
			</tr>
			<tbody id="detail"></tbody>
		</table>
	</div>
</div>

	<script type="text/javascript" src="templates/class/course_detail.js"></script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="templates/bootstrap/js/bootstrap.js"></script>
</body>
</html>