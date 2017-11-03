<?php
class cat extends main{
    //显示添加页面
    function addCat(){
        $this->smarty->display("admin/addCat.html");
    }

    //提交数据
    function addCateCon(){
        $pid=sql(p("pid"));
        $cname=sql($_POST["cname"]);
        $cinfo=sql($_POST["cinfo"]);
        $dbobj=new db("category");
        $result=$dbobj->insert(array("pid"=>"{$pid}","cname"=>"'{$cname}'","cinfo"=>"'{$cinfo}'"));
        if($result>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=cat&a=addCat';</script>";
        }
    }
    function showCate(){
        $arr=array();
        tree(0,$arr);
        echo json_encode($arr);
    }

}