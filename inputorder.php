< !DOCTYPE html>
<html>
<head>
		<title>Input Order</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="js/jquery-3.2.1.min.js"></script>
		<script type="css/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<nav class="row container-fluid">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Input Order</a></li>
		      <li><a href="#">View Order</a></li>
		      <li><a href="#">Tentang Kami</a></li>	
		      <li><a href="#">Tentang Kami</a></li>
		      <li><a href="#">Kontak</a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
      			<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
   			 </ul>
		  </div>
		</nav>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src=img/baju2.png alt="Clothing" class="img-responsive">
		      	<div class="carousel-caption">
        			<h3>FinOr</h3>
        			<p>Lebih Mudah Lebih Baik</p>
      			</div>
		    </div>

		    <div class="item">
		      <img src=img/baju3.png alt="Clothing">
		    </div>
		    <div class="item">
		      <img src=img/baju4.png alt="Clothing">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="row persegipanjang">
			<p> Input Order </p>
		</div>
	</nav>
	<div class="row col-lg-4 col-md-offset-4 kotakan">
<!-- nginputt ke SQL -->
				<form action="inputDBorder.php" method="POST">
					<div class="form-group">
						<label>Email Pembeli</label>
						<input type="text" class="form-control" placeholder="Masukkan Email" required="true" name="email" id="email">
					</div>
					<div class="form-group">
					<label>Nama Pembeli</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Pembeli" required="true" name="nama" id="nama">
					</div>
					<div class="form-group">
						<label>Kota Asal</label>
						<?php mysql_connect("localhost","root","");
						mysql_select_db("finor");

						$sql = "SELECT Kota FROM kota";
						$result = mysql_query($sql);

						echo "<select name = 'KotaAsal' onChange='cekTarif()' class='form-control' id='asal'>";
						while ($row = mysql_fetch_array($result)){
							echo "<option value='" . $row['Kota'] ."'>". $row['Kota'] . "</option>";
						}
						echo "</select>";

						  ?>
					</div>
					<div class="form-group">
						<label>Kota Tujuan</label>
						<?php mysql_connect("localhost","root","");
						mysql_select_db("finor");

						$sql = "SELECT Kota FROM kota";
						$result = mysql_query($sql);

						echo "<select name = 'tujuan' onChange='cekTarif()' class='form-control' id='tujuan'>";
						while ($row = mysql_fetch_array($result)){
							echo "<option value='" . $row['Kota'] ."'>". $row['Kota'] . "</option>";
						}
						echo "</select>";

						  ?>
					</div>
					<div class="form-group">
						<label>Berat/kg </label>
						<input type="numberDecimal" min="0" step="1" class="form-control" placeholder="Masukkan Berat Barang" required="true" name="berat" id="berat" onChange="cekTarif()" value="1">
					</div>
					<div class="form-group">
						<label>Tarif</label>
						<input type="text" class="form-control" readonly required="true" id="tarif" name="tarif">
					</div>
					<div>
						<button type="submit" id="submit" name="submit" class="btn btn-info">Proses</button>
				</div>
				<div>
						
				</div>
			</form>
		</div>
	</div>

<script>
function cekTarif() {
        var asal = document.getElementById("asal").value;
        var tujuan = document.getElementById("tujuan").value;
        var berat = document.getElementById("berat").value;
        // document.getElementById("harga").value = "getharga.php?bahan="+bahan+"&jasa="+jasa;
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tarif").value = "Rp "+this.responseText+",00";
            }
        };
        xmlhttp.open("GET","getharga.php?asal="+asal+"&tujuan="+tujuan+"&berat="+berat,true);
        xmlhttp.send();
    
        
}
</script>
<!-- heupp didieu wae -->

	</body>

<!-- note:
sarahcantik : yg carousel gajadi-jadi sedih gaa -->
