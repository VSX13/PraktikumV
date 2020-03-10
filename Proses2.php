<?php
if (isset($_GET['nama']) AND isset($_GET['email']))
{
   $nama=$_GET['nama'];
   $email=$_GET['email'];
   $nama=htmlspecialchars($nama);
   $email=strip_tags($email);
}
else
{
   header("Location:Tugas.php");
}
  
if(empty($nama) OR empty($email))
{
   header("Location:Tugas.php?error=Data_kosong");
}
else
{
   if (is_numeric($nama))
   {
      header("Location:Tugas.php");
   }
   else
   {
      echo "Nama :".$_REQUEST['nama']."<br>";
      echo "Email :".$_REQUEST['email']."<br>";
      echo "Jam :".date("g:i:s a")."<br>";
      echo "Hari :".date("D")."<br>";
      echo "Tanggal :".date("d-F-Y")."<br>";
      echo "<a href=Biodata.php>Biodata Diri</a>"."<br>";
   }
} 
?>