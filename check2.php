<?php
require_once 'helper.php';
require_once 'SqlHelper.php';
//dd($_GET);
$user_name=$_GET['user_name'];
if (empty($user_name)){
    echo "不能为空";
}else{
    $sql="select * from user where user_name='$user_name'";
//dd($sql);
    $sqlHelper=new SqlHelper();
    $res=$sqlHelper->execute_dql($sql);
    if(mysql_num_rows($res)>0){
        echo "用户名已存在";
    }else{
        echo "";
    }
}

?>