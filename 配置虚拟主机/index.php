<?php 
	/*
	配置虚拟主机
	
	1. conf\httpd.conf 里面
	LoadModule vhost_alias_module modules/mod_vhost_alias.so的注释去掉
	Include conf/extra/httpd-vhosts.conf的注释去掉
	
	2. conf\extra\httpd-vhosts.conf
	<VirtualHost *:80>
		ServerAdmin webmaster@test.com
		DocumentRoot "D:\stone\php-junior\stone\note"
		ServerName www.test.com
	#    ErrorLog "logs/dummy-host2.example.com-error.log"
	#    CustomLog "logs/dummy-host2.example.com-access.log" common
		DirectoryIndex index.php
		<Directory "D:\stone\php-junior\stone\note">
			Options Indexes FollowSymLinks
			AllowOverride None
			Require all granted
		</Directory>
	</VirtualHost>
	
	3. 配置hosts
	C:\Windows\System32\drivers\etc\hosts
	127.0.0.1 www.test.com
	*/
	
	/*
	表单提交
	1. $_GET超全局数组用于接受表单通过get方式提交的数据
	2. $_POST超全局数组用于接受表单通过post方式提交的数据
	3. $_REQUEST超全局数组用于接受表单通过get或post方式提交的数据
	*/
	
	/*
	session
	session是保存在服务器上的用户信息
	
	cookie
	cookie是保存在客户端的用户信息
	
	1.session_start();开启session
	2.$_SESSION超全局数组用于使用session
    3.session_destroy();用于销毁session
	*/
	
	/*
	补充内容
	1. $_SERVER超全局数组用于获取请求信息，其中$_SERVER['SERVER_ADDR']表示服务器ip地址，$_SERVER['SERVER_PORT']表示服务器端口号，$_SERVER['REMOTE_ADDR']表示客户端ip地址
	*/
	
	/*echo '<pre>';
	print_r(getdate()['year']);
	echo '<pre>';
	$string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	echo strlen($string);
	echo '<br/>';
	echo $string[mt_rand(0, strlen($string) - 1)];
	echo '<br/>';*/