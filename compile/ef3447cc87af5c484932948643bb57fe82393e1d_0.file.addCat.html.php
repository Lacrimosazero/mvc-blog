<?php
/* Smarty version 3.1.30, created on 2017-11-03 07:17:10
  from "E:\wamp64\www\project1\mvc\template\admin\addCat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fc17f600fc00_74020828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3447cc87af5c484932948643bb57fe82393e1d' => 
    array (
      0 => 'E:\\wamp64\\www\\project1\\mvc\\template\\admin\\addCat.html',
      1 => 1509693428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fc17f600fc00_74020828 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Form - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/icon.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.easyui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/addCat.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="easyui-panel" title="添加分类" style="width:100%;max-width:400px;padding:30px 60px">

    <form id="ff" method="post">


        <div style="margin-bottom:20px">
            <input class="easyui-combotree" name="pid" data-options="url:'index.php?m=admin&f=category&a=showCate',label:'父级分类'" style="width:100%">
        </div>


        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cname" style="width:100%" data-options="label:'分类名称',required:true">
        </div>


        <!--<div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cquanxian" style="width:100%" data-options="label:'分类权限',required:true">
        </div>-->


        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cinfo" style="width:100%;height:60px" data-options="label:'分类简介',multiline:true">
        </div>


    </form>
    <div style="text-align:center;padding:5px 0;">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px;margin-right: 5px;">提交</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">清空</a>
    </div>
</div>

<?php echo '<script'; ?>
>
    function submitForm(){
        $("form").attr("action","index.php?m=admin&f=cat&a=addCateCon");
        $('#ff').submit();
    }
    function clearForm(){
        $('#ff').form('clear');
    }
<?php echo '</script'; ?>
>


</body>
</html><?php }
}
