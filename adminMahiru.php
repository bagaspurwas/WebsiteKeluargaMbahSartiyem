<html>
	<form action="mhrUpdate.php" method="POST">
	<label for="data_update">Update Data</label>
		<label for="inputnama">Nama</label>
		Nama Orang : <input type="text" nama="inputnama"><br>
		<input type="text" name="u_string"><br>
		<input type="radio" name="u_options" value="nama">Nama<br>
		<input type="radio" name="u_options" value="status">Status<br>
		<input type="radio" name="u_options" value="domisili">Domisili<br>
		<button action="Submit" name="Submit">Submit</button>
	</form>

</html>

<?php
include 'connection.php';
?>
