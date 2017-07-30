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
		
<link href="/Application/Sun/assets/css/custom.css" rel="stylesheet">
<?php if (isset($_SESSION['success_message'])): ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['success_message'];unset($_SESSION['success_message']); ?>
	</div>
<?php endif; ?>
		<h1>已注册的用户列表</h1>
		<form method="post" class="form-inline table-form">
			<div class="form-group">
				<label for="id">编号：</label>
				<input type="text" class="form-control" name="id" id="id" placeholder="编号" value="<?php echo isset($_POST['id']) ? $_POST['id']:'';?>"/>
			</div>
			<div class="form-group">
				<label for="username">用户名：</label>
				<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($_POST['username']) ? $_POST['username']:'';?>" placeholder="用户名" />
			</div>
			<div class="form-group">
				<label>性别：</label>
				<label class="radio-inline">
					<input type="radio" name="sex" <?php if (isset($_POST['sex']) && $_POST['sex'] == 'male'): ?>checked="checked"<?php endif; ?> value="male" /> 男
				</label>
				<label class="radio-inline">
					<input type="radio" name="sex" <?php if (isset($_POST['sex']) && $_POST['sex'] == 'female'): ?>checked="checked"<?php endif; ?> value="female" /> 女
				</label>
			</div>
			<button type="submit" class="btn btn-primary">
				 搜索
			</button>
		</form>
		<div class="table-responsive">
			<table cellspacing="0" class="table table-condensed table-hover table-bordered table-striped">
			<tr>
				<th >编号</th>
				<th>用户名</th>
				<th>性别</th>
				<th>手机</th>
				<th>固定电话</th>
				<th>邮箱</th>
				<th>地址</th>
				<th>状态</th>
				<th>推广员码</th>
				<th>创建时间</th>
				<th>操作</th>
			</tr>
			<?php if(!empty($result_data)&&is_array($result_data)): ?>
				<?php foreach($result_data as $key=>$value):?>
					<tr>
						<td><?php echo ($result_data["id"]); ?></td>
						<td><?php echo ($result_data["username"]); ?></td>
						<td><?php echo ($result_data["sex"]); ?></td>
						<td><?php echo ($result_data["mobile"]); ?></td>
						<td><?php echo ($result_data["telephone"]); ?></td>
						<td><?php echo ($result_data["email"]); ?></td>
						<td><?php echo ($result_data["address"]); ?></td>
						<td><?php echo ($result_data["status"]); ?></td>
						<td><?php echo ($result_data["personcode"]); ?></td>
						<td><?php echo ($result_data["created"]); ?></td>
						<td>
							<div class="btn-group" role="group" aria-label="...">
								<a class="btn btn-primary" href="/PHP/index.php?controller=Score&action=user_scores&id=<?php echo $value['id'];?>&username=<?php echo $value['username'];?>">
									 成绩
								</a>
								<?php if($value['status']==2):?>
									<a href="javascript:void(0);" class="btn btn-warning change-status" data-id=<?php echo $value['id']?> data-status="1">
										 禁用
									</a>
								<?php else: ?>
									<a href="javascript:void(0);" class="btn btn-warning change-status" data-id=<?php echo $value['id']?> data-status="2">
										 启用
									</a>
								<?php endif;?>
								<a class="btn btn-warning" href="/PHP/index.php?controller=User&action=edit_user&id=<?php echo $value['id'] ?>">
									 修改
								</a> 
								<a href="javascript:"  class="btn btn-danger delete-user" data-id="<?php echo $value['id'] ?>">
									 删除
								</a>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			</table>
		</div>
		<a href="/Sun/User/register" class="btn btn-primary">我要注册</a>
		<a href="/Sun/User/login" class="btn btn-primary">重新登录</a>
	</body>
	<script type="text/javascript" src="/PHP/assets/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			
			$('.delete-user').click(function(){
				$.ajax({
					type : 'post',
					url : '/PHP/index.php?controller=User&action=delete_user',
					//async : true,
					
					data: { id : $(this).attr('data-id') },
					success : function(data){
						var data = JSON.parse(data);
						alert(data.message);
						if (0 == data.code) {
							window.location.reload();
						}

					}
				});
			});
			$('.change-status').click(function(){
				$.ajax({
					async : true,
					type : 'post',
					url : '/PHP/index.php?controller=User&action=change_status',
					dataType : 'json',
					data : {id: $(this).attr('data-id'),status: $(this).attr('data-status')},
					success : function(data){
						//var data = JSON.parse(data);
						alert(data.message);
						if (0 == data.code){
							window.location.reload();
						}
					}
				});
			});
			$('.sex').dblclick(function (){
				if($(this).prop(checked)){
					$(this).prop(checked,false)
				}
			});
			
			
		});	
	</script>
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