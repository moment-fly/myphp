<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
		<title><?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>的成绩列表</title>
		<!-- Bootstrap -->
		<link href="/Application/Sun/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/Application/Sun/assets/css/user_score.css" rel="stylesheet">
		<script type="text/javascript" src="/Application/Sun/assets/js/jquery-3.2.0.min.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<h1><?php echo I('get.username') ?>的成绩列表</h1>
		<a href="/Sun/Score/add_score?user_id=<?php echo $_GET['id']; ?>&username=<?php echo $_GET['username']; ?>" class="btn btn-primary">添加成绩</a>
		<a style="float:right;" href="/Sun/User/users" class="btn btn-primary">返回</a>
		<div class="table-responsive">
			<table cellspacing="0" class="table table-hover">
				<tr>
					<th>编号</th>
					<th>分数</th>
					<th>科目</th>
					<th>年</th>
					<th>月</th>
					<th>操作</th>
				</tr>
				<?php if (!empty($result_data) && is_array($result_data)): ?>
				<?php if(is_array($result_data)): $i = 0; $__LIST__ = $result_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						<td><?php echo ($vo["id"]); ?></td>
						<td><?php echo ($vo["score"]); ?></td>
						<td><?php echo ($subject_config[$vo['subject']]); ?></td>
						<td><?php echo ($vo["year"]); ?></td>
						<td><?php echo ($vo["month"]); ?></td>
							<td>
								<a href="/Sun/Score/edit_score?id=<?php echo ($vo["id"]); ?>&username=<?php echo $_GET['username']; ?>">修改</a>
								<a href="/Sun/Score/delete_score?id=<?php echo ($vo["id"]); ?>" >删除</a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				<?php else: ?>
					<tr>
						<td colspan="6">记录不存在</td>
					</tr>
				<?php endif; ?>
			</table>
		</div>
		<script type="text/javascript" src="/Application/Sun/assets/js/jquery-3.2.0.min.js"></script>
	<script type="text/javascript">
		$(function(){
			
			$('.delete-score').click(function(){
				$.ajax({
					type : 'post',
					url : '/PHP/index.php?controller=Score&action=delete_score',
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

		});	
			

	</script>
	</body>
</html>