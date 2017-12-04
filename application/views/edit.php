<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> 
</head>
<body>
    <div class="container">		
        <div class="col-md-6">
        	<center><h1>EDIT BIODATA</h1></center>
        	<br/>
            <form action="<?php echo base_url() ?>index.php/login/update_data" method="post">
        		<div class="form-group">
        			<label>NAMA :</label>
        			<input type="text" class="form-control" name="nama" value="<?php echo $mhs->nama;?>">
        		</div>
                <div class="form-group">
        			<label>Alamat :</label>
                    <textarea class="form-control" rows="3" name="alamat"><?php echo $mhs->alamat;?></textarea>
        		</div>
                <div class="form-group">
        			<label>Jenis Kelamin :</label><br/>
        			<label class="radio-inline"><input type="radio" name="jk" value="L" <?php if($mhs->jk=="L"):?>checked="checked" <?php endif;?>> Laki-Laki</label>
                    <label class="radio-inline"><input type="radio" name="jk" value="P" <?php if($mhs->jk=="P"):?>checked="checked" <?php endif;?>> Perempuan</label>
        		</div>
             <input type="submit" class="btn btn-primary" value="Update" name="update">
        	 </form>		
        </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>