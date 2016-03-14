<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>推荐新网站 - 极客导航</title>
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
    <div id="container" class="container">
    <form action="" method="post" accept-charset="utf-8" class="form-horizontal" id="apply">
        <fieldset>
            <legend>欢迎提交有用、有趣的站点</legend>
            <div class="form-group">
                <label for="site" class="col-sm-1 control-label">网站名字</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="site" name="site" placeholder="（必填）请输入网站名称">
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-sm-1 control-label">网站地址</label>
                <div class="col-sm-8">
                    <input type="url" class="form-control" id="url" name="url" placeholder="（必填）请输入网站地址">
                </div>
            </div>
            <div class="form-group">
                <label for="intro" class="col-sm-1 control-label">网站简介</label>
                <div class="col-sm-8">
                    <textarea name="intro" class="form-control" rows="3" placeholder="（选填）请输入网站简介(请在50字以内）" style="resize: none;"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="url" class="col-sm-1 control-label">联系邮箱</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="email" name="email" placeholder="（必填）请输入你的联系邮箱">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1">
                    <div class="radio">
                        <label class="radio-inline">
                            <input type="radio" name="classify" value="front" >前端设计
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="classify" value="back" >后台开发
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="classify" value="blog" >个人博客
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="classify" value="other" checked>其他推荐
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-1">
                    <button type="submit" name="submit" id="submit" class="btn btn-success">提交</button>                    
                </div>
            </div>
        </fieldset>
    </form>
    </div>
<?php get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- jQuery.form (A simple way to AJAX-ify any form on your page; with file upload and progress support.) -->
    <script src="//cdn.bootcss.com/jquery.form/3.51/jquery.form.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Less.js (necessary for less format style) -->
    <script src="//cdn.bootcss.com/less.js/2.6.0/less.min.js"></script>
    <!-- Custom js -->
    <script src="./js/apply.js"></script>
    <script src="./js/default.js"></script>
  </body>
</html>