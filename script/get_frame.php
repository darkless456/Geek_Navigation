<?php
/*
 * @Author: darkless
 * @Date:   2016-02-25 17:56:49
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-01 16:24:34
*/
function get_header($path, $path2){
    
    $header='
    <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="javascript:">极客导航</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="'. $path. 'index.php">主页</a></li>
                        <li><a href="'. $path2. 'appreciation.php">欣赏</a></li>
                        <li><a href="'. $path2. 'apply.php">申请</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="'. $path2. '#">留言</a></li>
                                <li><a href="'. $path2. '#">关于</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="'. $path2. '#">友链</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-success">搜索</button>
                    </form>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    ';
    echo $header;
};

function get_footer(){
    $footer = '<footer>
    <p>Designed by Kevin Lin <i>&copy;</i> 2016</p>
    </footer>';
    echo $footer;
};
?>
