<?php
require_once 'helper.php';
require_once 'SqlHelper.php';
//dd($_GET);
$keyword_name=$_GET['keyword_name'];
$sql="select * from words where keyword_name='$keyword_name'";
//dd($sql);
$sqlHelper=new SqlHelper();
$res=$sqlHelper->execute_dql($sql);
if(mysql_num_rows($res)>0){
    echo "该词条已被创建！";
}elseif (empty($keyword_name)){
    echo "不能为空";
}else{
    echo "";
}
?>