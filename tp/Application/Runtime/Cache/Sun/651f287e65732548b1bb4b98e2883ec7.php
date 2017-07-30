<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>添加</title>
		<style type="text/css">
			.label{
				width: 100px;
				text-align: right;
				display: inline-block;
			}
		</style>
	</head>
	<body>
		<h1>给<?php echo isset($_GET['username']) ? $_GET['username'] : ''; ?>添加分数</h1>
		<form method="post" action="">
			<input type="hidden" value="<?php echo $_GET['user_id']; ?>" name="user_id" />
			<?php if (!empty($subject_config) && is_array($subject_config)): ?>
				<?php foreach ($subject_config as $key => $value): ?>
					
					<div>
						<label class="label">科目：</label>
						<input type="hidden" value="<?php echo $key ?>" name="subject[<?php echo $key; ?>]" />
					</div>
					<div>
						<label class="label">分数：</label>
						<input type="text" name="score[<?php echo $key; ?>]"  placeholder="分数" value="<?php echo isset($_POST['score'][$key]) ? $_POST['score'][$key] : ''; ?>" />
					</div>
					<div>
						<label class="label">年份：</label>
						<select name="year[<?php echo $key; ?>]">
							<?php for ($i = date('Y');$i >= 2010;$i--): ?>
								<option <?php echo $i; ?> <?php if (isset($_POST['year'][$key]) && $_POST['year'][$key] == $i): ?>selected="selected"<?php endif; ?>><?php echo $i; ?></option>
							<?php endfor; ?>
						</select>
					</div>
					<div>
						<label class="label">月份：</label>
						<select name="month[<?php echo $key; ?>]">
							<?php for ($i = 1;$i <= 12;$i++): ?>
								<option <?php echo $i; ?> <?php if ((isset($_POST['month'][$key]) && $_POST['month'][$key] == $i) || $i == intval(date('m'))): ?>selected="selected"<?php endif; ?>><?php echo $i; ?></option>
							<?php endfor; ?>
						</select>
					</div>
					<br/>
					
				<?php endforeach; ?>
			<?php endif; ?>
			<div style="margin-left: 100px;">
				<input type="submit" value="提交" />
			</div>
		</form>
	</body>
</html>