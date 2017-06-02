<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	table{
	position: absolute;
	height: 100px;
	top: 50%;
	left: 50%;
	margin: -100px 0 0 -150px;
	}
	</style>
</head>
<body>
	<h2 style="text-align: center">LOGIN PAGE</h2>
	<form method="post" action="<?php echo site_url('MyControllerLogin/login')?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</body>