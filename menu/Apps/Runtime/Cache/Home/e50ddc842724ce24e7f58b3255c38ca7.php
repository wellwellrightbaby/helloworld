<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录界面</title>
    <!--登录页面样式-->
    <link href="/menu/Public/Home/Css/login.css" rel="stylesheet">
</head>
<body id="login_body">
    <form id="login_form" method="post" action="<?php echo U('Login/loginyz');?>">
        <h1>登录</h1>
        <fieldset id="login_inputs">
            用户名：<input id="login_username" name="username" type="text" placeholder="请输入您的用户名" autofocus required><br/>
            密 码： <input id="login_password" name="pwd" type="password" placeholder="请输入您的密码" required>
            <input id="login_submit" type="submit" value="登录">
            <input id="login_register" type="submit" onclick="window.open('/menu/index.php/Home/Register')" value="注册">
            <br/>
            <div class="add">
                <!--<a href="/menu/index.php/Home/Index">返回首页</a>-->
                <!--<a href="">忘记密码？</a>-->
                <!--&nbsp;&nbsp;<a href="/menu/index.php/Home/Register">注册</a>-->
            </div>
        </fieldset>

    </form>
</body>
</html>