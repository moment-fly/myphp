<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>修改分数</title>
		<style type="text/css">
			.label{
				width: 100px;
				text-align: right;
				display: inline-block;
			}
		</style>
	</head>
	<body>
		
		<h1>修改<?php echo $_GET['username']; ?>的<?php echo $score_info[0]['year']; ?>年<?php echo $score_info[0]['month']; ?>月<?php echo $subject_config[$score_info[0]['subject']]; ?>的分数</h1>
		<form method="post" action="/Sun/Score/update_score">
			<input type="hidden" value="<?php echo $_GET['id']; ?>" name="id" />
			<input type="hidden" value="<?php echo $score_info[0]['user_id']; ?>" name="user_id" />
			<input type="hidden" value="<?php echo $_GET['username'];?>" name="username" />
			<div>
				<label class="label">分数：</label>
				<input type="text" name="score"  placeholder="分数" value="<?php echo $score_info[0]['score']; ?>" />
			</div>
			<div style="margin-left: 100px;">
				<input type="submit" value="提交" />
			</div>
		</form>
	</body>
</html>