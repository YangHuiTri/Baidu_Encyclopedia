<?php
require_once 'helper.php';
require_once 'SqlHelper.php';
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$code=$_POST['code'];


if(empty($_POST['keep'])){
    if(!empty($user_name)||!empty($user_password)){
        setcookie("user_name",$user_name,time()-2);
        setcookie("user_password",$user_password,time()-2);
    }
}else{
    setcookie("user_name",$user_name,time()+24*3600*7);
    setcookie("user_password",$user_password,time()+24*3600*7);
}
$sql="select id,user_phone from user where user_name='$user_name' AND user_password=md5('$user_password')";
$sqlHelper=new SqlHelper();
$res=$sqlHelper->execute_dql($sql);
//dd($res);
session_start();
if($code==$_SESSION['checkcode']){
    if(mysql_num_rows($res) === 1){
        if($row=mysql_fetch_assoc($res)){
            //session_start();
            $_SESSION['user_id']=$row['id'];
            $_SESSION['user_phone']=$row['user_phone'];
            $_SESSION['user_name']=$user_name;
        }
        header("Location:baidu2.php?msg=登录成功！ & name=$user_name");
        exit();
    }else{
        header("Location:baidu.php?fail=登录失败！");
        exit();
    }
}elseif (empty($code)){
    header("Location:baidu.php?fail=未填写验证码");
    exit();
} else{
    header("Location:baidu.php?fail=登录失败！验证码错误");
    exit();
}

mysql_free_result($res);
$sqlHelper->close_connect();
?>