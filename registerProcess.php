<?php
require_once 'SqlHelper.php';
require_once 'helper.php';
$name=$_POST['name'];
$phone_num=$_POST['phone_num'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];
if(empty($name)||empty($password)||empty($phone_num)){
    header("Location:register.php?error=有必填项为空");
    exit();
}
if($password!==$password_again) {
    header("Location:register.php?error=密码不一致");
    exit();
}
if(!preg_match('/^[0-9]{11}/', $phone_num)){
    return header('location: register.php?error=手机号只能填写11位数字');
}

$sql="insert into `user` VALUES(null,'$name',md5('$password'),NOW(),'$phone_number')";
$sqlHelper=new SqlHelper();
$b=$sqlHelper->execute_dml($sql);
if($b==1){
    header("Location:baidu.php?msg=注册成功，请登录");
    exit();
}else{
    header("Location:register.php?error=注册失败");
    exit();
}
$sqlHelper->close_connect();
?>