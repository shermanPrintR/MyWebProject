<?php

class DB
{
    private $dbh;//dbh，数据库连接句柄
    private $dbms = 'mysql';     //数据库类型
    private $host = 'localhost'; //数据库主机名
    private $dbName = 'productions';    //使用的数据库
    private $user = 'root';      //数据库连接用户名
    private $pass = 'root';          //对应的密码
    private $port = '4880';         //端口号

    public function __construct()
    {
        try {
            $this->dbh = new PDO("$this->dbms:host=$this->host;port=$this->port;dbname=$this->dbName", $this->user, $this->pass); //初始化一个PDO对象
        } catch (PDOException $e) {
            die ("Error!: " . $e->getMessage() . "<br/>");
        }
    }

    public function getDbh()
    {
        return $this->dbh;
    }

}