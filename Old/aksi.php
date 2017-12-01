<?php
 session_start();

if(!isset($_POST["login"])) 
{    
  header("Location: login.php");
 }
else
{
 include "koneksi.php";
 $username=$_POST['username']; 
 $password=sha1($_POST['password']);    
 $sql = "SELECT * from users where username='$username' ";
 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    if($row["password"]==$password)
    {   
      $_SESSION['level']=$row["level"];
      //$_SESSION['username']=$row["username"];
      $_SESSION['npm']=$row["npm"]; 
      header("Location: tampil_data.php");
     }
     else
     {
       header("Location: login.php");   
     }
   }   
}
 else
 { 
    header("Location: login.php"); 
 }    
}

?>