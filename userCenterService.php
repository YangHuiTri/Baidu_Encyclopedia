<?php
require_once 'SqlHelper.php';
function getpageCount($pageSize){
    $id=$_SESSION['user_id'];
    $sql="select count(id) from words where user_id=$id";
    $sqlHelper=new SqlHelper();
    $res=$sqlHelper->execute_dql($sql);
    if($row=mysql_fetch_row($res)){
        $pageCount=ceil($row[0]/$pageSize);
    }
    //释放资源关闭连接
    mysql_free_result($res);
    // $sqlHelper->close_connect();
    return $pageCount;
}
?>