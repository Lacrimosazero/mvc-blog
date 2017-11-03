<?php
function tree($pid=0,&$arr){
    $dbobj=new db();
    $i=0;
    $sql="select * from category where pid=".$pid;
    $result=$dbobj->db->query($sql);
    while ($row=$result->fetch_assoc()){
        $arr[$i]=array(
            "id"=>$row["catid"],
            "text"=>$row['cname']
        );
        tree($row["catid"],$arr[$i]["children"]);
        $i++;
    }
}
