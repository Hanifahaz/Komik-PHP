<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Raleway", sans-serif;}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top w3-animate-left" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Re-Komik</b></h3>
  </div>
  <div class="w3-padding-10 w3-large w3-text-grey" style="font-weight:bold">
    <a href="home2.php" class="w3-bar-item w3-button">Home</a>
    <!----<a href="data_user.php" class="w3-bar-item w3-button">Data User</a>----->
    <a href="data_genre.php" class="w3-bar-item w3-button">Data Genre</a>
    <a href="data_komik.php" class="w3-bar-item w3-button">Data Komik</a>
    <!---<a href="user_signup.php"  class="w3-bar-item w3-button w3-padding">Register</a>-->
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:10px"></div>

  <!-- Header -->
  <header>
    <a href="#" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container w3-padding-16">
    <h1><b>Data Komik</b></h1>
    <div class="w3-section w3-bottombar w3-padding-10">
    </div>
    </div>
  </header>

  <!-- Pembukaan -->
  <div class="w3-row w3-padding-5">
    <div class="w3-twothird w3-container">
  <?php
  include "koneksi.php";
  $id = $_GET['id_komik'];
  $query = mysqli_query($connect,"SELECT * FROM komik WHERE id_komik='$id'");
  $kolom = mysqli_fetch_array($query);
  //untuk menyimpan
  if(isset($_POST['edit'])){
    $id = $_POST['id_komik'];
    $judul = $_POST['judul_komik'];
    $genre = $_POST['genre_komik'];
    $rating = $_POST['rating'];
    $status = $_POST['status'];
    $sinopsis = $_POST['sinopsis'];
    mysqli_query($connect,"UPDATE komik SET judul_komik='$judul',genre_komik='$genre',status='$status',sinopsis='$sinopsis',rating='$rating' WHERE id_komik='$id'");
    header("location:data_komik.php");
  }
  ?>


<form action=? method=POST>
    <table>
        <h3><b>EDIT DATA</b></h3>
        <tr>
            <td><input type="hidden" name="id_komik" value=<?php echo $kolom['id_komik'];?> ></td></br>
        </tr>
        <tr>
            <td width="130">Judul Komik :</td>
            <td><input type="text" name=judul_komik value=<?php echo $kolom['judul_komik'];?> ></td>
        </tr>
        <tr>
            <td width="130">Genre       :</td>
            <td><input type="text" name=genre_komik value=<?php echo $kolom['genre_komik'];?> ></td>
        </tr>
        <tr>
            <td width="130">Rating      :</td>
            <td><input type="text" name=rating value=<?php echo $kolom['rating'];?> ></td>
        </tr>
        <tr>
            <td width="130">Status      :</td>
            <td><input type="text" name=status value=<?php echo $kolom['status'];?> ></td>
        </tr>
        <tr>
            <td width="130">Sinopsis    :</td>
            <td><textarea name=sinopsis rows="5" cols="30" value=<?php echo $kolom['sinopsis'];?> ></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="edit" value="Simpan" ><input type="reset"></td>
        </tr>
    </table></br></br></br></br></br></br></br></br></br></br></br></br>
  </form>
    </div>
  </div>

  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.instagram.com/hanifahazza__/" title="W3.CSS" target="_blank" class="w3-hover-opacity">Hanifah Azzahra</a></div>

<!-- End page content -->
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
