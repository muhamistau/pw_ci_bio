<?php 
 session_start();
if($_SESSION["level"]=="")
 {     
  header("Location: logout.php");
 }
else
{  
 $npm= $_SESSION["npm"];
 $level=$_SESSION["level"];
?>
<html>
<head>
	<title>TAMPIL DATA MAHASISWA</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>   
 <div class="container">
    
<?php
  include "koneksi.php";     
    //tampilkan data 
     
 if($level=="1")
 {
     $sql = "SELECT npm, nama, alamat,jk FROM identitas where npm ='$npm'";
 }
  elseif($level=="3")
  {
      $sql = "SELECT npm, nama, alamat,jk FROM identitas";
  }
 $result = $conn->query($sql);
?> 
    <h1>DAFTAR MAHASISWA YANG SUDAH MASUK</h1>       
    <table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>NAMA</th>
                <th>ALAMAT</th>
                <th>GENDER</th>
                <th>AKSI</th>
			</tr>
		</thead>
		<tbody>
<?php 
 if ($result->num_rows > 0) {
    // output data of each row
    $no=0;
    while($row = $result->fetch_assoc()) {
    	$no++;
        ?>
            <tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row["npm"];?></td>
				<td><?php echo $row["nama"];?></td>
                <td><?php echo $row["alamat"];?></td>
                <td><?php echo $row["jk"];?></td> 
                <td><a href="<?php echo "edit.php?id=".$row["npm"];?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
                <?php
                 if($level=="3")
                 {
                ?>    
                    <a href="<?php echo "hapus.php?id=".$row["npm"];?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
                <?php
                 }
                ?>
                
			</tr>
    <?php        
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    </tbody>
    </table>
     <form action="logout.php" method="post">
     <input type="submit" class="btn btn-primary" value="Logout" name="logout">
    </form> 
    </div>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>

