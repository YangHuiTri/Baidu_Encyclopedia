<?php
/**
 * Created by PhpStorm.
 * User: QXY
 * Date: 2017/12/6
 * Time: 14:02
 */
//引入帮助文件
require_once 'helper.php';
require_once 'SqlHelper.php';

//获取数据库连接
$conn=mysql_connect("localhost","root","root");
//判断是否连接成功
if(!$conn){
  die("连接失败".mysql_error());
}
//字符编码
mysql_query("set names utf8");
//选择数据库
mysql_select_db("baidu");
//sql语句
$sql="select keyword_name from `words` order by keyword_count DESC limit 1";
//此时$res是资源型的数据
$res=mysql_query($sql,$conn);
//dd($res);
//判断有多少数据
//$row=mysql_fetch_assoc($res);
//dd(mysql_fetch_assoc($res));
if(mysql_affected_rows($conn)>=0){
 //结果集数组
  $headted_keyword=array();
  while($row = mysql_fetch_array($res,MYSQL_ASSOC))
  {
    $headted_keyword[]=$row;
  }
//  dd($headted_keyword);
 //总记录数
//  $num_rows = mysql_num_rows($res);
//  echo $num_rows;
  //把php数组格式转换成 json 格式的数据
  $headted_keyword_json= json_encode($headted_keyword,true);
  echo $headted_keyword_json;

}else{
  header("Location:baidu2.php?msg=暂未收录该词条！& name=$username");
}

?>