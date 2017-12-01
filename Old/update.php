<?php        
 session_start();
if($_SESSION["level"]=="")
 {     
  header("Location: logout.php");
 }
else
{  
 $level=$_SESSION["level"];
 include "koneksi.php"; 
//update data
if(isset($_POST['update']))
{
 $npm=$_POST['npm'];   
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $jk=$_POST['jk'];    
   $sql = "UPDATE identitas set nama='$nama', alamat='$alamat', jk='$jk' where npm='$npm' ";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 }
 $conn->close();
}
?>
