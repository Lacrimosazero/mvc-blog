<?php
/* Smarty version 3.1.30, created on 2017-11-02 08:18:58
  from "E:\wamp64\www\project1\mvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fad4f2302613_69711108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e718c1fcaf18275e0bc912d448d2bb3ca18e22c' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\index\\header.html',
      1 => 1509369241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fad4f2302613_69711108 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/header.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/footer.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/artical.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/message.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/attention.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/zhuye.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/shoucang.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/xihuan.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/qianbao.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/shezhi.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/zhuanti.css">
    <!--<link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo ICON_URL;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/function.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>


</head>
<body>
<!--头部-->
<header>
    <a href="" class="logo">博客</a>
    <div class="box"><a href="" class="write">个人中心</a></div>
    <div class="box"><a href="index.php?m=admin&f=reg" class="reg">注册</a></div>
    <div class="box"><a href="index.php?m=admin&f=login" class="login">登录</a></div>
    <!--<div class="box"><a href="index.php?m=admin&f=index" class="login">后台</a></div>-->
        <div class="box1"><a href="index.php?m=index" class="shouye" style="color: #10D07A">发现</a></div>
    <div class="box1"><a href="index.php?m=index&f=attention" class="shouye">关注</a></div>
    <div class="box1"><a href="index.php?m=index&f=message" class="shouye">消息</a></div>
    <div class="content">
        <ul>
            <li>
                <a href="index.php?m=index&f=zhuye">
                    <i class="iconfont icon-iconfontwo"></i>
                    <span>我的主页</span>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=shoucang">
                    <i class="iconfont icon-shoucang-copy-copy"></i>
                    <span>收藏的文章</span>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=xihuan">
                    <i class="iconfont icon-xihuan1"></i>
                    <span>喜欢的文章</span>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=qianbao">
                    <i class="iconfont icon-qianbao"></i>
                    <span>我的钱包</span>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=qianbao">
                    <i class="iconfont icon-qianbao"></i>
                    <span>购物车</span>
                </a>
            </li>
            <li>
                <a href="index.php?m=index&f=shezhi">
                    <i class="iconfont icon-shezhi"></i>
                    <span>设置</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="iconfont icon-tuichu"></i>
                    <span>退出</span>
                </a>
            </li>
        </ul>
    </div>
</header>
<?php }
}
