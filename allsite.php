<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>全部站点 - 极客导航</title>
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
    <!-- FontAwesome Necessary for font and icon-->
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Custom Style -->
    <link rel="stylesheet/less" href="./style/default.less" />
  </head>
  <body>
<?php include_once('./script/get_frame.php'); 
get_header('./', './')?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="sitelist">
                <table class="table table-hover" style="table-layout: fixed;">
                <?php include('./script/sitelist.php');?>
                </table>
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
    <!-- Custom Javacript -->
    <script src="./js/default.js"></script>
  </body>
</html>