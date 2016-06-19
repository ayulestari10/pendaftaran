<?php
	session_start();  
	require_once "connect.php";

	$_SESSION['status'] = "gagal";

	if (isset($_POST['nis'], $_POST['password'])) {
		$nis		= mysqli_real_escape_string($connection, $_POST['nis']);
		$password	= mysqli_real_escape_string($connection, $_POST['password']);

		$sql		= "SELECT * FROM user WHERE nis='". $nis ."' AND password='". $password ."'";
		$run		= mysqli_query($connection, $sql);
		if (mysqli_num_rows($run) == 1) {
			while ($row = mysqli_fetch_array($run)) {
				$_SESSION['nis']	= $row['nis'];

				$_SESSION['status'] = "berhasil";

				header("Location: edit.php");
				exit;
			}
		} else {
			$_SESSION['status'] = "gagal";
			header("Location: login.php");
			exit;
		}

	} else {
		header("Location: login2.php");
		exit;
	}
?>