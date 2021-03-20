<?php
$id=$_POST["id"];
$pw=$_POST["pw"];
if($id=="我"&& $pw=="123")
echo "登录成功";
else
{
   echo "账号或密码错误";
}