<?php
/* Smarty version 3.1.30, created on 2017-11-03 07:52:59
  from "E:\wamp64\www\project1\mvc\template\index\qianbao.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc205bdac629_25253971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2544a2b701e418bb8a1bbaa7dc7f1050d25851' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\index\\qianbao.html',
      1 => 1509084264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/index/header.html' => 1,
  ),
),false)) {
function content_59fc205bdac629_25253971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:template/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
    <div class="qianbaoMessage">
        <div class="user">
            <a class="photo"></a>
            <div class="username">
                <div class="name">吟游诗人</div>
                <a href="" class="phone">已绑定手机</a>
            </div>

        </div>
        <div class="middle">
            <span>账户余额</span>
            <span>0</span>
            <span>.00元</span>
            <div class="btn">
                <div class="chongzhi"><a href="">充值</a></div>
                <div class="tixian"><a href="">提现</a></div>
                <div class="warn">当前余额不足</div>
            </div>
        </div>
        <div class="message">
            <div>每次提现最小额度为￥100.00</div>
            <div>每次提现收取5%手续费</div>
            <div>提现会在3-5个工作日内到账</div>
            <a href="">提现遇到问题？</a>
            <a href="">提现手续费是怎么收取的？</a>
        </div>
    </div>

    <!--列表-->
    <ul class="moneyMessage">
        <li>
            <div class="time">时间</div>
            <div class="type">类型</div>
            <div class="details">详情</div>
            <div class="amount">金额</div>
            <div class="remark">状态</div>
        </li>
    </ul>
</main>


</body>
</html><?php }
}
