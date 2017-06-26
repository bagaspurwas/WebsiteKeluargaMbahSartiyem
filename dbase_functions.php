<?php
     function showAnggotaByLevel($param) {
       include 'connection.php';
       include 'functions.php';
       /*check for error*/
       if ($mysqli->connect_errno) {
           echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
       }
       //set Query
       $sqlquery = "SELECT Nama, Cabang, `Jenis Kelamin`, Status, Domisili, Tree FROM `anggota` WHERE Tree LIKE ?";

       /*set text query to match anything in between*/
       $textquery_pattern = $param; //'0%';
       /* Prepared statement*/
       if ($stmt = $mysqli->prepare($sqlquery)) {
           /* bind parameters for markers */
           $stmt->bind_param("s", $textquery_pattern);
           /* execute query */
           $stmt->execute();
           /*init vars*/
           $nama_q = "";
           $tree_q = "";
           $status_s = "";
           $gender_s = "";

           /**/
           $stmt->bind_result($nama_q, $cabang_q, $gender, $status, $domisili, $tree);
           /*fetch result and print each in a table row*/
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
           $stmt->close();
           $mysqli->close();
       }
       else {
            echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
       }

     }

 ?>
