<?php /*
	session_start(); 
	if(!isset($_SESSION['nis'])){
		header('Location:home.php');
		exit;
	}*/

?>
<!--enctype="multipart/form-data"-->
<?php include('template/header.php'); ?>

<body>
	<?php include('template/navbar.php'); ?>
	<center>
		<h1>Input Data</h1>
	</center>
	<form action="generate.php" method="POST" enctype="multipart/form-data">
		<div class="container">
	        <div class="col-md-5">
	            <h2>Data Diri</h2>
	            <div class="form-group">
	                <label for="nis">Nomor Induk Siswa (NIS)*</label>
	                <input type="text" name="nis" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="nama">Nama</label>
	                <input type="text" name="nama" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="tempat_lahir">Tempat Lahir</label>
	                <input type="text" name="tempat_lahir" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="tanggal_lahir">Tanggal Lahir</label>
	                <input type="text" name="tanggal_lahir" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="nama">Jenis Kelamin</label><br/>
	                <input type="radio" value="laki-laki" name="jenis_kelamin"/> Laki-Laki <br/>
	                <input type="radio" value="Perempuan" name="jenis_kelamin"/> Perempuan
	            </div>
	            <div class="form-group">
	                <label for="agama">Agama</label>
	                <select name="agama" class="form-control">
	                    <option>-- Pilih --</option>
	                    <option value="Islam">Islam</option>
	                    <option value="Kristen">Kristen</option>
	                    <option value="Budha">Budha</option>
	                    <option value="Hindu">Hindu</option>
	                    <option value="Konghucu">Konghucu</option>
	                </select>
	            </div>
	            <div class="form-group">
	                <label for="alamat_lengkap">Alamat Lengkap Siswa</label>
	                <input type="text" name="alamat_lengkap" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="no_telepon">No. Telepon</label>
	                <input type="text" name="no_telepon" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="no_hp">No. HP</label>
	                <input type="text" name="no_hp" class="form-control" />
	            </div>
	            <div class="form-group">
	                <label for="email">Email</label>
	                <input type="text" name="email" class="form-control" />
	            </div>
	        </div>

	        <div class="col-md-5" style="margin-left: 14%;">
	            <h2>Input Nilai</h2>
	            <table class="table table-striple">
	                <tr>
	                    <th>No.</th>
	                    <th>Mata Pelajaran</th>
	                    <th>Nilai</th>
	                </tr>
	                </br>
	                <tr>
	                    <td>1</td>
	                    <td>Kimia</td>
	                    <td><input type="text" name="nilai_kimia" /></td>
	                </tr> 
	                <tr>
	                    <td>2</td>
	                    <td>Biologi</td>
	                    <td><input type="text" name="nilai_biologi" /></td>
	                </tr> 
	                <tr>
	                    <td>3</td>
	                    <td>Matematika</td>
	                    <td><input type="text" name="nilai_matematika" /></td>
	                </tr> 
	                <tr>
	                    <td>4</td>
	                    <td>Fisika</td>
	                    <td><input type="text" name="nilai_fisika" /></td>
	                </tr> 
	                <tr>
	                    <td>5</td>
	                    <td>Bahasa Indonesia</td>
	                    <td><input type="text" name="nilai_bindo" /></td>
	                </tr> 
	                <tr>
	                    <td>6</td>
	                    <td>Bahasa Inggris</td>
	                    <td><input type="text" name="nilai_bing" /></td>
	                </tr>
	            </table> 
	        </div>
	    </div>
	    <div class="row" style="margin-bottom: 2%;">
	        <div class="col-md-offset-10">
	            <input type="submit" value="Simpan" class="btn btn-success" />
	        </div>
	    </div>
	</form>

</body>
<?php /*
	session_start(); 
	unset($_SESSION['nis']);
	unset($_SESSION['password']);
	*/
?>
<?php include('template/footer.php'); ?>