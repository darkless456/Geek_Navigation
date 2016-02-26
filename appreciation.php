<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Normalize -->
    <link rel="stylesheet" href="//cdn.bootcss.com/normalize/3.0.3/normalize.min.css" />
    <!-- Bootstrap Core CSS-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" href="./style/pixiv.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include_once('./script/get_frame.php');
    get_header('./', './'); ?>
    <div class="jumbotron">
    <?php include('./script/pixiv.php') ?>
    </div>
    <?php get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Custom JS Code -->
    <script src="./js/app.js"></script>
</body>
<script>
var opt={
//   getResource:function(index,render){
//   //index为已加载次数,render为渲染接口函数,接受一个dom集合或jquery对象作为参数。通过ajax等异步方法得到的数据可以传入该接口进行渲染，如 render(elem)
//       var html='';
//       for(var i=20*(index-1);i<20*(index-1)+20;i++){
//          var k='';
//          for(var ii=0;ii<3-i.toString().length;ii++){
//             k+='0';
//          }
//          k+=i;
//          var src="./img/"+k+".jpg";
//          html+='<a class="box"><div class="content"><img src="'+src+'" /></div></a>';
//       }
//       return $(html);
//   },
  auto_imgHeight:true,
  insert_type:1
}
$('.jumbotron').waterfall(opt);

</script>

</html>
