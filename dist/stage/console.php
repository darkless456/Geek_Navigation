<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>控制台 - 极客导航</title>
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
    <!-- Custome Style -->
    <link rel="stylesheet" href="../style/default.css" />
    <link rel="stylesheet" href="../style/console.css" />
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- <div class="container-fruid"> -->
        <div class="navbar-header">
          <a class="navbar-brand" href="../index.php">极客导航</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right top-nav">
                <!-- <li><a href="index.php">主页</a></li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Kevin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="exit" href="#"><i class="fa fa-fw fa-power-off"></i>退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active"><a class="index" href="./console.php"><i class="fa fa-fw fa-dashboard"></i> 概况</a></li>
                <li><a href="./checking.php"><i class="fa fa-fw fa-warning"></i> 待审核</a></li>
                <li><a href="./existed.php"><i class="fa fa-fw fa-database"></i> 已收录</a></li>
                <li><a class="exit" href="#"><i class="fa fa-fw fa-power-off"></i> 退出</a></li>
            </ul>
        </div>
    </nav>
    <div class="page-wrap">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><i class="fa fa-dashboard"></i> 概况<small> 浏览网站整体状况</small></h2>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> 概况</li>
                    </ol>
                </div>
            </div>
            <!-- Information panel  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-blue">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-html5 fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="front">26</div>
                                    <div>前端类共有</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-code fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="back">32</div>
                                    <div>后台类共有</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="blog">54</div>
                                    <div>博客类共有</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-purple">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-heart fa-4x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" id="other">55</div>
                                    <div>其他类别共有</div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="fa fa-long-arrow-right"></i>
                                已收录站点类型分布
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="flot-chart">
                                <div class="flot-chart-content" id="flot-chart-pie"></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div id="chart-tooltips" style="height: 25px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-blue">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="fa fa-long-arrow-right"></i>
                                留空
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../script/get_frame.php');
get_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="//cdn.bootcss.com/flot/0.8.3/excanvas.min.js"></script><![endif]-->   
    <script type="text/javascript" src="//cdn.bootcss.com/flot/0.8.3/jquery.flot.min.js"></script>
    <script type="text/javascript" src="//cdn.bootcss.com/flot/0.8.3/jquery.flot.pie.min.js"></script>
    <!-- Custom javascirpt -->
    <script src="../js/console.js"></script>
  </body>
</html>