<?php  
	session_start();
	if(isset($_SESSION['nis'])){
		header('Location:input_data.php');
		exit;
	}
?>

<?php include('template/header.php'); ?>

<body>
	<?php include('template/navbar.php'); ?>
	<form action="auth_process.php" method="POST">
		<div class="form-group">
            <label for="nis">Nomor Induk Siswa (NIS)*</label>
            <input type="text" name="nis" class="form-control" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" class="form-control" />
        </div>
        <input type="submit" value="Masuk" />
	</form>
</body>
<?php include('template/footer.php'); ?>