<?php
	include 'connection.php';
    include 'functions.php';
    /*check for error*/
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    //define array
    $array_nama = array();
    $array_tree = array();
    //define query 
    $nama_h_get = $_POST[];
    $q_hierarchy = "SELECT Tree, Cabang FROM `anggota` WHERE `Nama` = ?";
    $q_hierarchy_branch = "SELECT Nama, Tree FROM `anggota` WHERE Cabang = ?";
    $temp_tree = "";
    /*select from database as requested by user and then save to array*/
    if ($stmt = $mysqli -> prepare($q_hierarchy)) {
    	$stmt -> bind_param("s", $nama_h_get);
    	$stmt -> execute();
    	/*save selected name's tree and cabang result to $temp_tree and $temp_cabang*/
    	$stmt -> bind_result($main_tree, $main_cabang);
    	if ($stmt2 = $mysqli -> prepare($q_hierarchy_branch)) {
    		$stmt2 -> bind_param("s", $main_cabang);
    		$stmt2 -> execute();
    		$stmt2 -> bind_result($nama_relatives, $cabang_relatives);
    		while ($stmt2 -> fetch()) {
    			/*append relatives of given name to an array of name and cabang*/
				$array_nama[] = $nama_relatives;
				$array_cabang[] = $cabang_relatives;
    		}
    		$stmt2 -> close();
    	}//if $stmt2
    	$stmt -> close();
    	$mysqli -> close();
    }//if $stmt
?>