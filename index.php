<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>极客导航 - 首页</title>
    <!-- Normalize -->
    <link rel="stylesheet" href="//cdn.bootcss.com/normalize/3.0.3/normalize.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- FontAwesome Necessary for font and icon-->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Animate.css Plug and play, app-like animations for your websites and web apps. -->
    <link rel="stylesheet" href="//cdn.bootcss.com/animate.css/3.5.1/animate.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet/less" href="./style/default.less" />
</head>

<body>
<?php include_once('./script/get_frame.php'); 
get_header('./', './')?>
    <div id="container" class="container">
        <div id="jumbotronCarousel" class="carousel slide">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active" data-target="#jumbotronCarousel" data-slide-to="0"><a data-toggle="pill" role="tab" href=""><h4><span><i class="fa fa-html5"></i></span> 前端设计</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="1"><a data-toggle="pill" role="tab" href=""><h4><span><i class="fa fa-code"></i></span> 后台编程</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="2"><a data-toggle="pill" role="tab" href=""><h4><span><i class="fa fa-pencil"></i></span> 个人博客</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="3"><a data-toggle="pill" role="tab" href=""><h4><span><i class="fa fa-heart"></i></span> 其他推荐</h4></a></li>
            </ul>
            <!-- tabs pills -->
            <div class="carousel-inner">
            <!-- <div class="grid"> -->
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="infoModalLabel">网站详情</h4>
                </div>
                <div class="modal-body">
                    <div class="container-fruid">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3 text-center">
                                <h1 class="site-title"><i class="fa fa-home"></i></h1>
                                <h5 id="site-category"></h5>
                            </div>
                            <div class="col-lg-6 col-lg-offset-3">
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <span class="label label-info">访问地址：</span>
                            </div>
                            <div class="col-lg-5">
                                <span class="site-url"></span>
                            </div>
                            <div class="col-lg-2">
                                <a class="site-visit" target="_blank" href="#"><button class="btn btn-primary btn-xs">点击访问</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-lg-offset-2">
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <span class="label label-info">站点简介：</span>
                            </div>
                            <div class="col-lg-9">
                                <span class="site-intro"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- Custom javascript -->
    <script src="./js/site.js"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Less.js (necessary for less format style) -->
    <script src="//cdn.bootcss.com/less.js/2.6.0/less.min.js"></script>
    <!-- Blurr.js (Blurred backgound image) -->
    <script src="./js/jquery.blur.min.js"></script>

</body>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

    $('.col-md-2 a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    })

    $('.jumbotron').blurjs({
        source: '.jumbotron',
        radius: 5, //模糊度
        // overlay: 'rgba(255,255,255,0.4)', //模糊颜色
        // 
        offset: { x: 15, y: -12 }
    });
});
</script>
</html>