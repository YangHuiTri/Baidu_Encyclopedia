<?php
function getCookieVal($key){
    if(empty($_COOKIE[$key])){
        return "";
    }else{
        return $_COOKIE[$key];
    }
}
function CheckLogin(){
    session_start();
    if(empty($_SESSION['user_id'])){
        header("Location:baidu.php?error=您还未登录，请先登录！");
    }
}
?>