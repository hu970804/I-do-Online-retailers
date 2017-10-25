<?php 
  error_reporting(E_ALL||~E_NOTICE);

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="./css/index.css">
	<title></title>
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="./index.php">
					<img src="./img/logo.png" alt="" /> </a>
			</div>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li>
						<a href="index.php">首页</a>
					</li>
					<?php
						if($_SESSION['home_username']){
					?>
					<li>
						<a href="person_info.php">欢迎 <?php echo $_SESSION['home_username']?> </a>
				    </li>
				    <li>
						<a href="sign_out.php">退出</a>
					</li>
					<?php
						}else{

					?>
					<li>
						<a href="./sign_in.php">登陆</a>
					</li>
					<li>
						<a href="./sign_up.php">注册</a>
					</li>
					<?php
						}
					?>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	