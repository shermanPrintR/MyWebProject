<?php require '../model/companyInfo.class.php';
require '../controller/login.php';
$companyName1 = new companyInfo();
$companyName1->setCompanyName('XXXX公司');
?>
<header class="row">
    <h2 class="col-md-4"><?php echo $companyName1->getCompanyName() ?>管理系统</h2>
    <div class="col-md-offset-5 col-md-3" style="text-align: right;padding-top: 8.5px">
        <button class="btn-default btn btn-lg  "><span
                class="glyphicon glyphicon-user"></span><?php
            session_start();
            if (isset($_SESSION['name'])){
                echo $_SESSION['name'];
            }else{
                header("location:../web/login.php");
            }
            ?>
        </button>
        <a href="../controller/logout.php"><button class="btn-warning btn btn-lg">退出</button></a>
    </div>
</header>