<?php
/* Smarty version 3.1.30, created on 2017-11-03 07:47:11
  from "E:\wamp64\www\project1\mvc\template\index\zhuye.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc1effca8110_48736487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a297d9dd3d714a8114c5aec3fac0efbbdfd18d7' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\index\\zhuye.html',
      1 => 1509068788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/index/header.html' => 1,
  ),
),false)) {
function content_59fc1effca8110_48736487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:template/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main>
    <div class="zhuyeLeft">
        <div class="mainTop">
            <a href="" class="photo">
                <img src="" alt="">
            </a>
            <div class="mainRight">
                <a href="" class="name">吟游诗人</a>
                <div class="info">
                    <ul>
                        <li>
                            <a href="">
                                <span>0</span><br>
                                <span>关注</span>
                                <span class=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>0</span><br>
                                <span>粉丝</span>
                                <span class=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>0</span><br>
                                <span>文章</span>
                                <span class=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>0</span><br>
                                <span>字数</span>
                                <span class=""></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span>0</span><br>
                                <span>收获喜欢</span>
                                <span class=""></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--选项卡-->
        <!--整体构局说明，用ul完成按钮的横向布局，用div完成三个内容框架的垂直布局（类似于类表），然后将三个内容框架全隐藏，通过下面的:first-child属性只将第一个框架内容显示出来-->
        <div class="tab">
            <div class="tab_menu">
                <ul>
                    <li class="on iconfont icon-wenzhang">&nbsp;&nbsp;文章</li>
                    <li class="iconfont icon-dongtai1">&nbsp;&nbsp;动态</li>
                    <li class="iconfont icon-pinglun">&nbsp;&nbsp;最新评论</li>
                    <li class="iconfont icon-jichutubiao-">&nbsp;&nbsp;热门</li>
                </ul>
            </div>
            <div class="tab_box">
                <div>
                    <div class="listBox">
                        <!--图片-->
                        <div class="listTu">
                            <img src="<?php echo IMG_URL;?>
/f10.jpg" alt="">
                        </div>
                        <!--文字-->
                        <div class="listZi">
                            <!--<span><a href="" class="article">文章 &nbsp;</a></span>-->
                            <span> 吟游诗人 &nbsp;</span>
                            <span style="margin-right: 10px;color: #969696">喜欢了文章</span>
                            <span>2017/10/9</span>
                            <h1><a href="index.php?m=index&f=artical">那不过是一阵蝶翼的颤动</a></h1>
                            <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变</p>
                            <div class="meta">
                                <a href="" class="meta-tag">读书</a>
                                <a href="" class="meta-guanzhu iconfont icon-guanzhu_n">3918</a>
                                <a href="" class="meta-guanzhu iconfont icon-pinglun">52</a>
                                <a href="" class="meta-guanzhu iconfont icon-xihuan1">165</a>
                                <a href="" class="meta-guanzhu iconfont icon-jiaqian">1</a>
                            </div>
                        </div>
                    </div>
                    <div class="listBox">
                        <!--图片-->
                        <div class="listTu">
                            <img src="<?php echo IMG_URL;?>
/f10.jpg" alt="">
                        </div>
                        <!--文字-->
                        <div class="listZi">
                            <!--<span><a href="" class="article">文章 &nbsp;</a></span>-->
                            <span> 吟游诗人 &nbsp;</span>
                            <span style="margin-right: 10px;color: #969696">喜欢了文章</span>
                            <span>2017/10/9</span>
                            <h1><a href="index.php?m=index&f=artical">那不过是一阵蝶翼的颤动</a></h1>
                            <p>我们一直在坚持着，不是为了改变这个世界，而是希望不被这个世界所改变</p>
                            <div class="meta">
                                <a href="" class="meta-tag">读书</a>
                                <a href="" class="meta-guanzhu iconfont icon-guanzhu_n">3918</a>
                                <a href="" class="meta-guanzhu iconfont icon-pinglun">52</a>
                                <a href="" class="meta-guanzhu iconfont icon-xihuan1">165</a>
                                <a href="" class="meta-guanzhu iconfont icon-jiaqian">1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>动态</div>
                <div>最新评论</div>
                <div>热门</div>
            </div>
        </div>


    </div>
    <div class="zhuyeRight">
        <div class="rowLine"></div>
        <ul class="dynamic">
            <li><a href="" class="iconfont icon-zhuanti">&nbsp;&nbsp;我关注的专题/文集</a></li>
            <li><a href="" class="iconfont icon-xihuan1">&nbsp;&nbsp;我喜欢的文章</a></li>
        </ul>
        <div class="rowLine"></div>
        <div class="zhuantiTitle">我创建的专题</div>
        <div class="newZhuanti"><a href="" class="iconfont icon-guanzhu">创建一个专题</a></div>
    </div>
</main>


</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/layout.js"><?php echo '</script'; ?>
><?php }
}
