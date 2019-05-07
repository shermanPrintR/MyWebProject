<?php
require_once '../model/ProductionsDAO.class.php';
//接收来自视图层的参数/
//调用模型层相应的对象的相应的方法
(new ProductionsDAO())->delById($_POST['ID']);
//根据返回值做出处理
//将结果返回给视图层   ajex

//跳转回视图层
header("location:../web/showStock.php");