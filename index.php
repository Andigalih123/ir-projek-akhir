<!DOCTYPE html>
<html>
<head>
	<meta name="referrer" content="strict-origin" />
	<title>Projek UAS IR</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css">
</head>
<style type="text/css">
	  .col-example {
	      padding: 1rem;
	      background-color: #33b5e5;
	      border: 2px solid #fff;
	      color: #737373;
	      text-align: center;
	    }
	    .search_form input{
	    	padding: 25px;
	    	border-top-left-radius: 2em;
	    	border-bottom-left-radius: 2em;
	    	border: 1px solid #eaeaea !important;
	    }
	    .search_form input:focus{
	    	border:0px !important;
	    	outline: none !important;
	    	box-shadow: none !important;
	    	border: 1px solid #eaeaea !important;
	    }
	    .search_form button{
	    	padding: 0 30px !important;
	    	border-bottom-right-radius: 2em;
	    	border-top-right-radius: 2em;
	    	border: 1px solid #eaeaea !important;
	    }
	    .action {
	    	font-size: 14px;
	    	margin-left: 25px;
	    	color:#737373;
	    }
		body {
  background-color: #EEE8AA;
}

</style>
<body>
	<div class="container">
		<div class="d-flex align-items-center justify-content-center" style="height: 500px">
			<div class="col-6">
				<form method="GET" action="proses_cari.php">
					<div class="text-center" style="margin-bottom: 50px">
						<h1>Aplikasi Pencarian Dokumen</h1>
						<small>Silahkan untuk ketikan keyword dari berita 😊</small>
					</div>
					<div class="input-group mb-3 ml-4 search_form">
					  <input type="text" class="form-control" placeholder="ketik artikel disini" name="search" autocomplete="on">
					  <div class="input-group-append">
					    <button class="btn btn-warning" type="submit"><i class="fas fa-search"></i></button>
					  </div>
					</div>
					<div class="text-center">
						<small><u>Proses pencarian memerlukan waktu sekitar 30 detik</u></small>

					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="ml-5 mb-5 mt+3"><h2><u>Berita</u></h2></div>
					<table class="table ml-5">
					
					  <tbody class="tbody-blue">
					  	<?php 
					  		include 'koneksi.php';
							$result = mysqli_query($konek," SELECT * FROM `tbberita`");
							while($row = mysqli_fetch_array($result)) {
								echo '<tr>';
						    	echo '<td>'.$row['Judul'].'</td>';
							    // echo '<td>'.$row['url'].'</td>';
								echo '</tr>';
							}
					  	?>
					  </tbody>
					</table>
		
		
	
		</div>
	</div>

<script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
</body>
<footer>
</footer>
</html>
