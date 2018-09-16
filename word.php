<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>创建词条</title>
    <script type="text/javascript">
        function check() {
            var keyword_name=document.getElementById('name1').value;
            var xhr=new XMLHttpRequest();
            xhr.onreadystatechange=function () {
                if(xhr.readyState==4){
                    //alert(xhr.responseText);
                    //document.body.innerHTML+=xhr.responseText;
                    document.getElementById('check').innerHTML=xhr.responseText;
                    document.getElementById('check').style.color="gray";
                }
            }
            xhr.open('get','./check.php?keyword_name='+keyword_name);
            xhr.send(null);
        }
        function  check1() {
            var value=document.getElementById("check");
            if(value.innerText.length==0){
                return true;
            }
            return false;
        }
        function  check2() {
            var content=document.getElementById("content");
            if(content.value.length==0){
                content.value="不能为空";
                // content.style.color="red";
                return false;
            }
            return true;
        }
        function  check3() {
            var wenxian=document.getElementById("wenxian");
            if(wenxian.value.length==0){
                wenxian.value="不能为空";
                // wenxian.style.color="red";
                return false;
            }
            return true;
        }
        function  checkAll() {
            var a=check1();
            var b=check2();
            var c=check3();
            return a&&b&&c;
        }
        </script>
<style type="text/css">
body{width:960px;margin: 0 auto;}
header{height:90px;}
.foot{  margin:auto;  text-align:center;  }
.txt{  width:300px;  height:25px;  margin-bottom: 10px;  }
#slt{  width:130px;  height:25px;  }
.in{  width:400px;  height:25px;  magin-bottom:3px;  }
.images{  float:left;  }
</style>
</head>
<body>
<div>
<header>
<img src="images\baidu2.png" height="75" />
<div class="ciT" style=" position:relative;top:-35px; left: 240px">
    <form action="baiduziye.php" method="post">
	<input type="text" class="in" name="word" id="name3">&nbsp;&nbsp;
    <input type="submit" value="进入词条" class="btn btn-primary"/>&nbsp;&nbsp;
    <input type="reset" class="btn" value="搜索词条"/>
</div>
<div class="hr" style=" position:relative;top: -20px"><hr /></div>
</header>
<div class="center">
<ul>
<h1 class="title">创建词条</h1>
    <form>
        <?php
        require_once 'helper.php';
        session_start();
        //从登录验证页面获取$_SESSION['user_name']的值，若该值为空，则表示未登录，打回主页面登录
        if(empty($_SESSION['user_name'])){
            header("Location:baidu.php?error=您还未登录，请先登录！");
        }
        ?>
    </form>
    <form onsubmit="return checkAll()"  action="wordProcess.php" method="post" >
        <li><label>词&nbsp;&nbsp;条&nbsp;&nbsp;名</label><input type="text" name="name" class="txt" id="name1" onblur="check()"><span id="check"></span></li>
        <li>
            <label>主&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;题</label>
            <select id="slt"  name="title">
                <option>人物类词条</option>
                <option>产品品牌类词条</option>
                <option>医疗类词条</option>
                <option>企业类词条津</option>
                <option>其他</option>
            </select>
        </li>
        <li><label>内&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;容</label></li>
        <textarea id="content" name="body" cols="127" rows="10%" style="margin-bottom: 10px;" onblur="check2()"></textarea>
        <li>参考文献</li>
        <textarea id="wenxian" name="wenxian" cols="127" rows="10%" style="margin-top: 5px" onblur="check3()"></textarea>
</ul>
</div>
<div class="last">
<div class="foot">
  <input type="submit" class="btn" value="提交"/>&nbsp; &nbsp;
  <input type="reset" class="btn" value="取消"/>
</div>
</div>
</div>
</form>
</body>
</html>
