<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Incentive</title>

    <!-- Bootstrap Core CSS -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
    <!-- Custom CSS -->
	<?php echo $this->Html->css('sb-admin'); ?>
    <!-- Morris Charts CSS -->
	<?php echo $this->Html->css('morris'); ?>
    <!-- Custom Fonts -->
	<?php echo $this->Html->css('font-awesome.min'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/incentive/incentives/">Incentive</a>
            </div>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/incentive/incentives/"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#article"><i class="fa fa-fw fa-arrows-v"></i> Articles<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="article" class="collapse">
                            <li>
                              <a href="/incentive/articles/">home</a>
                            </li>
                            <li>
                                 <a data-mce-href="http://www.incentive123.com/articles/人物紹介/" href="http://www.incentive123.com/articles/人物紹介/">人物紹介</a>
                            </li>
                            <li>
                                <a data-mce-href="http://www.incentive123.com/articles/旅/" href="http://www.incentive123.com/articles/旅/">旅</a>
                            </li>
                            <li>
                                    <a data-mce-href="http://www.incentive123.com/articles/留学/" href="http://www.incentive123.com/articles/留学/">留学</a>
                            </li>
                            <li
>
                                 <a data-mce-href="http://www.incentive123.com/articles/スタッフの与太話/" href="http://www.incentive123.com/articles/スタッフの与太話/">スタッフの与太話</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="/incentive/events/"><i class="fa fa-fw fa-table"></i> Events</a>
                    </li>
                    <li>
                        <a href="http://www.incentive123.com/contact/"><i class="fa fa-fw fa-edit"></i> Contacts</a>
                    </li>
                    <li>
                        <a href="/incentive/aboutincentives/"><i class="fa fa-fw fa-desktop"></i> about incentive</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

    <div id="page-wrapper">
      <div class="page">
        <font face="Impact"><h1 href="#"><img src="http://u.jimdo.com/www56/o/sd36d9f85c0f6b11e/userlayout/img/logoooo.jpg?t=1437644899" alt="">  Incentive</h1></font>

        <h2>News</h2>

        <div class="news-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>2015年7月23日</th>
                            <th>HP大改造スタートしました。</th>
                    </thead>
                    <thead>
                        <tr>
                            <th>2015年5月30日</th>
                            <th>初イベント開催しました。詳細は<a data-mce-href="http://www.incentive123.com/events-1/launch/" href="http://www.incentive123.com/events-1/launch/" title="Launch">こちら</a>。</th>
                    </thead>
                    <thead>
                        <tr>
                            <th>2015年4月23日</th>
                            <th>Incentive始動。</th>
                    </thead>
                </table>
            </div>
        </div>
      </div>
</div>



      </div>

      <div class="footer">
        <p>&copy; Incentive, Inc.</p>
      </div>
    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

