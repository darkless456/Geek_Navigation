<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>留言 - 极客导航</title>
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
    <link rel="stylesheet" href="./style/default.css" />
  </head>
  <body>
<?php include_once('./script/get_frame.php'); 
get_header('./', './')?>
    <!-- 留言框 -->
    <div class="container" id="container">
        <form action="" method="post" accept-charset="utf-8" class="form-horizontal" id="message">
            <fieldset>
                <legend><h3>欢迎留言</h3></legend>
                <div class="form-group">
                    <label for="content" class="col-sm-1 control-label">留言内容</label>
                    <div class="col-sm-8">
                        <textarea name="content" class="form-control" rows="6" id="content" placeholder="请在此填写留言"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nickname" class="col-sm-1 control-label">昵称</label>
                    <div class="col-sm-4">
                        <input type="text" name="nickname" class="form-control" id="nickname" placeholder="昵称">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-1 control-label">联系邮箱</label>
                    <div class="col-sm-4">
                        <input type="text" name="email" class="form-control" id="email" placeholder="请填写联系邮箱">                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-1 col-sm-offset-1">
                        <button class="btn btn-success" type="submit" name="submit" id="submit">发布</button>                
                    </div>
                </div>
            </fieldset>       
        </form>
    </div>
    <!-- 留言显示 -->
    <div class="container" id="display">
        <fieldset>
            <legend><h3>最新留言</h3></legend>
            <div class="msg-wrap">
                <div class="container-fruid">
                <?php include('./script/msg.php'); ?>            
                </div>
            </div>
        </fieldset>
    </div>
<?php get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- jQuery.form (A simple way to AJAX-ify any form on your page; with file upload and progress support.) -->
    <script src="//cdn.bootcss.com/jquery.form/3.51/jquery.form.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Custom Javacript -->
    <script src="./js/message.js"></script>
    <script src="./js/default.js"></script>
  </body>
</html>