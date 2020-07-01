<!DOCTYPE html>
<html lang="en">
<head>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta charset="utf-8" />
                <title>Test CI Application</title>

                <meta name="description" content="overview &amp; stats" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

                <!-- bootstrap & fontawesome -->
                <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.min.css");?>" />
                <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">                <link rel="stylesheet" href="<?php echo base_url("public/css/ace.min.css");?>" class="theme-stylesheet" id="theme-style" />
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
                <!-- page specific plugin styles -->

              		<!-- ace styles -->
              		<link rel="stylesheet" href="<?php echo base_url("public/css/ace.min.css");?>" class="ace-main-stylesheet" id="main-ace-style" />

              		<!--[if lte IE 9]>
              			<link rel="stylesheet" href="<?php echo base_url("public/css/ace-part2.min.css");?>" class="ace-main-stylesheet" />
              		<![endif]-->
              		<link rel="stylesheet" href="<?php echo base_url("public/css/ace-skins.min.css");?>" />
              		<link rel="stylesheet" href="<?php echo base_url("public/css/ace-rtl.min.css");?>" />

              		<!--[if lte IE 9]>
              		  <link rel="stylesheet" href="<?php echo base_url("public/css/ace-ie.min.css");?>" />
              		<![endif]-->

              		<!-- inline styles related to this page -->

              		<!-- ace settings handler -->
              		<script src="<?php echo base_url("public/js/ace-extra.min.js");?>"></script>

              		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

              		<!--[if lte IE 8]>
              		<script src="<?php echo base_url("public/js/html5shiv.min.js");?>"></script>
              		<script src="<?php echo base_url("public/js/respond.min.js");?>"></script>
              		<![endif]-->


</head>

<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="/" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Sample CI Example
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo base_url("public/avatars/user.jpg");?>" alt="Admin Photo" />
							<span class="user-info">
							<small>Welcome,</small>
							Admin
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
							<a href="#">
							<i class="ace-icon fa fa-cog"></i>
							Settings
							</a>
							</li>

							<li>
							<a href="#">
							<i class="ace-icon fa fa-user"></i>
							Profile
							</a>
							</li>

							<li class="divider"></li>

							<li>
							<a href="#">
							<i class="ace-icon fa fa-power-off"></i>
							Logout
							</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>
	<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
  </script>

    <?= $this->renderSection('menu') ?>


		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="/">Home</a>
						</li>
						<?php //if($title != 'Home') :?>
						<li class="active"><?php if(!isset($title)) $title = "" ;
                              echo $title;?></li>
						<?php // endif;?>
					</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search" action="search" method="post">
						<span class="input-icon">
							<input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input1" name="term" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
				</div>

			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<?= $this->renderSection('content') ?>
					<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
									Copyright @yurisa2 - sa2.com.br . All rights reserved.
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->

	<!-- basic scripts -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
			<!-- scripts adicionados -->
			<script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
			<script src="<?php echo base_url("public/js/ace-elements.min.js")?>"></script>
		<script src="<?php echo base_url("public/js/ace.min.js")?>"></script>
	</body>
</html>
