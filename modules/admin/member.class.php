<?php
header('content-type:text/html;charset:utf-8');
class member extends main{
    function showRole(){
        $this->smarty->display("admin/showRole.html");
    }
    //查看角色
    function selectRole(){
        $dbobj=new db("level");
        $arr=array();
        $result=$dbobj->select();
        $arr["rows"]=$result;
        $arr["results"]=count($arr);
        echo json_encode($arr,true);
    }

    //添加或更新
    function addRole()
    {
        $type = sql($_GET["type"]);
        $db = new db("level");
        if ($type == "add") {
            $lname = sql($_POST["lname"]);
            $messagenum = sql($_POST["messagenum"]);
            $connum = sql($_POST["connum"]);
//            var_dump($connum);exit;
            if ($db->insert(array("lname"=>"'{$lname}'","messagenum"=>"'{$messagenum}'","connum"=>"'{$connum}'"))>0) {
                echo $db->db->insert_id;
            }
            var_dump($db->db->insert_id);
        }else if ($type == "edit"){
            $lid = sql($_POST["lid"]);
            $lname = sql($_POST["lname"]);
            $connum = sql($_POST["connum"]);
            $messagenum = sql($_POST["messagenum"]);
            if($db->where("lid={$lid}")->update("lname='{$lname}',connum='{$connum}',messagenum='{$messagenum}'")>0){
                echo "edit";
            }
        }
    }



    //删除
    function delete(){
        $lids=$_POST["lids"];
        $db=new db("level");
        if($db->where("lid in ".$lids)->delete()>0){
            echo "delete";
        }

    }
}