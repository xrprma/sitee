<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		input {
			width: 180px;
			height: 40px;
			border-radius: 3px;
		}
	</style>
</head>
<body style="background: #88BDBC;">
	<div style="width: 200px;margin: auto; background: #70a5a4;; padding: 10px; border-radius: 20px;">
		<form method="POST" action="logincheck.php">
			<h1 style="margin-left:auto; margin-right:auto;">Log-In</h1>
			<input style="margin-top: 10px;" placeholder="Логин" name="user">
			<input style="margin-top: 10px;" placeholder="Пароль" name="pass">
			<button style="margin-top: 10px; position: relative; left: 50%; transform: translate(-50%, 0);">Войти</button>
		</form>
	</div>
</body>
</html>