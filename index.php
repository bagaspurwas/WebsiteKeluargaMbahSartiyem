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
            <a class="navbar-brand" href="#">Database Keluarga</a>
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
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h2>Pencarian Anggota Keluarga Mbah Sartiyem</h2>
        <form action="/index.php" method="get">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="textquery">
            <input type="radio" name="seleksi" value="nama" checked> Nama
            <input type="radio" name="seleksi" value="cabang"> Keluarga Cabang
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </form>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
            <td> Cabang </td>
            <td> Nama </td>
            <td> JK </td>
            <td> Status </td>
            <td> Domisili </td>
            <td> Level </td>
            </tr>
            </thead>
          <tbody>
 <?php
      include 'connection.php';
      include 'functions.php';
      /*check for error*/
      if ($mysqli->connect_errno) {
          echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }

      $textquery = (isset($_GET['textquery']) ? $_GET['textquery'] : null);
      /*key to print all members*/
      $seleksi = (isset($_GET['seleksi']) ? $_GET['seleksi'] : null);
      //set Query
      $sqlquery = "";
      if ($seleksi == "nama") {
        $sqlquery = "SELECT Nama, Cabang, `Jenis Kelamin`, Status, Domisili, Tree FROM `anggota` WHERE Nama LIKE ?";
      }
      else if ($seleksi == "cabang") {
        $sqlquery = "SELECT Nama, Cabang, `Jenis Kelamin`, Status, Domisili, Tree FROM `anggota` WHERE Cabang LIKE ?";
      }
      /*set text query to match anything in between*/
      $textquery_pattern = '%'.$textquery.'%';
      /* Prepared statement*/
      if ($stmt = $mysqli->prepare($sqlquery)) {
          /* bind parameters for markers */
          $stmt->bind_param("s", $textquery_pattern);
          /* execute query */
          if ($stmt->execute()) {
            echo "<p class='text-center'>Pencarian untuk $textquery :</p>";
          }
          /*init vars*/
          $nama_q = "";
          $tree_q = "";
          $status_s = "";
          $gender_s = "";

          /*validate for empty string*/
          $stmt->bind_result($nama_q, $cabang_q, $gender, $status, $domisili, $tree);
          if (($textquery != " ") && ($textquery != "")) {
            while ($stmt->fetch()) {
                list($gender_s, $status_s, $tree_q) = decodeData($gender, $status, $tree);
                echo "<tr>
                      <td> $cabang_q </td>
                      <td> $nama_q </td>
                      <td> $gender_s </td>
                      <td> $status_s </td>
                      <td> $domisili </td>
                      <td> $tree_q </td>
                      </tr>";
            }
          }
          else {
            echo "
              <tr>
                <td> Invalid Text to query</td>
              </tr>
            ";
          }

          $stmt->close();
          $mysqli->close();
      }
      else {
           echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
      }
  ?>
          </tbody>
        </table>
      </div>
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
