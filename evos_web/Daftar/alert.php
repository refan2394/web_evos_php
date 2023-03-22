<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
 






    // Simpan nama dan password ke dalam session
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['password'] = $password;
   









    // Redirect ke halaman login
    echo "<script>alert('Anda berhasil mendaftar!')</script>";
    echo "<script>window.location.href = '../login/index.php';</script>";

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="alert.css"> 
</head>
<style>
	
</style>
<body>
	<section class="servis">
		<div class="contain">
		
			
			<div class="kontainer">
			<div class="content">
				<h1 align="center">Open Recruitment</h1>
				
				<br>
				<form action="alert.php" method="POST">
				  <div class="user-details">
					<div class="input-box">
					  <span class="details">Nama</span>
					  <input type="text" id="nama" name="nama" placeholder="masukan nama/username" required>
					</div>
					
					<div class="input-box">
					  <span class="details">password</span>
					  <input type="text" id="password" name="password" placeholder="masukan password" required>
					</div>
					
					  <div class="input-box">
						<span class="details">Agama</span>
						
					  <select class="kombo" id="Agama" name="agama">
                    
						
                        <option>Islam</option>
                        <option>Kristen Protestan</option>
						<option>Kristen Katolik</option>
						<option>Hindu</option>
                        <option>Buddha</option>
						<option>Konghucu</option>

                    </select>
					</div>
					<div class="input-box">
					  <span class="details">No Hp</span>
					  <input type="text" id="telp" placeholder="masukan no hp" required>
					</div>
					<div class="input-box">
						<span class="details">Alasan Ingin masuk Evos :</span>
						<textarea class="teks" id="alamat" required></textarea>
					  </div>
					  <div class="input-box">
						<span class="details">KTP</span>
						<input type="file" id="gambar" required>
					  </div>
				  </div>
				  <div class="gender-details">
					<input type="radio" name="gender" id="dot-1" value="wanita" required>
					<input type="radio" name="gender" id="dot-2" value="pria" required>
					<span class="gender-title">Jenis kelamin</span>
					<div class="category">
					  <label for="dot-1">
					  <span class="dot one"></span>
					  <span class="gender">Wanita</span>
					</label>
					<label for="dot-2">
					  <span class="dot two"></span>
					  <span class="pria">Pria</span>
					</label>
					</div>
				  </div>
				  <br>
				  <span class="hobi">Role</span><br>
				  
				  <br>
				  <input type="checkbox" id="Tanker" name="Tanker" value="Tanker">
				  <label for="Tanker"> Tanker</label><br>
				  <input type="checkbox" id="Offlaner" name="Offlaner" value="Offlaner">
				  <label for="Offlaner"> Offlaner</label><br>
				  <input type="checkbox" id="Goldlaner" name="Goldlaner" value="Goldlaner">
				  <label for="Goldlaner"> Goldlaner</label><br>
				  <input type="checkbox" id="Support" name="Support" value="Support">
				  <label for="Support"> Support</label><br>
				  <input type="checkbox" id="Jungler" name="Jungler" value="Jungler">
				  <label for="Jungler"> Jungler</label><br>
				
				
				  <div class="button" >
					<center><input type="submit"></center>
				  </div>

				</form>
				<div class="kembali">
					<center><a href="../web/web.html" >
						<button class="back">Kembali</button>
					 </a></center>
				</div>
				<div>
					<label id="demo"></label>
				</div>
				</div>
			  </div>
			</div>
			
	</section>
<footer>
	<p>
	Hak cipta @copy 2023 - Refan
	</p>
</footer>

</div>

</body>
    <script src="alert.js"></script>
</html>