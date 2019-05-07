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
        <!--表格-->
        <div class="col-md-10">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>序号</th>
                    <th>产品型号</th>
                    <th>产品类型</th>
                    <th>功率（w）</th>
                    <th>数量</th>
                    <th>柜号</th>
                    <th>出库</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
                </thead>
                <tbody>
                <?php
                require_once '../model/ProductionsDAO.class.php';
                $productions = (new ProductionsDAO())->findAll();
                foreach ($productions as $pro) {
                    echo '<tr>';
                    echo '<td>' . $pro['ID'] . '</td>';
                    echo '<td>' . $pro['version'] . '</td>';
                    echo '<td>' . $pro['type'] . '</td>';
                    echo '<td>' . $pro['power'] . '</td>';
                    echo '<td>' . $pro['num'] . '</td>';
                    echo '<td>' . $pro['cntrNo'] . '</td>';
                    echo '<td>' . '<button class="btn btn-primary">出库</button>' . '</td>';
                    echo '<td>' . '<form method="post" action="../controller/update_productions.php"><input type="hidden" name="ID" value="' . $pro['ID'] . '"><button class="btn btn-primary" type="submit">修改</button></form>' . '</td>';
                    echo '<td>' . '<form method="post" action="../controller/del_productions.php"><input type="hidden" name="ID" value="' . $pro['ID'] . '"><button class="btn btn-primary" type="submit">删除</button></form>' . '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>