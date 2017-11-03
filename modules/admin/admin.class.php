<?php
class admin extends main{
    //添加管理员
    function addAdmins(){
        $dbobj=new db("level");
        $lid=$_SESSION["level"];
        $res=count($dbobj->where("lid={$lid} and find_in_set('1',adminnum)")->select());
        if($res>0){
            $dbobj=new db("admin");
            $aname=sql($_POST["aname"]);
            $apass=md5($_POST["apass"]);
            $level=sql($_POST["level"]);
            $result=$dbobj->insert(array("aname"=>"'{$aname}'","apass"=>"'{$apass}'","level"=>"'{$level}'","atime"=>"now()"));
            if($result>0){
                echo "<script>alert('添加成功');location.href='index.php?m=admin&f=admin&a=addAdmin'</script>";
            }
        }else{
            echo "<script>alert('没有添加管理员权限');location.href='index.php?m=admin&f=admin&a=addAdmin'</script>";
        }

    }

}
