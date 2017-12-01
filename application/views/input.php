<?php        
include "koneksi.php"; 

//input data
if(isset($_POST['submit']))
{
 $npm=$_POST['npm'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $jk=$_POST['jk'];
    
   $sql = "INSERT INTO identitas (npm, nama, alamat,jk)
   VALUES ('$npm', '$nama', '$alamat','$jk') ";
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
}
$conn->close();

?>

