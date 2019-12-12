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
 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Login Form Template | Tutorial Jinni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
    <style>
        body{
          font-family: 'Open Sans', sans-serif;
          background:#6610f2;
          margin: 0 auto 0 auto;  
          width:100%; 
          text-align:center;
          margin: 20px 0px 20px 0px;   
        }
        p{
          font-size:12px;
          text-decoration: none;
          color:#ffffff;
        }
        h1{
          font-size:1.5em;
          color:white;
        }
        .white{
          font-size:3em;
          color:white;
        }
        .box{
          background:#6c63ff;
          width:300px;
          border-radius:6px;
          margin: 0 auto 0 auto;
          padding:0px 0px 70px 0px;
          border: #2980b9 4px solid; 
        }
        .username{
          background:#ecf0f1;
          border: #ccc 1px solid;
          border-bottom: #ccc 2px solid;
          padding: 8px;
          width:250px;
          color:#AAAAAA;
          margin-top:10px;
          font-size:1em;
          border-radius:4px;
        }
        .button{
          background:#2ecc71;
          width:125px;
          padding-top:5px;
          padding-bottom:5px;
          color:white;
          border-radius:4px;
          border: #27ae60 1px solid;
          margin-top:20px;
          margin-bottom:20px;
          float:left;
          margin-left:88px;
          font-weight:800;
          font-size:0.8em;
        }
        .button:hover{
          background:#2CC06B; 
        }
        .fpwd{
            color:#f1c40f;
            text-decoration: underline;
        }
       #absoluteCenteredDiv{
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width:400px;
            height: 300px;
            text-align: center;
       }
    </style>


<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">KotakHitam.Com</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="tester.html" class="nav-link">Tester</a></li>
	          <li class="nav-item"><a href="sign-up.php" class="nav-link">Register</a></li>
	          <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	          <li class="nav-item cta mr-md-1"><a href="new-post.html" class="nav-link">Post a Job Testing</a></li>
	          <li class="nav-item cta cta-colored"><a href="job-post.html" class="nav-link">Want a Job Testing</a></li>

	        </ul>
	      </div>
	    </div>
    </nav>

    <div id="absoluteCenteredDiv">
        <form action="index.html" method="post">
            <div class="box">
                <h1 class="white">Login Form</h1>
                <input class="username" name="username" type="text" placeholder="User Name">
                <input class="username" name="username" type="password" placeholder="Password">
                <a href="#"><div class="button">Sign In</div></a>
            </div>
        </form>
        <!-- <p>Forgot your password? <a class="fpwd" href="#">Click Here!</a></p> -->
    </div>        
</body>
</html>