<?php
/* echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<pre>';
print_r($_FILES);
echo '</pre>';
 */
$dir = 'upload/images/'.date('Y-m-d');
if (!is_dir($dir)) {//文件夹是否存在
    mkdir($dir, '0777', true);//创建文件夹，赋予最高权限
}

$images = [];
foreach ($_FILES['image']['name'] as $key => $value) {
    $name = uniqid().'.'.pathinfo($value)['extension'];
    //根据时间生成唯一id，[dirname]:返回文件路径中的目录部分[basename]:返回文件路径中文件名的部分[
    //extension]:返回文件路径中文件的类型的部分

    if (move_uploaded_file($_FILES['image']['tmp_name'][$key], $dir.'/'.$name)) {
    //规定要移动的文件。规定文件的新位置
        echo '文件上传成功';
        $images[] = $dir.'/'.$name;
    } else {
        echo '文件上传失败';
    }
}

foreach ($images as $val){
echo '<img src="'.$val.'">'; 
}