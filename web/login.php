<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php require '../model/companyInfo.class.php';
$companyName1 = new companyInfo();
$companyName1->setCompanyName('XXXX公司');
?>
<div class="container-fluid">
    <!--标题-->
    <header class="row">
        <h2 class="col-md-4"><?php echo $companyName1->getCompanyName() ?>管理系统</h2>
        <div class="col-md-offset-5 col-md-3" style="text-align: right;padding-top: 8.5px">
            <button value="登录" class="btn-default btn btn-lg"><span
                        class="glyphicon glyphicon-user"></span>登录
            </button>
            <button value="退出" class="btn-warning btn btn-lg">退出</button>
        </div>
    </header>
    <!--导航栏-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#">业务管理</a></li>
                <li><a href="#">个人中心</a></li>
            </ul>
        </div>
    </nav>
    <!--表单-->
    <div class="col-md-4 col-md-offset-4">
        <form role="form" method="post" action="../controller/login.php">
            <div class="form-group">
                <label for="username">账号</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="请输入账号" required>
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码" required>
            </div>
            <input type="submit" class="btn-default btn" value="登录">
        </form>
    </div>
</div>
</div>
</body>
</html>