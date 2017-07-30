<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>登录</title>
		<!-- Bootstrap -->
		<link href="/Application/Sun/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Application/Sun/assets/css/login.css" rel="stylesheet">
		<link href="/Application/Sun/assets/css/custom.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<form class="form-signin" method="post" action="">
				<h2 class="form-signin-heading">用 户 登 录</h2>
				<div>
					<label for="username" class="sr-only">用户名：</label>
					<input type="text" name="username" id="username" placeholder="用户名" value="<?php echo isset($_SESSION['remember_form']['username']) ? $_SESSION['remember_form']['username'] : ''?>" class="form-control" required autofocus/>
					<p class="help-block" id="username-text"></p>
				</div>
				<div>
					<label for="password" class="sr-only">密码：</label>
					<input type="password" name="password"  value="<?php echo isset($_SESSION['remember_form']['password']) ? $_SESSION['remember_form']['password'] : ''?>" id="password" class="form-control" placeholder="密码" required/>
				</div>
				<div>
					<label for="username" class="sr-only">验证码：</label>
					<input type="text" name="identifyingcode" id="identifyingcode" placeholder="验证码" value="<?php echo isset($_SESSION['remember_form']['identifyingcode']) ? $_SESSION['remember_form']['identifyingcode'] : ''?>" class="form-control" />
				</div>
				<div>
					<label for="password" class="sr-only"></label>
					<img src="/Sun/User/verify" width="300" id="code">
					<!-- <img src="/Application/Sun/assets/identifyingcode/code.php" width="300" id="code"/> -->
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
				<a class="btn btn-lg btn-primary btn-block" href="/Sun/User/register">注册</a>
			</form>
		</div><!-- /container -->
		
		<script type="text/javascript" src="/Application/Sun/assets/js/jquery-3.2.0.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/Application/Sun/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(() => {
				$('#username').keyup(() => {
					$.ajax({
						url: '/PHP/User/get_user_status',
						type: 'post',
						dataType: 'json',
						data: { 'username' : $('#username').val() },
						success: data => {
							if (0 == data.code) {
								$('#username-text').removeClass('red-font').addClass('green-font');
							} else {
								$('#username-text').removeClass('green-font').addClass('red-font');
							}
							$('#username-text').html(data.message).show();
						}
					});
				});
				
				$('#code').click(() => {
					console.log($('#code').attr('src'));
					$('#code').attr('src', '/Sun/User/verify?random=' + Math.random());
				});
			});
		</script>
	</body>
</html>