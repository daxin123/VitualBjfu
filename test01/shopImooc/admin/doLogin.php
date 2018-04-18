<?php
//接收前端界面的参数
require_once '../include.php';
header("content-type:text/html;charset=utf-8");
//session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlag=$_POST['autoFlag'];
if($verify==$verify1)
{
    $sql="select * from imooc_admin where username='{$username}' and password='{$password}'";
    $row=checkAdmin($sql);
    if($row)
    {
        if($autoFlag)
        {
            setcookie("adminId",$row['id'],time()+7*24*3600);
            setcookie("adminName",$row['username'],time()+7*24*3600);
        }
        $_SESSION['adminName']=$row['username'];
        $_SESSION['adminId']=$row['id'];
        //header("location:index.php");
        alertMes("登陆成功", "index.php");
    }else{
        alertMes("登陆失败，重新登录", "login.php");
    }
}else {
    alertMes("验证码错误", "login.php");
}