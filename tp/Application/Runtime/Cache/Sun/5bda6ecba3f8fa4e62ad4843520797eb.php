<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title><?php echo ($title); ?></title>
		<!-- Bootstrap -->
		<link href="/Application/Sun/assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
			<!-- Static navbar -->
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">系统管理</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="<?php if ('User' == $controller): ?>active<?php endif; ?> dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户管理 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li <?php if ('User' == $_SESSION['controller'] && 'user_list' == $_SESSION['action']): ?> class="active" <?php endif; ?>><a href="/Application/Sun/User/user_list">用户列表</a></li>
								<li <?php if ('User' == $_SESSION['controller'] && 'add_user' == $_SESSION['action']): ?> class="active" <?php endif; ?>><a href="/Application/Sun/User/add_user">增加用户</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user_info']['username'] ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/Sun/User/home_page">个人首页</a></li>
								<li><a href="/Sun/index.php?controller=User&action=edit_user&id=<?php echo $_SESSION['user_info']['id'] ?>">修改信息</a></li>
								<li><a href="javascript:void(0);" data-toggle="modal" data-target="#reset-password-modal">修改密码</a></li>
								<li><a href="/Sun/User/logout">注销</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="container">
		<table>
<th>添加用户页面</th>
<td>张飞</td>

</table>
		</div><!--/.nav-collapse -->
		<div class="modal fade" id="reset-password-modal" tabindex="-1" role="dialog" aria-labelledby="resetPasswordLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="resetPasswordLabel">修改密码</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" id="re-password-form">
							<div class="form-group">
								<label for="old-password" class="col-sm-2 control-label">原密码</label>
								<div class="col-sm-10">
									<input type="password" name="old_password" class="form-control" id="old-password" placeholder="原密码" />
								</div>
							</div>
							<div class="form-group">
								<label for="password" class="col-sm-2 control-label">新密码</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="password" placeholder="新密码">
								</div>
							</div>
							<div class="form-group">
								<label for="re-password" class="col-sm-2 control-label">确认密码</label>
								<div class="col-sm-10">
									<input type="password" name="re_password" class="form-control" id="re-password" placeholder="确认密码">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" class="btn btn-primary" id="re-password-submit">提交</button>
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<script type="text/javascript" src="/Application/Sun/assets/js/jquery-3.2.0.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="/Application/Sun/assets/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(() => {
				$('#re-password-submit').click(() => {
					$('#re-password-form').find('.alert-danger').remove();

					const old_password = $('#old-password').val();
					const password = $('#password').val();
					const re_password = $('#re-password').val();

					let error_string = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

					let flag = true;
					if (!old_password) {
						flag = false;
						error_string += '<p>原密码不能为空</p>';
					}

					if (!password) {
						flag = false;
						error_string += '<p>密码不能为空</p>';
					}

					if (password == old_password) {
						flag = false;
						error_string += '<p>新密码和原密码相等</p>';
					}

					if (!re_password) {
						flag = false;
						error_string += '<p>确认密码不能为空</p>';
					}

					if (password != re_password) {
						flag = false;
						error_string += '<p>密码和确认密码要相等</p>';
					}

					error_string += '</div>';

					if (flag) {
						$.ajax({
							url: '/User/reset_password',
							type: 'post',
							dataType: 'json',
							data: { old_password : old_password, password : password, re_password : re_password },
							success: function (data) {
								alert(data.message);
								if (0 == data.code) {
									window.location.href = '/User/logout';
								}
							}
						});
					} else {
						$('#re-password-form').prepend(error_string);
					}
					
					
				});
			});
		</script>
	</body>
</html>