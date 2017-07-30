<?php

if (!('User' == $controller && in_array($action, ['login', 'submit_login', 'register']))) {
		if (!isset($_SESSION['user_info'])) {
			$_SESSION['error_messages'] = '请登录！';
			//U('Sun/User/login');
			//$this-> success('你还没有登录！', '/Sun/User/login');
			//header('location:/Sun/User/login');
			//header('Location:'.U('Sun/User/login').'',false);
			//echo "<script language='javascript' type='text/javascript'>";
			// echo "window.open='".U('Sun/User/login')."'";
			// echo "</script>";
			$_SESSION['controller'] = $controller;
			$_SESSION['action'] = $action;
			//redirect('/Sun/User/login');
		}
	}

?>