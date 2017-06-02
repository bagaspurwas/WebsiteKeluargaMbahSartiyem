<?php
	include 'connection.php';	
    if ($mysqli->connect_errno) {
       echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //init update query 
	$update_query = "";	 
    //get params from html request
    $inputnama = (isset($_POST['inputnama']) ? $_POST['inputnama'] : null);
	$u_options = (isset($_POST['u_options']) ? $_POST['u_options'] : null);
	$u_string = (isset($_POST['u_string']) ? $_POST['u_string'] : null);

	$type_string = "s";

	if ($u_options == "nama") {
		$update_query = "UPDATE `anggota` SET `Nama` = ? WHERE `Nama` = $inputnama";
	}
	else if ($u_options == "status") {
		$update_query = "UPDATE `anggota` SET `Status` = ? WHERE `Nama` = $inputnama";
		$u_string = (int) $u_string;
		$type_string = "i";
	} 
	else if ($u_options == "domisili") {
		$update_query = "UPDATE `anggota` SET `Domisili` = ? WHERE `Nama` = $inputnama";
	}
	else {
		echo "Query doesn't match any format<br>";
	}

	/*Prepare statement for execution*/
	if ($stmt = $mysqli->prepare($update_query)) {
		if ($update_query != "") {

			$stmt -> bind_param("$type_string", $u_string);

			if ($stmt -> execute()) {
				echo "Query Succeed!";
			}
			else {
				echo "Query returned an error!";
			}
			$stmt -> close();
			$mysqli -> close();
		}
		else {
			echo "Options Not Given<br>";
		}
	}
      else {
           echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
      }

	echo "<br>return to main page <a href='https://kmsartiyem.000webhostapp.com'>click</a>";	
?>
