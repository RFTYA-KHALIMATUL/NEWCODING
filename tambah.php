<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
    $kategori= $_POST ['kategori'];
   mysqli_query($conn, "INSERT INTO kategori (kategori) VALUES ('$kategori')");
   
header("location:index.php");
exit;
}
?>

<h2>Tambah Kategori</h2>
<form method= "POST">
    kategori= <input type="text" name="kategori" required><br><br>
    <button type="submit" name="simpan">simpan</button>
    <a href= "index.php">kembali</a>
</form>
