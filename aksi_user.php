<!-- Aksi User -->
  <?php
    include "koneksi.php";
    
    if(isset($_POST['proses'])){
        mysqli_query($connect,"insert into user set
        email = '$_POST[email]',
        username = '$_POST[username]',
        password = '$_POST[password]'");
    }
    header("location:home2.php")

?>