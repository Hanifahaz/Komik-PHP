<!-- Aksi Komik -->
  <?php
    include "koneksi.php";
    
    if(isset($_POST['proses'])){
        mysqli_query($connect,"insert into komik set
        id_komik = '$_POST[id_komik]',
        judul_komik = '$_POST[judul_komik]',
        genre_komik = '$_POST[genre_komik]',
        rating = '$_POST[rating]',
        status = '$_POST[status]',
        sinopsis = '$_POST[sinopsis]'");

        echo "Data telah tersimpan..!";
    }
    header("location:data_komik.php")

?>