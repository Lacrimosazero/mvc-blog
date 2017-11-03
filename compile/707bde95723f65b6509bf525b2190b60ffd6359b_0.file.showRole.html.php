<?php
/* Smarty version 3.1.30, created on 2017-11-03 06:31:45
  from "E:\wamp64\www\project1\mvc\template\admin\showRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc0d51a5b995_55980628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '707bde95723f65b6509bf525b2190b60ffd6359b' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\admin\\showRole.html',
      1 => 1509690351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc0d51a5b995_55980628 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>
<div class="demo-content" style="margin: 20px">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal">
            <!--添加角色-->
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>添加角色</label>
                    <div class="controls">
                        <input name="lid" type="hidden">
                        <input name="lname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
            </div>
            <!--内容权限-->
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">内容权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查看',value:'4' }] }">
                        <input type="hidden" name="connum">
                    </div>
                </div>
            </div>
            <!--留言权限-->
            <div class="row">
                <div class="control-group span12">
                    <label class="control-label">内容权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'添加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查看',value:'4' }] }">
                        <input type="hidden" name="messagenum">
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/showRole.js"><?php echo '</script'; ?>
>
</div>
</body>
</html>
<?php }
}
