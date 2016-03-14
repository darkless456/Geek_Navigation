<?php
/*
 * @Author: darkless
 * @Date:   2016-02-25 17:56:49
 * @Last Modified by:   darkless
 * @Last Modified time: 2016-03-10 17:49:33
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
                                <li><a href="'. $path2. 'message.php">留言</a></li>
                                <li><a href="'. $path2. 'about.php">关于</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="'. $path2. 'allsite.php">已收录网站</a></li>
                            </ul>
                        </li>
                    </ul>    
                    <form action="http://www.baidu.com/baidu" target="_blank" class="navbar-form navbar-right" role="search" id="search">
                        <div class="form-group" align="center">
                            <input name="tn" type="hidden" value="baidu">
                            <input type="text" name="word" class="form-control" placeholder="Search" id="word">
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
    $footer = '<div class="container"><div class="row"><div class="col-lg-8 col-lg-offset-3"><footer>
    <p>Copyright <i class="fa fa-copyright"></i> 2016 Designed by Kevin Lin &nbsp;联系邮箱：loveless_456@foxmail.com</p></footer></div></div></div>';
    echo $footer;
};
?>
