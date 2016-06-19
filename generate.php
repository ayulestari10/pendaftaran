<?php 
	session_start();
	require_once "connection.php";
	print_r($_POST);
	exit;

	if (!empty($_POST["nis"]) && !empty($_POST["nama"]) && !empty($_POST["no_hp"])) {
		$nis				= $_POST["nis"];
		$nama 				= $_POST["nama"];
		$tempat_lahir		= $_POST["tempat_lahir"];
		$tanggal_lahir		= $_POST["tanggal_lahir"];
		$jenis_kelamin		= $_POST["jenis_kelamin"];
		$agama				= $_POST["agama"];
		$alamat_lengkap		= $_POST["alamat_lengkap"];
		$no_telepon			= $_POST["no_telepon"];
		$no_hp				= $_POST["no_hp"];
		$email				= $_POST["email"];
		$nilai_kimia		= $_POST["nilai_kimia"];
		$nilai_biologi		= $_POST["nilai_biologi"];
		$nilai_matematika	= $_POST["nilai_matematika"];
		$nilai_fisika		= $_POST["nilai_fisika"];
		$nilai_bindo		= $_POST["nilai_bindo"];
		$nilai_bing			= $_POST["nilai_bing"];

		$sql				= sprintf("INSERT INTO data(nis, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat_lengkap, no_telepon, email, no_hp, nilai_kimia, nilai_biologi, nilai_matematika, nilai_fisika, nilai_bindo, nilai_bing) VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')", mysqli_real_escape_string($connection, $nis), mysqli_real_escape_string($connection, $nama), mysqli_real_escape_string($connection, $tempat_lahir), mysqli_real_escape_string($connection, $tanggal_lahir), mysqli_real_escape_string($connection, $jenis_kelamin), mysqli_real_escape_string($connection, $agama), mysqli_real_escape_string($connection, $alamat_lengkap), mysqli_real_escape_string($connection, $no_telepon), mysqli_real_escape_string($connection, $no_hp), mysqli_real_escape_string($connection, $email), mysqli_real_escape_string($connection, $nilai_kimia), mysqli_real_escape_string($connection, $nilai_biologi), mysqli_real_escape_string($connection, $nilai_matematika), mysqli_real_escape_string($connection, $nilai_fisika), mysqli_real_escape_string($connection, $nilai_bindo), mysqli_real_escape_string($connection, $nilai_bing));

		mysqli_query($connection, $sql);

		$_SESSION['nis'] 	= $nis;

		$_SESSION["status"] 	= "Success";
	} else {
		$_SESSION["status"] 	= "Failed";
	}

	header("Location: input.php");
?>

