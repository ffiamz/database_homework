<!--<!DOCTYPE html>-->

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>students</title>
</head>
<body>
	<h2>学生选课管理系统</h2>
	<?php include $_SERVER['DOCUMENT_ROOT']."/sems/share/header.php";
	?>
	<div>					
		<div class="mainblock">
			<form action="add.php" method="post"/>
				学号<input type="text" name="id"/>
				姓名<input type="text" name="name"/>
				男<input type="radio" checked="checked" name="gender" value="1"/>
				女<input type="radio" name="gender" value="0" />
				密码<input type="password" name="password"/>
				<input type="submit" value="提交"/>
			</form>
		</div>
	</div>

</body>