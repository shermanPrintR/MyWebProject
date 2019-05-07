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
<div class="container-fluid">
    <!--标题-->
    <?php require 'header.php'; ?>
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
    <div class="row">
        <!--折叠-->
        <div class="panel-group col-md-2" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                           href="#collapseOne">
                            员工管理
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">员工查询</a>
                    </div>
                    <div class="panel-body">
                        <a href="#">添加员工</a>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo">
                            仓库管理
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <a href="#">产品查询</a>
                    </div>
                    <div class="panel-body">

                        <a href="insert.php">添加产品</a>
                    </div>
                </div>
            </div>
        </div>
        <!--表单-->
        <?php
        require_once '../model/ProductionsDAO.class.php';
        $res = new ProductionsDAO()
        ?>
        <div class="col-md-4 col-md-offset-2">
            <form role="form" method="post" action="../controller/update_productions.php">
                <div class="form-group">
                    <label for="version">型号</label>
                    <input type="text" class="form-control" id="version" name="version" placeholder="请输入型号"
                           value="<?php $res['version'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="type">类型</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="请输入类型"
                           value="<?php $res['type'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="power">功率(w)</label>
                    <input type="number" class="form-control" id="power" name="power" placeholder="请输入功率"
                           value="<?php $res['power'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="num">数量</label>
                    <input type="number" class="form-control" id="num" name="num" placeholder="请输入数量"
                           value="<?php $res['num'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="cntrNo">柜号</label>
                    <input type="text" class="form-control" id="cntrNo" name="cntrNo" placeholder="请输入柜号"
                           value="<?php $res['cntrNo'] ?>" required>
                </div>
                <input type="submit" class="btn-default btn" value="提交">
            </form>
        </div>
    </div>
</div>
</body>
</html>