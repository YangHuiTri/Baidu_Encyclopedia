<?php
require_once 'helper.php';
require_once 'SqlHelper.php';
require_once 'common.php';
$title=$_POST['title'];
$name=$_POST['name'];
$body=$_POST['body'];
$wenxian=$_POST['wenxian'];
session_start();
$user_id=$_SESSION['user_id'];
$user_name=$_SESSION['user_name'];

//if(empty($title)||empty($name)||empty($body)||empty($wenxian)){
//    header("Location:word.php?error=有必填项为空");
//    exit();
//}
$sql="insert into `words` VALUES(null,'$user_id','$title','$name','$body','$wenxian',NOW(), '1' )";
$sqlHelper=new SqlHelper();
$b=$sqlHelper->execute_dml($sql);
if($b==1){
    header("Location:baidu2.php?msg=创建成功！&name=$user_name");
    exit();
}else{
    header("Location:word.php?error=创建失败！");
    exit();
}
$sqlHelper->close_connect();
?>