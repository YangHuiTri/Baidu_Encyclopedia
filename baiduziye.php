<form>
    <?php
    require_once 'helper.php';
    require_once 'SqlHelper.php';
    session_start();
    //从登录验证页面获取$_SESSION['user_name']的值，若该值为空，则表示未登录，打回主页面登录
    if(empty($_SESSION['user_name'])){
        header("Location:baidu.php?error=您还未登录，请先登录！");
    }

    $word=$_POST['word'];
    $conn=mysql_connect("localhost","root","root");
    if(!$conn){
        die("连接失败".mysql_error());
    }
    mysql_query("set names utf8");
    mysql_select_db("baidu");
    $sql="select * from words where keyword_name='$word'";
    //dd($sql);
    $res=mysql_query($sql,$conn);
    //dd($res);
    //dd(mysql_affected_rows($conn));
    $row=mysql_fetch_assoc($res);
    $username=$_SESSION['user_name'];
    $id=$row['id'];
    $_SESSION['word_id']=$id;
    //dd($id);
    //dd($username);
    if(mysql_affected_rows($conn)>0){
        //dd($row['keyword_name']);
        $keyword_name=$row['keyword_name'];
        $keyword_body=$row['keyword_body'];
        $keyword_wenxian=$row['keyword_wenxian'];
        $keyword_count=$row['keyword_count'];
        $user_id=$row['user_id'];
        $sql="select user_name from user where id=$user_id";
        $res=mysql_query($sql);
        $rows=mysql_fetch_assoc($res);
        $create_name=$rows['user_name'];
    }else{
        //dd($username);
        header("Location:baidu2.php?msg=暂未收录该词条！& name=$username");
    }

    ?>
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="baiduzhiye.css"rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <script src="./jquery.min.js"></script>
    <script src="./bootstrap.min.js"></script>
    <style type="text/css">   </style>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>
    </title>
    <script type="text/javascript">
        window.onload=function () {
            var fm=document.getElementsByTagName('form')[1];
            window.onsubmit=function (evt) {
                var fd=new FormData(fm);
                var xhr=new XMLHttpRequest();
                //var id=document.getElementById('id').value;
                xhr.onreadystatechange=function () {
                    if(xhr.readyState==4){
                        var str="♥";
                        str+=xhr.responseText;
                        document.getElementById('count').value=str;
                        //alert(xhr.responseText);
                    }
                }
                xhr.open('post','./ZANcheck.php');
                //xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
                xhr.send(fd);
                evt.preventDefault();
            }
        }
    </script>
</head>
<body>
<div class="container all" style=" margin-left: 100px;">
    <div id="heading">
        <form id="seachForm" action="baiduziye.php" method="post">
            <a href="baidu2.php?name=<?php echo $_SESSION['user_name']?>"/> <img src="images/baidu.jpg" ></a>
            <input  id="query" name="word" type="text">
            <input type="submit" value="进入词条" class="btn btn-primary ">
            <button type="button" class="btn btn-default">全站搜索</button>
            <a href="https://baike.baidu.com/help">帮助</a>
        </form>
    </div>
    <div id="text1">
        <div id="word1" style="font-size: 40px;"><?php echo $keyword_name;?></div>
        <div id="b">
            <form type="text" action="1001.php" method="post">
                 <input type="button" id="count" name="count" value="<?php echo "♥".$keyword_count;?>">
<!--                <span class="glyphicon glyphicon-thumbs-up" style="width: 20px;background-color: red"></span>-->

                <input type="submit" id="<?php echo $id;?>" style="margin-top: 2px;"name="zan" value="赞👍">
            </form>
        </div>
    </div>
    <div id="text2">
        <div id="word2" style="font-size: 20px;"><?php echo $keyword_body;?></div>
        <div id="word3" style="font-size: 50px;text-align: center;"><h3 style="margin-top: 100px;">词条创建者</h3><?php echo $create_name;?></div>
    </div>

    <div id="text5" style="font-size: 20px;text-align: left;"><pre><?php echo $keyword_wenxian;?></pre></div>

    <div id="text4">
        <div id="p1"><img  src="images/博物馆.jpg"></div>
        <div id="p2"><img  src="images/星球百科.jpg"></div>
        <div id="p3"><img  src="images/艺术百科.jpg"></div>
        <div id="p4"><img  src="images/星课堂.jpg"></div>
    </div>
    <div class="wgt-footer-main">
        <div class="content">
            <dl class="fresh">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-fresh"></em>新手上路</dt>
                <dd>
                    <div class="x"><a target="_blank" href="/usercenter/tasks#guide">成长任务</a></div>
                    <div class="x"><a target="_blank" href="/help#main01">编辑入门</a></div>
                    <div class="x"><a target="_blank" href="/help#main06">编辑规则</a></div>
                    <div class="x"><a target="_blank" href="/help#main05">百科术语</a></div>
                </dd>
            </dl>
            <dl class="question">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-question"></em>我有疑问</dt>
                <dd>
                    <div class="x"><a target="_blank" href="/user/question">常见问题</a></div>
                    <div class="x"><a target="_blank" href="https://aikefu.baidu.com/?product=bk001" nslog-type="10000003">在线客服</a></div>
                    <div class="x"><a target="_blank" href="http://tieba.baidu.com/f?ie=utf-8&amp;fr=bks0000&amp;">参加讨论</a></div>
                    <div class="x"><a target="_blank" href="/feedback">意见反馈</a></div>
                </dd>
            </dl>
            <dl class="suggestion">
                <dt><em class="cmn-icon cmn-icons cmn-icons_footer-suggestion"></em>投诉建议</dt>
                <dd>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=1">不良举报</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=2">词条申诉</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=6">投诉侵权</a></div>
                    <div class="x"><a target="_blank" href="http://help.baidu.com/newadd?prod_id=10&amp;category=5">封禁查询</a></div>
                </dd>
            </dl>
        </div>
        <div class="copyright" >©2017&nbsp;Baidu&nbsp;<a href="http://www.baidu.com/duty/" target="_blank">使用百度前必读</a>&nbsp;|&nbsp;<a href="http://help.baidu.com/question?prod_en=baike&amp;class=89&amp;id=1637" target="_blank">百科协议</a>&nbsp;|&nbsp;<a href="/operation/cooperation" target="_blank">百度百科合作平台</a>&nbsp;|&nbsp;<span>京ICP证666666号&nbsp;</span><img class="copyright-img" width="13" height="16" src="https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/copy_rignt_24.png"></div>
    </div>
</div>
</div>
</body>
</html>