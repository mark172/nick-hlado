<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Kineoworks</title>

    <!-- Bootstrap core CSS -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="nivolightbox/nivo-lightbox.css" type="text/css" />
    <link rel="stylesheet" href="nivolightbox/themes/default/default.css" type="text/css" />

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Kineoworks Header -->
    <div class="header">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Nick Hlado</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li <?php if ($page == "index") {echo 'class="active"';} ?>><a href="index.php"> <span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li <?php if ($page == "about") {echo 'class="active"';} ?>i><a href="about.php"> <span class="glyphicon glyphicon-user"></span> Resume</a></li>
              <li <?php if ($page == "portfolio") {echo 'class="active"';} ?>><a href="portfolio.php"> <span class="glyphicon glyphicon-picture"></span> Portfolio</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="contact.html"> <span class="glyphicon glyphicon-phone"></span> Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div> <!-- container -->
      </div> <!-- navbar -->
    </div> <!-- header -->