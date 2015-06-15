<?php
 
$koneksi = mysql_connect("localhost","root","");
$db = mysql_select_db("perpustakaan");
 
if($koneksi && $db){
      echo "Koneksi ke database berhasil";
}else{
      echo "koneksi gagal";
}
 
?>