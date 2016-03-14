<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>关于极客导航</title>
    <!-- Normalize -->
    <link rel="stylesheet" href="//cdn.bootcss.com/normalize/3.0.3/normalize.min.css" />
    <!-- Bootstrap Core CSS-->
    <link  rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" />

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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2" style="margin-bottom: 20px; padding: 30px; background-color: #fff; border: 1px solid #ddd; border-radius: 4px;">
                <h3>关于极客导航</h3>
                <h4>使用的开发工具</h4>
                <p>1、Boostrap3.35（基本框架）</p>
                <p>2、jQuery2.20（自定义JS功能）</p>
                <p>3、LESS（自定义CSS样式）</p>
                <p>4、Animation.css（动态效果）</p>
                <p>5、jQuery.blur（主页导航图片模糊）</p>
                <p>6、jQuery.flot（绘制统计图表）</p>
                <p>7、PHP Email类（邮件自动发送）</p>
                <p>8、Font-awesome（矢量图表和字体）</p>

                <h4>网站特色</h4>
                <p>1、主页导航点击弹出详情（模态框）</p>
                <p>2、主页导航鼠标滑过文字变形特效</p>
                <p>3、Pixiv图片墙（瀑布流展示）</p>
                <p>4、响应式页面布局，兼容大小屏幕</p>
                <p>5、审核结果通过邮件通知</p>
                网站代码存放在<a target="_blank" href="https://github.com/darkless456/Geek_Navigation">Github Repo</a>, 欢迎交流。</p>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Less.js (necessary for less format style) -->
    <script src="//cdn.bootcss.com/less.js/2.6.0/less.min.js"></script>
    <!-- Custom javascript -->
    <script src="./js/default.js"></script>
  </body>
</html>