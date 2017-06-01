<?php
	include_once 'connection.php';	
    if ($mysqli->connect_errno) {
       echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }	 
    //get params from html request
    $inputnama = (isset($_GET['inputnama']) ? $_GET['inputnama'] : null);
	$u_options = (isset($_GET['u_options']) ? $_GET['u_options'] : null);
	$u_string = (isset($_GET['u_string']) ? $_GET['u_string'] : null);

	//init update query 
	$update_query = "";

	if ($u_options == "nama") {
		$update_query = "UPDATE `anggota` SET NAMA = ? WHERE NAMA = $inputnama";
	}
	else if ($u_uptions == "status") {
		$update_query = "UPDATE `anggota` SET STATUS = ? WHERE NAMA = $inputnama";
	} 
	else if ($u_uptions == "domisili") {
		$update_query = "UPDATE `anggota` SET DOMISILI = ? WHERE NAMA = $inputnama";
	}
	else {
		echo "Query doesn't match any format";
	}
	/*Prepare statement for execution*/
	if ($stmt -> $mysqli.prepare($update_query)) {
		if ($u_options == "status") {
			$stmt -> bindparam('i', int($u_string));
		}
		else {
			$stmt -> bindparam('s', $u_string);		
		}

		if ($stmt -> execute()) {
			echo "Query Succeed!";
		}
		else {
			echo "Query returned an error!";
		}
		$stmt -> close();
		$mysqli -> close();
	}

	echo "return to main page <a href='homepage link'>click</a>";	
?>
