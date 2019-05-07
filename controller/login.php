<?php
require_once '../model/AccountNameDAO.class.php';
require_once '../model/AccountName.class.php';
//获取表单参数
if (isset($_POST['username']) && isset($_POST['password'])) {
    $account = new AccountName($_POST['username'], $_POST['password']);
    $res = (new AccountNameDAO())->findByUser($account);
    if (!empty($res)) {
        if (!isset($_SESSION)){
            session_start();
            $_SESSION['username'] = $res['username'];
            $_SESSION['password'] = $res['password'];
            $_SESSION['name'] = $res['name'];
            header("location:../web/showStock.php");
        }else{
            session_destroy();
            $_SESSION['username'] = $res['username'];
            $_SESSION['password'] = $res['password'];
            $_SESSION['name'] = $res['name'];
            header("location:../web/showStock.php");
        }
    } else {
        header("location:../web/login.php");
        echo '用户名或密码错误';
    }
} else {
    echo '请填写用户名密码';
}
//print_r ($account);
//调用findByUser
