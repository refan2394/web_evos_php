<?php
// pastikan tidak ada output sebelum session_start
// atau sebelum setiap tag <?php di file PHP
session_start();

// validasi form dan set $_SESSION
// ...

// periksa apakah $_SESSION telah didefinisikan sebelum digunakan
if (isset($_SESSION['nama'])) {
    // tampilkan pesan sambutan

    $name = $_SESSION['nama'];

} else {
    // tampilkan pesan kesalahan jika $_SESSION belum diatur
    echo "Mohon masuk terlebih dahulu.";
}

?>


<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	         
	     
	          <li>
              <a href="index.php"><span class="fa fa-paper-plane mr-3"></span> log out</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Note</h3>
						<p>Tampilan web terkadang berubah setiap browser:chrome,microsoft edge</p>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	     
	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4">Selamat Datang <span><?php $name = $_SESSION['nama'];

echo " $name!"; ?></span></h2>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>