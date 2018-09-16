<!doctype html><title>用户注册</title>
<html>
<head>
<nav id="menu"><img id="logo" src="images/baidu.jpg"  height="80" ></nav>
<Style>
#menu{position: relative;top: 3px; height: 80px;left:200px;}
#form1{position:absolute;left:18%;top:150px;height:230px;width:400px;align:center;font-size:18px;color:#333333;font-weight:bold;}
#div4{text-align:center;}
#u,#u2,#p1,#p2{width:300px;height:30px;font-size:18px;border:#999999 1px solid;padding:2px;margin-left:5px;}
#div1{display:block;text-align:right;top:50%;}
#zc{width:310px;height:50px;text-align:center;background:#3e89ed;font-size:18px;color:#FFFFFF;font-weight:bold;border:#999999 1px solid;padding:2px;}
</style>
<meta charset="utf-8">
<title>无标题文档</title>
    <script>
        window.onload=function ()
        {
            var oTxt=document.getElementById('u2');
            oTxt.onkeydown=function (ev)
            {
                var oEvent=ev||event;
                if(oEvent.keyCode!=8 && (oEvent.keyCode<48 || oEvent.keyCode>57)&&(oEvent.keyCode<96 || oEvent.keyCode>105)&&(			oEvent.keyCode<37 || oEvent.keyCode>40))
                {
                    return false;
                }
            };
        };
        function password(event){
            var pas1=document.getElementById("p1").value;
            var pas2=document.getElementById("p2").value;
            if(!(pas1==pas2)&&pas2!=""){
                alert("您两次输入的密码不一致，请重新输入！")
                return false;
            }
            else{
                window.open('http://www.baidu.com');
            }
        };
    </script>
</head>
<script type="text/javascript">
    function check() {
        var user_name=document.getElementById('u').value;
        var xhr=new XMLHttpRequest();
        xhr.onreadystatechange=function () {
            if(xhr.readyState==4){
                if(xhr.responseText!=""){
                    alert(xhr.responseText);
                }

                //document.body.innerHTML+=xhr.responseText;
                // document.getElementById('check').innerHTML=xhr.responseText;
                // document.getElementById('check').style.color="gray";
            }
        }
        xhr.open('get','./check2.php?user_name='+user_name);
        xhr.send(null);
    }
</script>
<body>
<div id="f">
<form id="form1" action="registerProcess.php" method="post" >
    <div id="div1">用户名<input id="u" type="text" name="name" placeholder="请输入用户名" onblur="check()"/><span id="check"></span></div><br>
    <div id="div1">手机号<input id="u2" type="text" name="phone_num" placeholder="请输入手机号码"/></div><br>
    <div id="div1"> 密码 <input id="p1" type="password" name="password" placeholder="请输入密码"/></div><br>
    <div id="div1"> 确认密码 <input id="p2" type="password" name="password_again" placeholder="请再次输入密码"/></div><br><br>
	<div id="div1"><input id="zc" type="submit" value="注册" onclick='password()'/></div>
</form>
    <form>
    <?php
    //接收创建词条失败的返回值
    if(!empty($_GET['error'])){
        $word=$_GET['error'];
        echo "<script>window.alert('{$word}')</script>";
    }
    ?>
    </form>
</div>
</body>
</html>
