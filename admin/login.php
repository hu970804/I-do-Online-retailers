<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>登录</title>
		<link rel="stylesheet" href="./css/layui.css" media="all" />
		<link rel="stylesheet" href="./css/login.css" />
	</head>

	<body class="beg-login-bg">
		<div class="beg-login-box">
			<header>
				<h1>后台登录</h1>
			</header>
			<div class="beg-login-main">
				<form action="./check_login.php" class="layui-form" method="post">
					<div class="layui-form-item">
						<input type="text" name="email" placeholder="这里输入登录邮箱" class="layui-input">
					</div>
					<div class="layui-form-item">
						<input type="password" name="password"placeholder="这里输入密码" class="layui-input">
					</div>
					<div class="layui-form-item">
						<div class="beg-pull-right">
							<button class="layui-btn layui-btn-primary" lay-submit lay-filter="login">登录
              </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>