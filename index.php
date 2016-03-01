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
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- FontAwesome -->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet/less" href="./style/default.less" />
</head>

<body>
<?php include_once('./script/get_frame.php'); 
get_header('./', './')?>
    <div id="container" class="container">
        <div id="jumbotronCarousel" class="carousel slide">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active" data-target="#jumbotronCarousel" data-slide-to="0"><a data-toggle="pill" role="tab" href=""><h4>前端设计</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="1"><a data-toggle="pill" role="tab" href=""><h4>后台编程</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="2"><a data-toggle="pill" role="tab" href=""><h4>技术博客</h4></a></li>
                <li role="presentation" data-target="#jumbotronCarousel" data-slide-to="3"><a data-toggle="pill" role="tab" href=""><h4>其他推荐</h4></a></li>
            </ul>
            <!-- tabs pills -->
            <div class="carousel-inner">
            <!-- <div class="grid"> -->
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