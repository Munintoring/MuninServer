<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="300" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="icon" href="docs/favicon.ico">

    <title>Overview voor <?php $ssid = $_GET["SSID"];
echo "$ssid"; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="docs/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="docs/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Monitoring</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="overview.php">Lijst op IP</a></li>
            <li class = "active"><a href="overviewssids.php">Lijst op SSID</a></li>
           <li><a href="overviewaps.php">Lijst op AP</a></li>
           <li><a href="overviewrogues.php">Lijst van rogues</a></li>
          </ul>
	  <ul id="navbar" class="nav navbar-nav navbar-right navbar-collapse collapse">
            <li><a href="../munin">Ga naar Munintoring</a></li>
        </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
	  


    <div class="container theme-showcase" role="main">
		


      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Overview SSIDs</h2>
        <p>Hier zie je een overzicht van alle clients verbonden met: <?php 
echo "$ssid"; ?>. Je kan op een IP klikken voor meer info te krijgen over deze client of op de AP voor alle clients verbonden met deze AP.</p>
      </div>
		<nav>
  <ul class="pager">
    <li class="previous"><a href="overviewssids.php"><span aria-hidden="true">&larr;</span> Ga terug naar het overzicht van de SSIDs!</a></li>
  </ul>
</nav>
<nav>
  <ul class="pager">
    <li class="previous"><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><span aria-hidden="true">&larr;</span> Ga terug naar de vorige pagina!</a></li>
  </ul>
</nav>    
<?php



exec("/etc/scripts/ToonClientsPerSSID $ssid", $output);


foreach ($output as &$value) {
   echo "$value";
}


?>






    </div> <!-- /container -->
	  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

