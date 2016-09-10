<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<base href="<?php echo site_url(); ?>">
</head>
<body>
	<table align="center" width="800" border='1'>
		<caption><h1>计算器</h1></caption>
		<form action="welcome/jisuanqi1" method="GET">
		<tr>
			<td><input type="text" name="num1"></td>
			<td>
				<select name='ysf'>
					<option value='+'>+</option>
					<option value='-'>-</option>
					<option value='*'>*</option>
					<option value='/'>/</option>
					<option value='%'>%</option>
				</select>
			</td>
			<td><input type="text" name="num2"></td>
			<td><input type="submit" name="sub" value="计算"></td>
		</tr>
		</form>
	</table>
</body>
</html>