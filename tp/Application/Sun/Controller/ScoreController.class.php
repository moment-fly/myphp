<?php
// 本类由系统自动生成，仅供测试用途
namespace Sun\Controller;
use Think\Controller;
class ScoreController extends Controller {
	public function user_scores(){
		$Scores = M("Scores"); // 实例化User对象
		$subject_config=["语文","数学","英语", "物理","化学" ];
		$this->assign('subject_config',$subject_config);
		$conditions['user_id']=$_GET['id'];

		$result_data = $Scores->where($conditions)->select();
		$this->assign('result_data',$result_data);
		$this->display();
	}
	public function add_score(){
		$subject_config=["语文","数学","英语", "物理","化学" ];
		$this->assign('subject_config',$subject_config);
		if (empty($_GET['user_id'])) {
				echo '缺少参数';exit;
			}
			$Scores=M('Scores');
			if ($_POST) {
				if (!empty($_POST['subject']) && is_array($_POST['subject'])) {
					foreach ($_POST['subject'] as $key => $value) {
						$data[$key]['user_id']=$_POST['user_id'];
						$data[$key]['score']=('' == $_POST['score'][$key] ? 0 : $_POST['score'][$value]);
						$data[$key]['subject']=$value;
						$data[$key]['year']=$_POST['year'][$value];
						$data[$key]['month']=$_POST['month'][$value];

					}
					$Scores->add($data[0]);
					$Scores->add($data[1]);
					$Scores->add($data[2]);
					$b=$Scores->add($data[3]);
					$q=$Scores->add($data[4]);

					if (FALSE == $query_result&& false== $b) {
						$this->error('增加失败！');
					} else {
						header('Location:/Sun/Score/user_scores?id='.$_GET['user_id'].'&username='.$_GET['username']);
					}
				} else {
				echo '提交数据不对';
				}
			
		}
		$this->assign('subject_config',$subject_config);
		$this->display();
	}
	public function delete_score(){
		$Scores=M('Scores');
	
		$data['id']=$_GET['id'];
		//echo $data;
		$query_res=$Scores->where($data)->delete();
		if (false==$query_res){
			    
				$this->error('删除失败！');
			}else{
			$this->success('删除成功！');
			}
	}
	public function edit_score(){

		$subject_config = ['语文', '数学', '英语', '物理', '化学'];
		$this->assign('subject_config',$subject_config);
		if (empty($_GET['id'])) {
				echo '缺少分数id';exit;
			}
		$Scores = M('Scores');

		$data['id']=$_GET['id'];
		$score_info = $Scores->where($data)->select();
		// echo '<pre>';
		// print_r($score_info);
		// echo '<pre>';
		$this->assign('score_info',$score_info);

		if (empty($score_info)) {
			$this->error('分数信息不存在');
				//echo '分数信息不存在';
			}
		$this->display();
	}
	public function update_score(){

		$Scores = M('Scores');

		$data['id']=$_POST['id'];
		$da['score']=$_POST['score'];
		$score_in = $Scores->where($data)->save($da);
		
		if (false==$score_in){
				$this->error('修改失败！');
			}else{
				$this->success('修改成功!');
				header('Location:/Sun/score/user_scores?id='.$_POST['user_id'].'&username='.$_POST['username']);
			}
	}

}