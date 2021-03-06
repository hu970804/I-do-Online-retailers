<?php
	session_start();
	include '../public/commen/config.php';
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	$sql="select * from sum_history where id=1";
	$rst=mysql_query($sql);
	$row=mysql_fetch_assoc($rst);

	
	
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="./css/index.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>	
	<script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="//at.alicdn.com/t/font_443285_rdbiv6gatk68byb9.js"></script>
	<title>微益捐</title>
</head>

<body>
	<?php 
		include 'header.php';
	?>
	<div class="banner">
			<div class="container">
				<div class="banner-main">
					<h1>WELCOME TO MY CHARITY</h1>
					<div class="bwn">
						<a href="./project_list.php"> Donate now </a>
					</div>
				</div>
			</div>
		</div>

	<div class="main">
		<div class="container clearfix">
			<div class="carousel">
				<ul class="img-ct">
					<?php
						$sqlAdvert="select * from advert LIMIT 3";
						$rstAdvert=mysql_query($sqlAdvert);
						while ($rowAdvert=mysql_fetch_assoc($rstAdvert)) {
							
					?>
					<li><a href="<?php echo $rowAdvert['url']?>"><img src="../public/uploads/<?php echo $rowAdvert['img']?>" alt="<?php echo $rowAdvert['name']?>"></a></li>
					<?php
						}
					?>
				</ul>
				<a class="pre arrow" href="#"><</a>
				<a class="next arrow" href="#">></a>
				<ul class="bullet">
					<li class="active"></li>
					<li></li>
					<li></li>
				</ul>
			</div>

			<div class="extra clearfix">
				<div class="moneyNum">
					<h2>历史善款总额：</h2>
					<span id="donateMoney"><?php echo number_format($row['sum_money'])?></span>元
					<h2>历史爱心总人数</h2>
					<span id="loveNum"><?php echo number_format($row['sum_user'])?></span>人次
					<p>微益捐与亿万网友在一起</p>
				</div>
			</div>
		</div>

		<div class="main-info clearfix">
			<div class="info-left">
				<div class="info-header">
						<h2>项目目录</h2>
						<a href="project_list.php" class="more">More</a>
				</div>
				<?php
						$sqlClass="select * from giftclass where isend=1 and is_end=0 LIMIT 4";
						$rstClass=mysql_query($sqlClass);
						$time=time();
						while ($rowClass=mysql_fetch_assoc($rstClass)) {
								
							
				?>
				<ul class="list-content">
					<?php
						$i=0;
						for(;$i<2;$i++){
							while($time>$rowClass['end_time']&&$rowClass['id']){
									$sqlclass="update giftClass set is_end=1 where id={$rowClass['id']}";
									mysql_query($sqlclass);
									$rowClass=mysql_fetch_assoc($rstClass);
								}
							if(!$rowClass['id']){
								break;
							}
					?>
					<li class="list-item">
						<a href="pro_info.php?class_id=<?php echo $rowClass['id'];?>">
								<img src="../public/uploads/s_<?php $img=explode(',',$rowClass['img']);echo $img[0]?>" title="<?php echo $rowClass['name'];?>" alt="<?php echo $rowClass['name'];?>" class="item-img">
						</a>
						
						<a class="item-header"><?php echo $rowClass['name'];?></a>
						<div class="donate-info">
							<p class="donate-content">
									已筹：<span class="m_num"><?php echo $rowClass['sum_money'];?></span>元
									<br>
									捐款人数：<span><?php echo $rowClass['user_num'];?>人</span>
							</p>
							<a href="pro_info.php?class_id=<?php echo $rowClass['id'];?> ">我要捐款</a>
						</div>
					</li>	
					<?php
							if($i==1||$rowClass=mysql_fetch_assoc($rstClass));
						}
					?>		
				</ul>
				<?php
						}
				?>

			</div>
			<div class="info-right clearfix">
				<div class="launch">
					<a href="launch_pro.php" class="initiating-pro">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-faqi"></use>
						</svg>
						<p>发起项目</p>
					</a>
					<a href="project_list.php" class="donate-money">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-donate-copy"></use>
						</svg>
						<p>我要捐助</p>
					</a>
				</div>
				<div class="flow">
					<h2>
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-liucheng-copy"></use>
						</svg>
						<span>项目流程</span>
					</h2>

					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-one"></use>
						</svg>
						<span>注册</span>
						<b>个人实名认证</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi2"></use>
						</svg>
						<span>发起</span>
						<b>实名用户发起项目</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi3"></use>
						</svg>
						<span>审核</span>
						<b>审核并确认项目</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi4"></use>
						</svg>
						<span>募款</span>
						<b>项目上线接受公众募款</b>
					</p>
					<p class="flow-item">
						<svg class="icon" aria-hidden="true">
							<use xlink:href="#icon-shuzi5"></use>
						</svg>
						<span>公示</span>
						<b>项目完成进行公示</b>
					</p>
				</div>
			</div>
		</div>

		
	</div>

	<div class="footer"  style="background:#eee;">
    <p>&copy;<script>document.write('2016-' + new Date().getFullYear())</script> 微益捐版权所有</p>
	</div>
	
</body>

</html>