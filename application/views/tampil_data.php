<html>
<head>
	<title>TAMPIL DATA MAHASISWA</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">
    <h1>DAFTAR MAHASISWA YANG SUDAH MASUK</h1>       
    <table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>NPM</th>
				<th>NAMA</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>AKSI</th>
			</tr>
		</thead>
		<tbody>
      <?php 
        foreach ($mhs->result() as $row) {
          ?>
            <tr>
              <td><?php echo $row->npm;?></td>
              <td><?php echo $row->nama;?></td>
              <td><?php echo $row->alamat;?></td>
              <td><?php echo $row->jk;?></td> 
              <td>
                  <a href="<?php echo base_url()."index.php/login/edit_data/".$row->npm;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>    
                  <a href="<?php echo base_url()."index.php/login/delete_data/".$row->npm;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
              </td>      
            </tr>
          <?php
        }
       ?>
    </tbody>
    </table>
     <form action="<?php echo base_url() ?>index.php/login/daftar" method="post">
     <input type="submit" class="btn btn-primary" value="Input" name="logout">
    </form> 
    </div>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
