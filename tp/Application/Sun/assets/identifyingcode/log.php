<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>form</title>
		<style type="text/css">
			.label{
				width: 100px;
				text-align: right;
				display: inline-block;
			}
		</style>
	</head>
	<body>
		<form method="get" action="" style="margin:0 auto;width:500px;">
			<div>
				<label class="label">用户名：</label>
				<input type="text" name="username"  placeholder="用户名" />
			</div>
			<div>
				<label class="label">密码：</label>
				<input type="password" name="password" />
			</div>
			<div>
				<label class="label">验证码：</label>
				<input type="text" name="code"  placeholder="验证码" />
			</div>
			<div>
				<label class="label"></label>
				<img src="./code.php" width="255" id="code" />
			</div>
			<div style="margin-left: 100px;">
				<input type="submit" value="提交" />
			</div>
		</form>
		<script type="text/javascript" src="./jquery-3.2.0.min.js"></script>
		<script type="text/javascript">
			$(() => {
				$('#code').click(() => {
					console.log($('#code').attr('src'));
					$('#code').attr('src', './code.php?random=' + Math.random());
				});
			});
		</script>
	</body>
</html>
<?php
	session_destroy();
?>