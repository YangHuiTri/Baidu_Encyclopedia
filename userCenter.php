<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<?php
require_once 'helper.php';
require_once 'userCenterService.php';
require_once 'SqlHelper.php';
header("Content-Type:text/html;charset=utf-8");
if(!empty($_GET['msg'])){
    $word=$_GET['msg'];
    echo "<script>window.alert('{$word}')</script>";
}
session_start();
if(empty($_SESSION['user_name'])){
    header("Location:baidu.php?error=您还未登录，请登录！");
    exit();
}
echo "个人中心，".$_SESSION['user_name'];
$name=$_SESSION['user_name'];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='baidu2.php?name=$name'>回到首页</a><br/>";
echo "<h3>我创建的词条</h3>";
$id=$_SESSION['user_id'];     //获取该登录用户的用户id

$pageSize=5;     //每页显示5个数据
$rowCount=0;     //共有多少条记录（从数据库获取）
$pageNow=1;      //显示第几页
if(!empty($_GET['pageNow'])){
    $pageNow=$_GET['pageNow'];
}
$pageCount=getpageCount($pageSize);     //数据的页数


$num=($pageNow-1)*$pageSize;
$sql="select * from words where user_id=$id limit $num,5";
$sqlHelper=new SqlHelper();
$res=$sqlHelper->execute_dql($sql);
$colums=mysql_num_fields($res);   //获取结果集的总列数
echo "<table width='700' border='1' cellspacing='0'><tr>";
for($i=0;$i<$colums;$i++){
    $field_name=mysql_field_name($res,$i);
    echo "<th>$field_name</th>";
}
echo "</tr>";
while($row=mysql_fetch_row($res)){
    echo "<tr>";
    for($i=0;$i<$colums;$i++){
        echo "<td>$row[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br/>";
//打印出上一页和下一页
echo "<a href='userCenter.php?pageNow=1'>首页</a>&nbsp;";
if($pageNow>1){
    $prepage=$pageNow-1;
    echo "<a href='userCenter.php?pageNow=$prepage'>上一页</a>&nbsp;";
}

if($pageNow<$pageCount){
    $nextpage=$pageNow+1;
    echo "<a href='userCenter.php?pageNow=$nextpage'>下一页</a>&nbsp;";
}
echo "<a href='userCenter.php?pageNow=$pageCount'>尾页</a>&nbsp;";
//显示当前页和共多少页
echo "当前第{$pageNow}页/共{$pageCount}页";
mysql_free_result($res);
$sqlHelper->close_connect();
?>
<form action="userCenter.php">
    跳转到：<input type="text" name="pageNow">
    <input type="submit" value="Go">
</form>
<br/>

</html>