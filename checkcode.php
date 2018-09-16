<?php
//使用php绘图技术，画出自己的验证码
$checkCode="";
for($i=0;$i<4;$i++){
    $checkCode.=dechex(rand(1,15));
}
//存到session中
session_start();
$_SESSION['checkcode']=$checkCode;
//创建画布
$im=imagecreatetruecolor(80,30);

$white=imagecolorallocate($im,255,255,255);
for($j=0;$j<15;$j++){          //画干扰线
    imageline($im,rand(0,80),rand(0,30),rand(0,80),rand(0,30),
        imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255)));
}
imagestring($im,rand(1,5),rand(0,50),rand(0,20),$checkCode,$white);
header("content-type:image/png");
imagepng($im);
imagedestroy($im);
?>