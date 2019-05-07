<?php
require_once '../db/DB.class.php';
require_once 'AbstractModelDAO.php';
require_once 'productions.class.php';

//data access object  数据访问类，完成相应数据表的CRUD
class ProductionsDAO implements AbstractModelDAO
{
    public function findAll()
    {
        //连接
        $dbh = (new DB())->getDbh();
        //发送sql命令
        //返回获得的结果集
        return $pro = $dbh->query('SELECT * FROM productions');
    }

    function findById($id)
    {
        $dbh = (new DB())->getDbh();
        $pstmt = $dbh->prepare('SELECT * FROM productions WHERE ID=?');
        $pstmt->execute(array($id));
        return $res = $pstmt->fetch();
        // TODO: Implement findById() method.
    }

    function insert($obj)
    {
        try {
            $dbh = (new DB())->getDbh();
            $pstmt = $dbh->prepare('INSERT INTO productions (version,type,power,num,cntrNo) VALUES (?,?,?,?,?)');
            $pstmt->execute(array($obj->getVersion(), $obj->getType(), $obj->getPower(), $obj->getNum(), $obj->getCntrNo()));
            $dbh = null;
        } catch (PDOException $e) {
            echo '发生PDO异常' . $e->getMessage();
        }
    }

    function update()
    {
        try {
            $dbh = (new DB())->getDbh();
            $pstmt = $dbh->prepare('UPDATE productions SET version=?,type=?,power=?,num=?,cntrNo=? WHERE ID=?');
            $pstmt->execute(array($data->getVersion(), $data->getType(), $obj->getPower(), $obj->getNum(), $obj->getCntrNo()));
            $dbh = null;
        } catch (PDOException $e) {
            echo '发生PDO异常' . $e->getMessage();
        }
    }

    function delById($id)
    {
        $dbh = (new DB())->getDbh();
        $pstmt = $dbh->prepare('DELETE FROM productions WHERE ID = ?');
        $pstmt->execute(array($id));
    }
}