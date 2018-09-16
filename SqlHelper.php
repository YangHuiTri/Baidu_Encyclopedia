<?php
header("Content-Type:text/html;charset=utf-8");
class SqlHelper{
    public $conn;
    public $db="baidu";
    public $host="localhost";
    public $user="root";
    public $password="root";
    public function __construct()
    {
        $this->conn=mysql_connect($this->host,$this->user,$this->password);
        if(!$this->conn){
            die("连接失败".mysql_error());
        }
        mysql_query("set names utf8");
        mysql_select_db($this->db);
    }
    public function execute_dql($sql){
        $res=mysql_query($sql,$this->conn)or die("出错了".mysql_error());
        return $res;
    }
    public function execute_dml($sql){
        $b=mysql_query($sql,$this->conn);
        if(!$b){
            return 0;
        }else if(mysql_affected_rows($this->conn)>0){
            return 1;   //表示成功
        }else{
            return 2;   //表示没有行收到影响
        }
    }
    //执行关闭语句
    public function close_connect(){
        if(!empty($this->conn)){
            mysql_close($this->conn);
        }
    }
}
?>