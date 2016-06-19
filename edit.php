<?php  
	session_start();
	require_once "connection.php";

	if (!isset($_GET['nis']) || !isset($_GET['password'])) {
		header("Location: login.php");
		exit;
	} else {
		if ($_SESSION['role'] == "Super Admin") {
			$sql	= "SELECT * FROM maba WHERE nis='".$_GET['nis']."' LIMIT 1";
		} else {
			$sql	= "SELECT * FROM maba WHERE nis='".$_GET['nis']."' AND role='".$_SESSION['role']."' LIMIT 1";
		}

		$run 	= mysqli_query($connection, $sql);
		while ($row = mysqli_fetch_array($run)) {
			$nis 					= $row['nis'];
			$password 				= $row['password'];
			$nama 					= $row['nama'];
			$tempat_lahir			= $row['tempat_lahir'];
			$tanggal_lahir				= $row['tanggal_lahir'];
			$jenis_kelamin					= $row['jenis_kelamin'];
			$agama					= $row['agama'];
			$alamat_lengkap			= $row['alamat_lengkap'];
			$no_telepon					= $row['no_telepon'];
			$no_hp					= $row['no_hp'];
			$email					= $row['email'];
			$nilai_kimia			= $row['nilai_kimia'];
			$nilai_biologi			= $row['nilai_biologi'];
			$nilai_matematika		= $row['nilai_matematika'];
			$nilai_fisika			= $row['nilai_fisika'];
			$nilai_bindo			= $row['nilai_bindo'];
			$nilai_bing				= $row['nilai_bing'];
		}
	}
?>

<?php include "template/header.php"; ?>
<body>

	<?php include "template/navbar.php"; ?>

	<center>
		<h1 style="margin-top: 6%">Form Pengisian Data Siswa Baru</h1>		
	</center>

	  <form style="margin-top: 3%;" action="edit_process.php" method="POST" enctype="multipart/form-data">
	  	<div class="row">
	  		<div class="col-md-4">
	  			<input type="hidden" name="edit" value="editing" />
	  		</div>
		  	<div class="col-md-7">
		  		<table class="table table-striple">
					<tbody>
						<!-- Foto
						<tr>
							<td colspan="2" style="text-align: center;">
								<img width="240" height="250" src="<?= 'foto/' . $nis . '.png' ?>" />
							</td>
						</tr>
						-->
						<tr>
							<td>nis</td>
							<td>
								<input type="hidden" name="nis" id="nis" value="<?= $nis ?>" />
							</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>
								<input type="text" name="password" value="<?= $password ?>" />
							</td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>
								<div class="field">
						  			<input type="text" name="nama" id="nama" value="<?= $nama ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>tempat_lahir</td>
							<td>
								<div class="field">
						  			<input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $tempat_lahir ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>tanggal_lahir</td>
							<td>
								<input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir ?>" />
							</td>
						</tr>
						<tr>
							<td>jenis_kelamin</td>
							<td>
						  		<input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $jenis_kelamin ?>" />
							</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td>
								<input type="text" name="agama" id="agama" value="<?= $agama ?>" />
							</td>
						</tr>
						<tr>
							<td>Alamat Asal</td>
							<td>
								<input type="text" name="alamat_asal" id="alamat_asal" value="<?= $alamat_asal ?>" />
							</td>
						</tr>
						<tr>
							<td>Alamat Sekarang</td>
							<td>
								<input type="text" name="alamat_sekarang" id="alamat_sekarang" value="<?= $alamat_sekarang ?>" />
							</td>
						</tr>
						<tr>
							<td>No Telepon</td>
							<td>
								<input type="text" name="no_telepon" id="no_telepon" value="<?= $no_telepon ?>" />
							</td>
						</tr>
						<tr>
							<td>No HP</td>
							<td>
								<div class="field">
						  			<input type="text" name="no_hp" id="no_hp" value="<?= $no_hp ?>" />
						  		</div>
							</td>
						</tr>
						<tr>
							<td>nilai_kimia</td>
							<td>
								<input type="text" name="nilai_kimia" id="nilai_kimia" value="<?= $nilai_kimia ?>" />
							</td>
						</tr>
						<tr>
							<td>nilai_biologi</td>
							<td>
								<input type="text" name="nilai_biologi" id="nilai_biologi" value="<?= $nilai_biologi ?>" />
							</td>
						</tr>
						<tr>
							<td>nilai_matematika</td>
							<td>
								<input type="text" name="nilai_matematika" id="nilai_matematika" value="<?= $nilai_matematika ?>" />
							</td>
						</tr>
						<tr>
							<td>nilai_fisika</td>
							<td>
								<input type="text" name="nilai_fisika" id="nilai_fisika" value="<?= $nilai_fisika ?>" />
							</td>
						</tr>
						<tr>
							<td>nilai_bindo</td>
							<td>
								<input type="text" name="nilai_bindo" id="nilai_bindo" value="<?= $nilai_bindo ?>" />
							</td>
						</tr>
						<tr>
							<td>nilai_bing</td>
							<td>
								<input type="text" name="nilai_bing" id="nilai_bing" value="<?= $nilai_bing ?>" />
							</td>
						</tr>
					</tbody>
				</table>
				<center>
					<input class="ui positive button" type="submit" value="Simpan Perubahan" />
				</center>	
		  	</div>	
	  </form>
</body>
</html>
<?php 
	unset($_SESSION['status']);
?>