  <!-- Aksi Genre -->
  <?php
    include "koneksi.php";
    
    if(isset($_POST['proses'])){
        mysqli_query($connect,"insert into genre set
        id_genre = '$_POST[id_genre]',
        nama_genre = '$_POST[nama_genre]'");
    }
    header("location:data_genre.php")

?>