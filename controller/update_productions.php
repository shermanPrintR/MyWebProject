<?php
require_once '../model/ProductionsDAO.class.php';
require_once '../model/Productions.class.php';
if (isset($_POST['version']) && isset($_POST['type']) && isset($_POST['power']) && isset($_POST['num']) && isset($_POST['cntrNo'])) {
    $date = new productions($_POST['version'], $_POST['type'], $_POST['power'], $_POST['num'], $_POST['cntrNo']);
    $res = (new ProductionsDAO())->update($date);
    header("location:../web/showStock.php");
} else {
    echo 'error';
}