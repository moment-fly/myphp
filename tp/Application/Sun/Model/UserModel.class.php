<?php 
namespace Sun\Model;
use Think\Model;
class UserModel extends Model{
   protected $_validate = array(
     array('username','require','用户名必须！'), // 用户名必须   
   );
}
