<?php
//不能直接进入目录
defined("COME")or exit("非法");
class smarty{
    //定义模板路径
    public $templateUrl;
    //模板路径转换成PHP路径
    public $compileUrl;
    //定义转换数组
    public $arr=array();
    //默认不缓存
    public $cache="false";
    //缓存目录
    public $cacheUrl;

    //创建模板路径
    public function setTemplateUrl($dirname="template"){
        $this->templateUrl=$dirname;
        $tplurl=APP_URL."/".$this->templateUrl;
        $this->templateUrl=$tplurl;
        if(is_dir($tplurl)){
            mkdir($tplurl);
        }
    }

    //创建PHP路径
    public function setCompileUrl($dirname="compile"){
        $this->compileUrl=$dirname;
        $comurl=APP_URL."/".$this->compileUrl;
        $this->compileUrl=$comurl;
        if(is_dir($comurl)){
            mkdir($comurl);
        }
    }

    //创建缓存路径
    public function setCacheUrl($dirname="cache"){
        $this->cacheUrl=$dirname;
        $cacheurl=APP_URL."/".$this->cacheUrl;
        $this->cacheUrl=$cacheurl;
        if(is_dir($cacheurl)){
            mkdir($cacheurl);
        }
    }

    //将要转换的字符加入数组
    public function assign($str,$val){
        $this->arr[$str]=$val;
    }

    //替换模板中的数据并发放到PHP中
    public function display($url){
        $md5name=md5($url);
        //完整的要转换的模板路径
        $fullpath=$this->templateUrl."/".$url;
        //完整的缓存的路径
        $cachefullpath=$this->cacheUrl."/".$md5name.".html";
        if(is_file($cachefullpath)&&$this->cache){
            include $cachefullpath;
        }else{
            //获取模板文件中的内容
            $str=file_get_contents($fullpath);
            //通过正则替换{}中的内容
            $newstr=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$str);
            //要插入的PHP文件的完整路径
            $comfullpath=$this->compileUrl."/".$md5name.".php";
            //把转换好的内容插入到PHP文件中
            file_put_contents($comfullpath,$newstr);
            //引用PHP文件，显示出转换后的页面
            include $comfullpath;
            ob_start();
            $cachestr=ob_get_contents();
            if($this->cache){
                file_put_contents($cachefullpath,$cachestr);
            }
        }
    }
}


?>