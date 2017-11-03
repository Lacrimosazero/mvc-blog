<?php
class db{
    function __construct($tablename="")
    {
        global $config;
        $this->host=$config["database"]["host"];
        $this->port=$config["database"]["port"];
        $this->user=$config["database"]["user"];
        $this->password=$config["database"]["password"];
        $this->database=$config["database"]["database"];

        $this->table=$tablename;
        $this->opt["filed"]="*";
        $this->opt["where"]=$this->opt["order"]=$this->opt["limit"]="";
        $this->connect();

    }

    //连接数据库
    function connect(){
        $this->db=new mysqli($this->host,$this->user,$this->password,$this->database,$this->port);
        if(mysqli_connect_error()){
            echo "数据库连接错误";
            exit;
        }
        $this->db->query("set names utf8");
    }

    function selectTable($tablename){
        $this->table=$tablename;
    }

    //查询多条数据
    function select(){
        $sql="select ".$this->opt["filed"]." from ".$this->table." ".$this->opt["where"]." ".$this->opt["order"]." ".$this->opt["limit"];
        $result=$this->db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }

    //查询单条数据
    function find(){
        $sql="select ".$this->opt["filed"]." from ".$this->table." ".$this->opt["where"]." ".$this->opt["order"]." ".$this->opt["limit"];
        $result=$this->db->query($sql);
        $row=$result->fetch_assoc();
        return $row;

    }

    //执行自定义的sql
    function exec($sql){
        $result=$this->db->query($sql);
        return $result;
    }

    function filed($filed){
        $this->opt["filed"]=$filed;
        return $this;
    }

    function where($where){
        $this->opt["where"]="WHERE ".$where;
        return $this;
    }

    function order($order){
        $this->opt["order"]="ORDER BY ".$order;
        return $this;
    }

    function limit($limit){
        $this->opt["limit"]="LIMIT ".$limit;
        return $this;
    }

    //插入
    function insert ($arr){
        $attr="";
        $val="";
        foreach ($arr as $k=>$v){
            $attr.=$k.",";
            $val.=$v.",";
        }
        $attr=substr($attr,0,-1);
        $val=substr($val,0,-1);

        $sql="insert into ".$this->table." (".$attr.") values (".$val.")";

        $this->db->query($sql);
//        var_dump($sql);exit;
        return $this->db->affected_rows;

    }

    function update($sql){
        $sql="update ".$this->table." set ".$sql." ".$this->opt["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function delete(){
        $sql="delete from ".$this->table." ".$this->opt["where"];
//        var_dump($sql);
        $this->db->query($sql);

        return $this->db->affected_rows;
    }

    /*
     * 关联查询
     * 学生表
     * 课程表
     * 中间表
     *
     * */

}
//new db();

