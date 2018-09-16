<?php
require_once 'helper.php';
require_once 'SqlHelper.php';
session_start();
$id=$_SESSION['word_id'];
//dd($_SESSION['word_id']);
$sql="update words set keyword_count=keyword_count+1 where id=$id";
//dd($sql);
$sqlHelper=new SqlHelper();
$b=$sqlHelper->execute_dml($sql);
//dd($b);
if($b==1){
    $sql="select * from words where id=$id";
    $res=$sqlHelper->execute_dql($sql);
    //dd($res);
    $row=mysql_fetch_assoc($res);
    echo $row['keyword_count'];
}
?>