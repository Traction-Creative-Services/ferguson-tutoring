<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Ferguson Tutoring</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'menu_class' => 'nav navbar-nav' ) ); ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>