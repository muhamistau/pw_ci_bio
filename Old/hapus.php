<?php       
session_start();
$level=$_SESSION["level"];
if ($level==3)
{
 include "koneksi.php";
 //hapus data
 $npm=$_GET['id'];   
   $sql = "delete from identitas where npm='$npm'";  
   if ($conn->query($sql) === TRUE) {
       // redirect ke halaman tampil data
       header("Location: tampil_data.php");
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
 $conn->close();
}
else
{
  header("Location: tampil_data.php");    
}

?>