<?php

class IndexController extends display {
    public function index(){
        $dsn = "mysql:host=localhost;dbname=rk";
        $db = new PDO("$dsn",'root','root');
        $db->query("set names utf8");
        $rs = $db->query("select * from user");
        $data = $rs->fetchAll();
        $this->fetch('index.php',$data);
    }

    public function admin(){
        $dsn = "mysql:host=localhost;dbname=rk";
        $db = new PDO("$dsn",'root','root');
        $db->query("set names utf8");
        $rs = $db->query("select * from user")->fetchAll();
        $data = $rs->fetchAll();
        $this->fetch('admin.php',$data);
    }

    public function dist(){
        $dsn = "mysql:host=localhost;dbname=week3";
        $db = new PDO("$dsn",'root','root');
        $n = $db->query("select * from goods")->fetchAll();
        $num = $_GET['num']; //当前页数
        $count = count($n); //计算一共有多少条记录
        $pagesize = 4; //每页展示4条
        $pages = ceil($count/$pagesize); //共多少页
        $offset = ($num-1)*$pagesize;
//        echo $count;
//        exit;
        $data = $db->query("select * from goods limit $offset,$pagesize")->fetchAll();
        echo json_encode($data);
    }
}