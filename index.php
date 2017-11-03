<?php
session_start();
    header("content-type,text/html,charset:utf-8");
    define("COME","yes");
    //服务器的根目录
    define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
    //应用的根目录
    define("APP_PATH",substr($_SERVER["SCRIPT_FILENAME"],0,strrpos($_SERVER["SCRIPT_FILENAME"],"/")));
    //libs文件的路径
    define("LIBS_PATH",APP_PATH."/libs");
    //modules文件的路径
    define("MODULES_PATH",APP_PATH."/modules");
    //模板的路径
    define("TPL_PATH",APP_PATH."/template");
    //smarty路径
    define("SMARTY_PATH",LIBS_PATH."/smarty");

    //2.服务器的路径
    //协议
    define("PORT",strtolower(strchr($_SERVER['SERVER_PROTOCOL'],'/',true)));
    //主机地址
    define("HOST",$_SERVER["HTTP_HOST"]);
    //项目的路径
    define("APP_URL",substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],'/')));
    //服务器的项目路径
    define("HTTP_URL",PORT."://".HOST.APP_URL);
    //静态目录的路径
    define("STATIC_URL",HTTP_URL."/static");
    //css的路径
    define("CSS_URL",STATIC_URL."/css");
    define("JS_URL",STATIC_URL."/js");
    define("IMG_URL",STATIC_URL."/img");
    define("ICON_URL",STATIC_URL."/iconfont");

    include_once LIBS_PATH."/route.class.php";
    include_once LIBS_PATH."/functions.php";
    include_once LIBS_PATH."/main.class.php";
    include_once SMARTY_PATH."/Smarty.class.php";
    include_once APP_PATH."/config.php";
    include_once LIBS_PATH."/db.class.php";

    $routeobj=new route();
    $routeobj->set();


    /*
     * mvc
     * model   view    controller
     *
     * 路由
     * 地址栏->统一管理用户的请求，分发响应的数据->单入口文件
     * 安全性  可维护性   回溯性
     *
     * 模板引擎   如何实现动态数据的问题
     *
     * 面向对象的编程思想   上世纪80年代
     *
     * 知识   能够改变你认知和行动的信息
     * */



