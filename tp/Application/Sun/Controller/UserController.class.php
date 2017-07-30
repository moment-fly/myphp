<?php
// 本类由系统自动生成，仅供测试用途
namespace Sun\Controller;
use Think\Controller;
class UserController extends Controller {


    public function login(){

    	if($_POST){
				$_SESSION['remember_form'] = $_POST;
				 $flag=true;
				if(empty($_POST['username'])){
					$flag=false;
					echo '用户名不能为空！';
				} 
				if(empty($_POST['password'])){
					$flag=false;
					echo '密码不能为空！';
				}
				
				 $code=I('post.identifyingcode');//获取从form表单传递(post或者get)过来的验证码
				    $verify = new \Think\Verify();//实例化Think的验证码类
				   

				if (empty($_POST['identifyingcode'])){
					$flag=false;
					echo '验证码不能为空！';
				 }else  if(!$verify->check($code,'')){  //调用验证方法
				        $flag=false;
				        echo '验证码错误！';
				    }
				// else if($_SESSION['code'] != $_POST['identifyingcode']){
				// 	$flag=false;
				// 	echo '验证码不正确！';
				// }
				if($flag){
					$Users = M("Users"); // 实例化User对象
					$condition['username'] = $_POST['username'];
					
					 // 把查询条件传入查询方法
					$user_info = $Users->where($condition)->select(); 
					$this->assign('user_info',$user_info);
					if (empty($user_info)){
						echo '用户名不存在';
						
					}else {
						  
						if(sha1(md5($_POST['password']))== $user_info[0]['password']){
							$_SESSION['user_info'] = $user_info;
							// echo '<pre>';
							// $this->success('数据添加成功！');
							// print_r($_SESSION);
							// echo '</pre>';
							//Session::set('username',$_POST['username']);
							header('location:/Sun/User/users');
						}else{
							//echo '密码错误！'; 
							$this->error('密码错误！');
						}
					}
				}
			}		
    	$this->display();
    }
    public function verify(){
    	 $verify = new \Think\Verify();
                $verify->entry();
    }
    public function register(){

    	if ($_POST){
				$flag=TRUE;
				if (empty($_POST['username'])){
					$flag=false;
					echo '用户名不能为空！';
				}
				if (empty($_POST['password'])){
					$flag=false;
					echo '密码不能为空！';
				}
				if ($_POST['password'] !=$_POST['re_password']){
					  $flag=false;
					echo '密码和重复密码不一样！';
				}
				if (empty($_POST['mobile'])){
					$flag=false;
					echo '电话不能为空！';
				}
				
				if ($flag){
					$Users = M("Users"); // 实例化User对象
					$condition['username'] = $_POST['username'];
					
					 // 把查询条件传入查询方法
					$user_info = $Users->where($condition)->select();
					if ($user_info) {
						
						$_SESSION['error_messages'] = '用户名已存在';
						echo $_SESSION['error_messages'];
						//echo "<script> alert('{$_SESSION['error_messages'][0]}'); </script>";
					} else {
							$data=[
							'username' => $_POST['username'],
							'password' => sha1(md5($_POST['password'])),
							'mobile' => $_POST['mobile'],
							'telephone' => $_POST['telephone'],
							'email' => $_POST['email'],
							'address' => $_POST['address'],
							'personcode' => $_POST['personcode'],
						];

						 $query_result = $Users->add($data); 
						if (FALSE == $query_result) {
							$_SESSION['error_messages'][0] = '用户注册失败';
							$this->error('用户注册失败');
							
						} else {
							$_SESSION['success_message'] = '用户注册成功';

							echo "<script> alert('用户注册成功'); </script>";
							header('Location:/Sun/User/login');
						}
					}
				}
				
			}
    	$this->display();
    }
    public function users(){
    		$Users = M("Users"); // 实例化User对象

    		if(!isset($_SESSION['user_info'])){
				header('Location:/Sun/User/login');
			}

			$conditions = [];
				/* 'fields' => ['id', 'username', 'realname', 'sex', 'status', 'nickname', 'age', 'created', 'modified']
			 */
			$conditions= [];
		
			if ($_POST) {
				if ($_POST['id']) {
					$conditions['id'] = $_POST['id'];
				}
				if ($_POST['username']) {
					$conditions['username'] = ['like','%'.$_POST['username'].'%'];
				}
				if (!empty($_POST['sex'])) {
					$conditions['sex'] = $_POST['sex'];
				}
				if (isset($_POST['age']) && '' != $_POST['age']) {
					$conditions['age'] = $_POST['age'];
				}
			}
			$conditions['order'] = ['id ASC', 'sex desc'];

			$result_data = $Users->where($conditions)->select(); 
			$this->assign('result_data',$result_data);
			$status=[
				'删除','禁用','启用'
			
			];
			$this->assign('status',$status);
			$sex=[
			'male'=>'男',
			'female'=>'女',
			];
			$name='male';
			$this->assign('name',$name);
			$this->assign('sex',$sex);
			$title = '用户列表';
			$this->assign('title',$title);
			$view = './Application/Sun/view/User/adduser.html';
			$this->assign('view',$view);
		layout(true);
    	$this->display();
    }
    public function adduser(){
    	layout(true);
    	$this->display();
    }
    public function logout(){
			session_destroy();
			header('Location:/Sun/User/login');
		}
	public function home_page(){
		$title = '个人首页';
		$this->assign('title',$title);
		layout(true);
    	$this->display();
	}
	public function  add_user(){
		if ($_POST){
				$flag=TRUE;
				if (empty($_POST['username'])){
					$flag=false;
					echo '用户名不能为空！';
				}
				if (empty($_POST['password'])){
					$flag=false;
					echo '密码不能为空！';
				}
				if ($_POST['password'] !=$_POST['re_password']){
					  $flag=false;
					echo '密码和重复密码不一样！';
				}
				if (empty($_POST['mobile'])){
					$flag=false;
					echo '电话不能为空！';
				}
				
				if ($flag){
					$Users = M("Users");
					$condition['username'] = $_POST['username'];
					
					 // 把查询条件传入查询方法
					$user_info = $Users->where($condition)->select();
					if ($user_info) {
						
						$_SESSION['err_messages'][] = '用户名已存在';
						
						echo "<script> alert('{$_SESSION['err_messages'][1]}'); </script>";
					} else {
						$data=[
							'username' => $_POST['username'],
							'password' => sha1(md5($_POST['password'])),
							'mobile' => $_POST['mobile'],
							'telephone' => $_POST['telephone'],
							'email' => $_POST['email'],
							'address' => $_POST['address'],
							'personcode' => $_POST['personcode'],
						];

						 $query_result = $Users->add($data); 
						if (FALSE == $query_result) {
							//$_SESSION['error_messages'][] = '用户注册失败';
							echo "<script> alert('用户添加失败'); </script>";
						} else {
							$_SESSION['success_message'] = '用户添加成功';
							header('Location:/Sun/User/users');
						}
					}
				}
				
			}
			$title = '添加用户';
			$this->assign('title',$title);
			layout(true);
    		$this->display();
	}
	public function edit_user(){
		$Users = M("Users");
		$condition['id'] = $_GET['id'];
		
		 // 把查询条件传入查询方法
		$result_data = $Users->where($condition)->select();
		$this->assign('result_data',$result_data);
		$title = '用户信息修改';
			$this->assign('title',$title);
			layout(true);
    		$this->display();
		
	}
	public function edit_user_info(){
		$Users = M('Users');
		$data = [
				'id' => $_POST['id'],
				'sex' => $_POST['sex'],
				'username' => $_POST['username'],
				
				'mobile' => $_POST['mobile'],
				'telephone' => $_POST['telephone'],
				'email' => $_POST['email'],
				'address' => $_POST['address'],
				'personcode' => $_POST['personcode'],
				];

				 $query_res = $Users->save($data); 
			if (false==$query_res){
				$this->error('修改失败！');
			}else{
				
				$this->success('修改成功！');
				header('Location:/Sun/User/users');
			}
	}
	public function delete_user(){
		$Users=M('Users');
		
		$data['id']=$_GET['id'];
		//echo $data;
		$query_res=$Users->where($data)->delete();
		if (false==$query_res){
			    
				$this->error('删除失败！');
			}else{
			$this->success('删除成功！');
			}
	}
	public function change_status(){
		$Users=M('Users');
		$condition['id'] = $_POST['id'];
		$data['status'] = $_POST['status'];
		$query_result = $Users->where($condition)->save($data);
			if (FALSE == $query_result) {
				echo json_encode([
					'code' => -2,
					'message' => '状态修改失败！',
				]);exit;
			} else {
				echo json_encode([
					'code' => 0,
					'message' => '状态修改成功！',
				]);exit;
			}
	}
	public function reset_password(){
		if ($_POST) {
			if (empty($_POST['old_password'])) {
				echo json_encode(['code' => -2, 'message' => '缺少合法原始密码']);exit;
			}
			if (empty($_POST['password'])) {
				echo json_encode(['code' => -3, 'message' => '缺少合法密码']);exit;
			}
			if (empty($_POST['re_password'])) {
				echo json_encode(['code' => -4, 'message' => '缺少合法确认密码']);exit;
			}
			if ($_POST['password'] != $_POST['re_password']) {
				echo json_encode(['code' => -5, 'message' => '密码和确认密码不相等']);exit;
			}
			
			$query_result = $this->user->update([
				'data' => [
					'password' => sha1(md5($_POST['password'])),
				],
				'where' => [
					'id' => $_SESSION['user_info']['id'],
					'password' => sha1(md5($_POST['old_password'])),
				],
			]);
			if ($user->query_affected_rows()) {
				echo json_encode(['code' => 0, 'message' => '密码重置成功']);
			} else {
				if ($_POST['old_password'] == $_POST['password']) {
					echo json_encode(['code' => -8, 'message' => '新密码和原密码相等']);
				} else {
					echo json_encode(['code' => -7, 'message' => '密码重置失败']);
				}
			}
			exit;
		} else {
			echo json_encode(['code' => -1, 'message' => '缺少请求数据']);exit;
		}
		
	}
	public function get_register_user_status(){
		if (empty($_POST['username'])) {
				echo json_encode(['code' => -1, 'message' => '用户名不能为空']);exit;
			}

			$Users = M("Users");
			$condition['username'] = $_POST['username'];
			
			 // 把查询条件传入查询方法
			$user_info = $Users->where($condition)->field('status')->find();

			
			//echo json_encode(['code' => 1,'message' => $user_info]);exit;
			// $query_result = $mysqli->query('select status from test_users where username=\''.$_POST['username'].'\' limit 1');

			// $user_info = $query_result->fetch_assoc();
			
			if (empty($user_info)) {
				echo json_encode(['code' => 0, 'message' => '用户名可以使用']);exit;
			} else {
				if (0 == $user_info['status']) {
					echo json_encode(['code' => -3, 'message' => '用户已被删除']);exit;
				} else if (2 == $user_info) {
					echo json_encode(['code' => -4, 'message' => '用户已被禁用']);exit;
				} else {
					echo json_encode(['code' => -2, 'message' => '用户名已存在']);exit;
				}
			}
	}
}
