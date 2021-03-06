<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title>注册</title>
		<!-- Bootstrap -->
		<link href="/Application/Sun/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Application/Sun/assets/css/register.css" rel="stylesheet">
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
			<form method="post" action="">
				<h2>用户注册</h2>
				<div class="form-group">
					<label for="username" class="col-sm-3 control-label">用户名：</label>
					<div class="col-sm-6">
						<input type="text" name="username" id="username" placeholder="用户名" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" class="form-control required" required autofocus />
						
					</div>
					<span class="red-font high"> *</span>
					<p class="help-block" id="username-text"></p>
				</div>
				<div class="form-group">
					<label for="password" class="col-sm-3 control-label">密码：</label>
					<div class="col-sm-6">
						<input type="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" id="password" class="form-control required" placeholder="密码" required />
					</div>
					<p class="help-block" id="password-text"></p>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">确认密码：</label>
					<div class="col-sm-6">
						<input type="password" name="re_password" value="<?php echo isset($_POST['re_password']) ? $_POST['re_password'] : ''; ?>" class="form-control required" id="re_password" placeholder="确认密码" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">手机号码：</label>
					<div class="col-sm-6">
						<input type="text" name="mobile" value="<?php echo isset($_POST['mobile']) ? $_POST['mobile'] : ''; ?>" class="form-control" placeholder="手机号码" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">固定电话：</label>
					<div class="col-sm-6">
						<input type="text" name="telephone" value="<?php echo isset($_POST['telephone']) ? $_POST['telephone'] : ''; ?>" class="form-control" placeholder="固定电话" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">邮箱：</label>
					<div class="col-sm-6">
						<input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" class="form-control" id="email" placeholder="邮箱" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">地址：</label>
					<div class="col-sm-6">
						<input type="text" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>" class="form-control" placeholder="地址" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">推广员码：</label>
					<div class="col-sm-6">
						<input type="text" name="personcode" value="<?php echo isset($_POST['personcode']) ? $_POST['personcode'] : ''; ?>" class="form-control" placeholder="推广员码" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<div class="btn-group" role="group" aria-label="...">
							<button type="submit" class="btn btn-lg btn-primary" id="submit-register">注册</button>
							<a type="button" class="btn btn-lg btn-primary" href="/Sun/User/login">登录</a>
						</div>
					</div>
				</div>
			</form>
		</div><!-- /container -->
		<script type="text/javascript" src="/Application/Sun/assets/js/jquery-3.2.0.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/Application/Sun/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(() => {
				$('#username').keyup(() => {
					
					$.ajax({
						url: '/Sun/User/get_register_user_status',
						type: 'post',
						dataType: 'json',
						data: { 'username' : $('#username').val() },
						success: data => {
							if (0 == data.code) {
								$('#username-text').removeClass('red-font').addClass('green-font');
								$('#submit-register').attr('disabled', false);
							} else {
								$('#username-text').removeClass('green-font').addClass('red-font');
								$('#submit-register').attr('disabled', 'disabled');
							}
							$('#username-text').html(data.message).show();
						}
					});
				});
				//查询出用户名是否可用
				
	           	$('form :input').blur(function(){
	             var $parent = $(this).parent();
	             $parent.find(".formtips").remove();
	             //验证用户名
	             if( $(this).is('#username') ){
	                    if( this.value=="" || this.value.length < 6 ){
	                        var errorMsg = '请输入至少6位的用户名.';
	                        $parent.append('<span class="red-font formtips onError">'+errorMsg+'</span>');
	                    }else{
	                        var okMsg = '输入正确.';
	                        $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
	                    }
	             }
	             //验证邮件
	             if( $(this).is('#email') ){
	                if( this.value=="" || ( this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value) ) ){
	                      var errorMsg = '请输入正确的E-Mail地址';
	                      $parent.append('<span class="formtips onError red-font">'+errorMsg+'</span>');
	                }else{
	                      var okMsg = '输入正确.';
	                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
	                }
	             }
	             //验证重复密码
	             if( $(this).is('#re_password') ){
	                if( this.value=="" || ( this.value!= $('#password').val() ) ){
	                      var errorMsg = '重复密码与原密码不相同';
	                      $parent.append('<span class="formtips onError red-font">'+errorMsg+'</span>');
	                }else{
	                      var okMsg = '输入正确.';
	                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
	                }
	             }


	             //验证密码
	             if( $(this).is('#password') ){
	                if( this.value=="" || ( this.value.length < 6 ) ){
	                      var errorMsg = '密码至少6位';
	                      $parent.append('<span class="formtips onError red-font">'+errorMsg+'</span>');
	                }else{
	                      var okMsg = '密码有效';
	                      $parent.append('<span class="formtips onSuccess">'+okMsg+'</span>');
	                }
	             }



		        }).keyup(function(){
		           $(this).triggerHandler("blur");
		        }).focus(function(){
		             $(this).triggerHandler("blur");
		        });//end blur

			});
		</script>
	</body>
</html>