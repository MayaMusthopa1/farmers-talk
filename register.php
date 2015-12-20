<!DOCTYPE html>
<html>
<head>
	<title> Registrasi Farmers Talk</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div id="utama" style="margin-top:10%;">
		<div id="judul">
			Registrasi Farmers Talk
		</div>

	<div id="inputan">
		<form action="" method="post">
			<div>
				<input type="text" name="user" placeholder="username" class="lg" />
			</div>
			<div style="margin-top:10px;">
				<input type "password" name="pass" placeholder="password" class="lg" />
			</div>
			<div style="margin-top:10px;">
				<input type="text" name="nama_lengkap" placeholder="nama lengkap" class="lg" />
			</div>
			<div style="margin-top:10px;">
				<select name="jenis_kelamin">
					<option value="">- jenis kelamin -</option>
					<option value="laki-laki">laki-laki </option>
					<option value="perempuan">perempuan </option>
				</select>
			</div>
			<div style="margin-top:10px;">
				<textarea name='alamat' class="lg" placeholder='alamat'></textarea>
			</div>
			<div style="margin-top:10px;">
				<select name="level">
					<option value="konsumen">konsumen</option>
				</select>
			</div>

			<div style="margin-top:10px;">
				<input type="submit" name="register" value="Register" class="btn" />
				<span style='margin-left:130px;'>
					<a href='login.php'class="btn-right">Login</a>
				</span>
			</div>
		</form>
		<?php
		include "talk/koneksi.php";
		if(@$_POST['register']){
			$user = @$_POST['user'];
			$pass = @$_POST['pass'];
			$nama_lengkap = @$_POST['nama_lengkap'];
			$jenis_kelamin = @$_POST['jenis_kelamin'];
			$alamat = @$_POST['alamat'];
			$level = @$_POST['level'];

			if($user == '' || $pass == '' || $nama_lengkap == '' || $jenis_kelamin == '' || $alamat == '' || $level =='') {
				?> <script type="text/javascript"> alert('inputan tdk boleh ada yang kosong');</script> <?php
			} else {
				$sql_insert = mysql_query("insert into tb_login values ('', '$user', md5('$pass'), '$nama_lengkap', '$jenis_kelamin', '$alamat', '$level')") or die (mysql_error());
				if($sql_insert){
					?><script type="text/javascript">alert('pendaftaran berhasil, silahkan login');</script> <?php
				}
			}
		}
		?>
	</div>
</div>
</body>