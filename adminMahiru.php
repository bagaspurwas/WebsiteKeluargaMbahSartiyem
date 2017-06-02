<html>
	<form action="mhrUpdate.php" method="POST">
	<label for="data_update">Update Data</label><br>
		<label for="inputnama">by Nama</label><br>
		Nama Orang : <input type="text" nama="inputnama"><br>
		<input type="text" name="u_string"><br>
		<input type="radio" name="u_options" value="nama">Nama<br>
		<input type="radio" name="u_options" value="status">Status<br>
		<input type="radio" name="u_options" value="domisili">Domisili<br>
		<button action="Submit" name="Submit">Submit</button>
	</form>
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

</html>

<?php
include 'connection.php';
?>
