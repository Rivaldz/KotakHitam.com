<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['signup_submit'])){
 
 //inlcude atau memasukkan file koneksi ke database
//  include('connection.php');
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $conn = mysqli_connect("localhost", "root", "","JobTesterDB");
 $username  = $_POST['username']; //membuat variabel $nis dan datanya dari inputan NIS
 $email  = $_POST['email']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $pass  = $_POST['password']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
 
 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 $input = mysqli_query($conn,"INSERT INTO username VALUES('','$email', '$pass', '$username')");
 
//  jika query input sukses
//  if($input){
  
//   echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="login.html">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
//  }else{
  
//   echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
//   echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
//  }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
?>