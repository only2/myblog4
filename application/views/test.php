<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url(); ?>">
</head>
<body>
	<form action="welcome/check_log" method="post">
		<p>
			用户名：<input type="text" name="username">
		</p>
		<p>
			密码：<input type="password" name="password">
		</p>
		<p>
			<input type="submit" name="sub" value="登录">
		</p>
	</form>
</body>
</html>