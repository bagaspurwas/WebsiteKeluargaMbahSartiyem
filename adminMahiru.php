<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Database Mbah Sartiyem</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
    <script src="func.js"></script>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://kmsartiyem.000webhostapp.com/">Database Keluarga</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="https://kmsartiyem.000webhostapp.com/">Home</a></li>
              <li><a href="acara.php">Acara</a></li>
              <li><a href="about.php">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lihat <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="showAnak.php">Anak</a></li>
                  <li><a href="showCucu.php">Cucu</a></li>
                  <li><a href="showCicit.php">Cicit</a></li>
                  <li><a href="showCanggah.php">Canggah</a></li>
                  <!--li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li-->
                </ul>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <?php
      	
      ?>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2> Admin Page</h2>
        <div class="form-group">
	      	<form action="mhrUpdate.php" method="POST">
				<label for="data_update">Update Data</label><br>
				<label for="inputnama">by Nama</label><br>
				Nama Orang : <input type="text" name="inputnama"><br>
				<input type="text" name="u_string"><br>
				<input type="radio" name="u_options" value="nama">Nama<br>
				<input type="radio" name="u_options" value="status">Status<br>
				<input type="radio" name="u_options" value="domisili">Domisili<br>
				<button action="Submit" name="Submit">Submit</button>
			</form>
		</div>
	"Add Keluarga"
	<form action="mhrAdd.php" method="POST">
	<label>
		Cabang : <input type="text" name="add_cabang"><br>
		Nama : <input type="text" name="add_nama"><br>
		Jenis Kelamin : <input type="text" name="add_gender"><br>
		Status (0/1) : <input type="text" name="add_status"><br>
		Domisili : <input type="text" name="add_domisili"><br>
		Tree : <input type="text" name="add_tree"><br>
		<button action="Submit" name="Submit">Submit</button>
	</label>
	</form>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</html>



<?php
include 'connection.php';
?>
