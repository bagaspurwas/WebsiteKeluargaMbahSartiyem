 <?php
 	include 'connection.php';
    if ($mysqli->connect_errno) {
       echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //get params from html POST request
    $add_cabang = (isset($_POST['add_cabang']) ? $_POST['add_cabang'] : null);
    $add_nama = (isset($_POST['add_nama']) ? $_POST['add_nama'] : null);
	$add_gender = (isset($_POST['add_gender']) ? $_POST['add_gender'] : null);
	$add_status = (isset($_POST['add_status']) ? $_POST['add_status'] : null);
	$add_domisili = (isset($_POST['add_domisili']) ? $_POST['add_domisili'] : null);
	$add_tree = (isset($_POST['add_tree']) ? $_POST['add_tree'] : null);
	//convert
	$add_gender_int = (int)$add_gender;
	$add_status_int = (int)$add_status;

	// int query string
	$query_str = "INSERT INTO `anggota` (Cabang, Nama,`Jenis Kelamin`,Status,Domisili,Tree) VALUES (?,?,?,?,?,?)";

	if ($stmt = $mysqli -> prepare($query_str)) {
		$stmt -> bind_param("ssiiss", $add_cabang, $add_nama,$add_gender_int,$add_status_int,$add_domisili,$add_tree);
		if ($stmt -> execute()){
			echo "Query completed";
		}
		else {
			echo "Query can't be completed. Return Error.";
		}
	$stmt -> close();
	$mysqli -> close();
	}
    else {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }
 ?>
