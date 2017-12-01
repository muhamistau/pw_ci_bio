<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">		
     <div class="col-md-6">
	<center><h1>ISI BIODATA</h1></center>
	<br/>
    <form action="input.php" method="post">
		<div class="form-group">
			<label>NPM :</label>
			<input type="text" class="form-control" name="npm">
		</div>
		<div class="form-group">
			<label>NAMA :</label>
			<input type="text" class="form-control" name="nama">
		</div>
        <div class="form-group">
			<label>Alamat :</label>
            <textarea class="form-control" rows="3" name="alamat"></textarea>
		</div>
        <div class="form-group">
			<label>Jenis Kelamin :</label><br/>
			<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki</label>
            <label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan</label>
		</div>
     <input type="submit" class="btn btn-primary" value="Submit" name="submit">
	 </form>		
    </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>