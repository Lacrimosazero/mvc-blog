<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:39:09
  from "E:\wamp64\www\project1\mvc\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad9ad90a015_13527151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706238aaee300e7b416a879e9f686f4b3cc3a01d' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\admin\\login.html',
      1 => 1509611948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fad9ad90a015_13527151 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/login.css">
</head>
<body>
<form action="index.php?m=admin&f=login&a=check" method="post">
    <h2>登录</h2>
    <div class="form-group">
        <!--<div class="title">用户名</div>-->
        <input type="text" class="form-control"  placeholder="请输入用户名" name="aname">
    </div>
    <div class="form-group">
        <!--<div class="title">密码</div>-->
        <input type="password" class="form-control"  placeholder="请输入密码" name="apass">
    </div>
    <div class="form-group yanzheng">
        <input type="text" class="form-control"  placeholder="请输入验证码" name="imagecode">
        <div class="yanzhengma">
            <img src="index.php?m=admin&f=login&a=imagecode" onclick="this.src='index.php?m=admin&f=login&a=imagecode&num='+Math.random()*1000">
        </div>
    </div>
    <button type="submit" class="denglu">登录</button>
</form>
<a href="index.php?m=index" class="logo1">博客</a>
</body>
</html>
<?php }
}
