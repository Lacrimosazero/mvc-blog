<?php
class main{
    function __construct()
    {
        $smartyobj=new Smarty();
        $smartyobj->setCompileDir("compile");
        $smartyobj->setTemplateDir("template");
        $smartyobj->assign("CSS_URL",CSS_URL);
        $smartyobj->assign("JS_URL",JS_URL);
        $smartyobj->assign("IMG_URL",IMG_URL);
        $this->smarty=$smartyobj;
    }
}