<?php
/* Smarty version 3.1.30, created on 2017-11-03 07:47:03
  from "E:\wamp64\www\project1\mvc\template\index\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc1ef77428a3_20355050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d767ebc23b0f12c0c05baa7f2d1dc64b54fd67' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\index\\message.html',
      1 => 1509034468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/index/header.html' => 1,
  ),
),false)) {
function content_59fc1ef77428a3_20355050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:template/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="contain">
        <div class="contain-left">
            <ul>
                <li>
                    <a href="index.php?m=index&f=pinglun" target="right" class="on">
                        <i class="iconfont icon-icon"></i>
                        <span>评论</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=letter" target="right">
                        <i class="iconfont icon-youxiangyoujianxinjian"></i>
                        <span>信件</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=tougao" target="right">
                        <i class="iconfont icon-write"></i>
                        <span>投稿请求</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=like" target="right">
                        <i class="iconfont icon-xihuan"></i>
                        <span>喜欢和赞</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=guanzhu" target="right">
                        <i class="iconfont icon-guanzhu"></i>
                        <span>关注</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?m=index&f=money" target="right">
                        <i class="iconfont icon-money"></i>
                        <span>赞赏</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="contain-right">
            <iframe src="" frameborder="0" name="right"></iframe>
        </div>
    </div>

</main>
</body>
</html><?php }
}
