<!DOCTYPE html>
<html>
<head>
	<title>Program PHP Sederhana</title>
</head>
<body>
	<h2>Input Data</h2>
	<form action="" method="post">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan">
			<option value="dosen">Dosen</option>
			<option value="mahasiswa">Mahasiswa</option>
			<option value="insinyur">Insinyur</option>
		</select><br><br>
		<input type="submit" name="submit" value="Kirim">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			$tanggal_sekarang = date('Y-m-d');
			$umur = floor((strtotime($tanggal_sekarang) - strtotime($tgl_lahir))/(60*60*24*365));

			switch ($pekerjaan) {
				case 'dosen':
					$gaji = 10000000;
					break;
				case 'mahasiswa':
					$gaji = 500000;
					break;
				case 'insinyur':
					$gaji = 20000000;
					break;
			}

			echo "<h2>Output Data</h2>";
			echo "Nama: ".$nama."<br>";
			echo "Tanggal Lahir: ".$tgl_lahir."<br>";
			echo "Umur: ".$umur." tahun<br>";
			echo "Pekerjaan: ".$pekerjaan."<br>";
			echo "Gaji: Rp ".$gaji."<br>";
		}
	?>
</body>
</html>
